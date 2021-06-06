<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formpesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPesan');
        $this->load->model('m_invoice');
    }

    // fungsi index
    public function index($id_brg)
    {
        $data['title'] = ' Form Pemesanan';
        $data['invoice'] = $this->m_invoice->get_no_invoice();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data['MenuUser'] = $this->menu->getMenuUser();
        $data['barang'] = $this->db->get_where('tb_barang', ['id_brg' => $id_brg])->result_array();
        //$data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('user/template/head', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/formpesan', $data);

        //$this->load->view('public/template/isipesanan');
        //$this->load->view('public/template/end_content');
        //$this->load->view('public/template/footer');
    }

    //public function tambah_pesan()
    //{
    //    $nama = $this->input->post('nama');
    //    $id_pemesanan = $this->input->post('id_pemesanan');
    //    $id_brg = $this->input->post('id_brg');
    //    $id = $this->input->post('id');
    //    $tanggal = $this->input->post('tanggal');
    //    $waktu = $this->input->post('waktu');
    //    $metode = $this->input->post('recorded');

    //    $data = array(
    //        'nama' => $nama,
    //        'id_pemesanan' => $id_pemesanan,
    //        'id' => $id,
    //        'id_brg' => $id_brg,
    //        'tanggal' => $tanggal,
    //        'waktu' => $waktu,
    //        'metode_bayar'    => $metode,
    //        'status' => 'Pending'

    //    );
    //    $this->db->insert('pemesanan', $data);

    //    $this->db->select('*');
    //    $this->db->from('pemesanan');
    //    $this->db->order_by('id_pemesanan', 'DESC');
    //    $this->db->limit(1);
    //    $query = $this->db->get();
    //    $result = $query->row_array();
    //    //$insert = $this->ModelPesan->tambah_data($data, 'pemesanan');
    //    //echo $result;
    //    $insert = $result['id_pemesanan'];

    //    redirect('FormPesan/struk_bayar/' . $insert);
    //}





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
    public function cancel($id)
    {
        $this->db->where('id_pemesanan', $id);
        $this->db->delete('pemesanan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Menu Telah Dihapus</div>');
        redirect('formpesan/index/');
    }
    public function checkout()
    {
        $data['title'] = ' Form Pemesanan';
        $data['invoice'] = $this->m_invoice->get_no_invoice();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pesan_model', 'pesan');
        $this->load->model('Menu_model', 'menu');
        $data = [
            'id_pemesanan' => $this->input->post('id_pemesanan'),
            'email' => $this->input->post('email'),
            'nama_brg' => $this->input->post('nama_brg'),
            'harga' => $this->input->post('harga'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('waktu'),
            'status' => 0,
        ];
        $this->db->insert('pemesanan', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i style="color: red; margin-right:5px;" class="fas fa-info"></i>Pesanan Anda Telah Berhasil, Silahkan Tunggu Konfirmasi Dari Admin.</div>');
        redirect('invoice');
    }
}
