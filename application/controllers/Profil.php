<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Address_model', 'address_model');
    }
    // fungsi index
    public function index()
    {
        $data['title'] = 'Profile';
        $data['provinsi'] = $this->address_model->get_category()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $this->load->view('user/template/head', $data);
        $this->load->view('user/template/navbar', $data);
        $this->load->view('user/profil', $data);
    }
    public function kota($provinsi)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $provinsi,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: ac350718e0c5293b822c7fcc032a813f"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $kabupaten = json_decode($response, true);
            if ($kabupaten['rajaongkir']['status']['code'] == 200) {
                foreach ($kabupaten['rajaongkir']['results'] as $kb) {
                    echo "<option value='$kb[city_id]' required>$kb[city_name]</option>";
                }
            }
        }
    }
    public function editprofile()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=" . $this->input->post('kabupaten') . "&province=" . $this->input->post('provinsi'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: ac350718e0c5293b822c7fcc032a813f"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $hasil = json_decode($response, true);
            if ($hasil['rajaongkir']['status']['code'] == 200) {
                $prov = $hasil['rajaongkir']['results']['province'];
                $kab = $hasil['rajaongkir']['results']['city_name'];
            }
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';

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
            $config['max_size']     = '8048';
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
        redirect('profil');
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
        redirect('profil');
    }
}
