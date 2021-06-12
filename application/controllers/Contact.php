<?php
class Contact extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_kontak');
    //$this->load->model('m_pengunjung');
    //$this->m_pengunjung->count_visitor();
  }
  function index()
  {
    $data['title'] = 'Contact';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model', 'menu');

    $data['MenuUser'] = $this->menu->getMenuUser();
    $this->load->view('public/template/head', $data);
    $this->load->view('public/template/menu_head');
    $this->load->view('public/home/about');
    $this->load->view('public/template/end_content');
    $this->load->view('public/template/footer');
  }

  function kirim_pesan()
  {
    $nama = htmlspecialchars($this->input->post('xnama', TRUE), ENT_QUOTES);
    $email = htmlspecialchars($this->input->post('xemail', TRUE), ENT_QUOTES);
    $kontak = htmlspecialchars($this->input->post('xphone', TRUE), ENT_QUOTES);
    $pesan = htmlspecialchars($this->input->post('xmessage', TRUE), ENT_QUOTES);
    $this->m_kontak->kirim_pesan($nama, $email, $kontak, $pesan);
    echo $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><img style="width:30px; heigth:30px; margin-right:5px;" src="assets/img/icon/info1.svg">Pesan Anda Telah Terkirim, Silahkan Tunggu Respon Dari Admin Kami.</div>');
    redirect('contact');
  }
}
