<?php
class Chart extends CI_Model
{
  function chart()
  {
    $this->db->group_by('jurusan');
    $this->db->select('jurusan');
    $this->db->select("count(*) as total");
    return $this->db->from('mahasiswa')
      ->get()
      ->result();
  }
}
