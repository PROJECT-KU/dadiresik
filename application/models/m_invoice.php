<?php
class M_invoice extends CI_Model
{

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_pemesanan,4)) AS id_pesan FROM pemesanan");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->id_pesan) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . $kd;
    }
}
