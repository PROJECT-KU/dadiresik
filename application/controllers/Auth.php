<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email Tidak Boleh Kosong', 'valid_email', 'Masukan Email dengan Benar']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Anda Kosong',
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('public/auth/template/login', $data);
            $this->load->view('public/auth/index');
            $this->load->view('public/template/head');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //untuk mengetahui adanya user/tidak
        if ($user) {
            //mengecek user aktif atau tidak
            if ($user['user_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Anda Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">User Anda Belum Aktif</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Anda Belum Terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap Tidak Boleh Kosong']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['required' => 'Email Tidak Boleh Kosong', 'is_unique' => 'Email Sudah Terdaftar']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'required' => 'Password Anda Kosong',
            'matches' => 'Password Tidak Cocok',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Akun';
            $this->load->view('public/auth/template/registrasi', $data);
            $this->load->view('public/auth/registration');
            $this->load->view('public/template/head');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'email' => htmlspecialchars($this->input->post('email'), true),
                'gambar' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'user_active' => 1,
                'date_create' => time()

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Akun Anda Telah Terdaftar, Silahkan Login.</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Logout</div>');
        redirect('auth/index');
    }
<<<<<<< HEAD

    public function forgetPassword(){
                $data['title'] = 'Forget Password';
                $this->load->view('public/auth/template/login', $data);
                $this->load->view('public/auth/forget_password');
                $this->load->view('public/template/head');
    }

    public function proses_forget(){
        $email = $this->input->post('email');
        $user = $this->db->get_where('user', ['email' => $email, 'user_active' => 1])->row_array();

        if($user) { 
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token);

            $this->session->set_flashdata('pesan', '<div class="alert alert-succes" role="alert">Silahkan Periksa Email Anda Untuk Reset Password</div>');
            redirect('auth/forgetPassword');

        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar</div>');
            redirect('auth/forgetPassword');
        }
    }

    private function _sendEmail($token){
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'aldialu0@gmail.com',
            'smtp_pass' => 'sayasaya123',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('aldialu0@gmail.com', 'Dadi Resik - Yogyakarta');
        $this->email->to($this->input->post('email'));

        $this->email->subject('Reset Password');
        $this->email->message('Click this link to reset your password : <a href="'.base_url().'auth/resetpassword?email=' .$this->input->post('email'). '&token=' .urlencode($token). '">Reset Password</a>');

        if($this->email->send()){
            return true;
        }else{
            echo $this->email->print_debugger();
            die;
        }

    }

    public function resetpassword(){
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email, 'user_active' => 1])->row_array();

        if($user) { 
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if($user_token) { 
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();

            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Reset Password Gagal Dilakukan ! Wrong Token.</div>');
                redirect('auth/index');
            }

        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Reset Password Gagal Dilakukan ! Wrong Email.</div>');
            redirect('auth/index');
        }
    }


    public function changePassword(){

        if(!$this->session->userdata('reset_email')){
            redirect('auth/index');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[3]|matches[password1]');

        if($this->form_validation->run() == false){
            $data['title'] = 'Change Password';
            $this->load->view('public/auth/template/login', $data);
            $this->load->view('public/auth/change_password'); 
            $this->load->view('public/template/head');
        }
        else{
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Reset Password Berhasil Diubah. Silahkan Login Kembali</div>');
            redirect('auth/index');
        }


        
    }
=======
>>>>>>> 6814ad7313d80bdfa9d4ab5bc6a42af065ec3e47
}
