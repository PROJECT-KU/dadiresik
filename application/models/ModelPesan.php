<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPesan extends CI_Model
{
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);

        // Return the status
        return $this->db->insert_id();
    }

    public function struk_bayar($insert)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('tb_barang', 'tb_barang.id_brg = pemesanan.id_brg');
        $this->db->join('user', 'user.id = pemesanan.id');
        $this->db->where('pemesanan.id_pemesanan', $insert);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function struk()
    {
        $id = $this->session->userdata['logged_in']['id']; // dapatkan id user yg login
        $this->db->select('id, user');
        $this->db->where('id', $id); //
        $this->db->from('pemesanan');
        $query = $this->db->get();
        return $query->result();
    }
}
