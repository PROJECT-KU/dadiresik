<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Barang';
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Pesan_model', 'pesan');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['barang'] = $this->pesan->tampilBarang();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('admin/template/footer');
    }
    public function tambahbarang()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Tambah Barang';
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Pesan_model', 'pesan');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['barang'] = $this->pesan->tampilBarang();

        $this->form_validation->set_rules('nama_brg', 'Nama Barang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        //$upload_image = $_FILES['gambar']['nama'];

        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '2048';
        $config['upload_path'] = './assets/img/gambarProduk/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $old_image = $data['barang']['gambar'];
            if ($old_image != 'default.jpg') {
                unlink(FCPATH . 'assets/img/gambarProduk/' . $old_image);
            }
            $new_image = $this->upload->data('file_name');
            $this->db->set('gambar_barang', $new_image);
        } else {
            // echo $this->upload->display_errors();
        }


        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/tambahbarang', $data);
            $this->load->view('admin/template/footer');
        } else {
            $data = [
                'id_brg' => random_string('alnum', 5),
                'nama_brg' => $this->input->post('nama_brg'),
                'keterangan' => $this->input->post('keterangan'),
                'kategori' => $this->input->post('kategori'),
                'harga' => $this->input->post('harga'),
                'gambar_barang' => $new_image,
            ];
            $this->db->insert('tb_barang', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Barang Telah berhasil ditambah</div>');
            redirect('barang');
        }
    }
}
