<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukti extends CI_Controller
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
        $data['title'] = ' Form Pemesanan';
        $data['invoice'] = $this->m_invoice->get_no_invoice();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();

        //$data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('user/template/head', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/uploadbukti', $data);
        //$this->load->view('public/template/isipesanan');
        //$this->load->view('public/template/end_content');
        //$this->load->view('public/template/footer');
    }
}
