<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kontak');
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/footer');
    }
    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role';
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function roleaccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role Akses';
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }
    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, Akses telah diubah.</div>');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('admin/template/footer');
    }

    public function editprofile()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('admin/template/footer');
        } else {
            $name = $this->input->post('nama');
            $hp = $this->input->post('hp');
            $kelamin = $this->input->post('kelamin');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            //cek gambar yang akan diupload
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['user']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $name);
            $this->db->set('hp', $hp);
            $this->db->set('kelamin', $kelamin);
            $this->db->set('kabupaten', $kab);
            $this->db->set('provinsi', $prov);
            $this->db->set('rt', $rt);
            $this->db->set('rw', $rw);
            $this->db->set('alamat', $alamat);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i style="color: red; margin-right:5px;" class="fas fa-info"></i>Data Profil Anda Telah Di Perbarui.</div>');
            redirect('admin/editprofile');
        }
    }
    public function invoices()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Invoices';
        $this->load->model('Pesan_model', 'pesan');
        $data['pesan'] = $this->pesan->tampilinvoive();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('admin/template/footer');
    }
    public function lunas($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $pass = 1;
        $this->db->set('status', $pass);
        $this->db->where('id_pemesanan', $id);
        $this->db->update('pemesanan');
        redirect('admin/invoices');
    }
    public function cancel($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $pass = 2;
        $this->db->set('status', $pass);
        $this->db->where('id_pemesanan', $id);
        $this->db->update('pemesanan');
        redirect('admin/invoices');
    }

    function inbox()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Inbox';
        $this->m_kontak->update_status_kontak();
        $data['data'] = $this->m_kontak->get_all_inbox();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/inbox', $data);
        $this->load->view('admin/template/footer');
    }

    function hapus_inbox()
    {
        $kode = $this->input->post('kode');
        $this->m_kontak->hapus_kontak($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/inbox');
    }
    public function editpassword()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $pass = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $this->db->set('password', $pass);
        $this->db->where('email', $email);
        $this->db->update('user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i style="color: red; margin-right:5px;" class="fas fa-info"></i>Password Anda Telah Di Perbarui.</div>');
        redirect('admin/editprofile');
    }
}
