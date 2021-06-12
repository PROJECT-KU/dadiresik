<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Address_model extends CI_Model
{

    function get_category()
    {
        $query = $this->db->get('provinsi');
        return $query;
    }

    function get_sub_category($category_id)
    {
        $query = $this->db->get_where('kabupaten', array('id_prov' => $category_id));
        return $query;
    }
}
