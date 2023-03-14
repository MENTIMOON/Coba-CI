<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_wilayah extends CI_Model
{
    //MENGAMBIL DATA DARI DB
    public function getAllDesa()
    {
        $query = $this->db->get('tbl_desa');
        return $query->result_array();
    }
    public function getAllKec()
    {
        $query = $this->db->get('tbl_kecamatan');
        return $query->result_array();
    }
    public function getAllKab()
    {
        $query = $this->db->get('tbl_kabupaten');
        return $query->result_array();
    }
}
