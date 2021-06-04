<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPesan');
        $this->load->model('m_invoice');
    }
    // fungsi index
    public function index()
    {
        $data['title'] = 'Pemesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('user/template/head', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/pesan', $data);
        $this->load->view('public/template/end_content');
        //$this->load->view('user/template/footer');
    }
    public function cek()
    {
        $data['title'] = 'Cek Pemesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['MenuUser'] = $this->menu->getMenuUser();
        $this->load->view('public/template/head', $data);
        $this->load->view('public/template/menu_head');
        $this->load->view('public/home/cek');
        $this->load->view('public/template/isipesanan');
        $this->load->view('public/template/end_content');
        $this->load->view('public/template/footer');
    }
    public function product($id_brg)
    {
        $data['title'] = ' Product';
        $data['invoice'] = $this->m_invoice->get_no_invoice();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $data['barang'] = $this->db->get_where('tb_barang', ['id_brg' => $id_brg])->result_array();
        $this->load->view('user/template/head', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/barang', $data);
        //$this->load->view('public/template/isipesanan');
        $this->load->view('public/template/end_content');
        //$this->load->view('public/template/footer');
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
    }
}
