<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_model extends CI_Model
{
    public function tampilBarang()
    {
        return $this->db->get('tb_barang')->result_array();
    }

    public function tampilinvoive()
    {
        return $this->db->get('pemesanan')->result_array();
    }
}
