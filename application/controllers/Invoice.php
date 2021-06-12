<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPesan');
    }

    public function tambah_pesan()
    {
        $nama = $this->input->post('nama');
        $id_pemesanan = $this->input->post('id_pemesanan');
        $id_brg = $this->input->post('id_brg');
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $metode = $this->input->post('recorded');

        $data = array(
            'nama' => $nama,
            'id_pemesanan' => $id_pemesanan,
            'id' => $id,
            'id_brg' => $id_brg,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'metode_bayar'    => $metode,
            'status' => 'Pending'

        );
        $this->db->insert('pemesanan', $data);

        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->order_by('id_pemesanan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row_array();
        //$insert = $this->ModelPesan->tambah_data($data, 'pemesanan');
        //echo $result;
        $insert = $result['id_pemesanan'];

        redirect('' . $insert);
    }

    public function index()
    {
        $data['title'] = 'Cek Pemesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $this->load->model('ModelPesan', 'struk');
        //$data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('user/template/head', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/invoice', $data);
    }
}
