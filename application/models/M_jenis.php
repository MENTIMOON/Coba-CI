<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_jenis extends CI_Model
{
    //MENGAMBIL DATA DARI DB
    public function getJenisIkm()
    {
        $query = $this->db->get('tbl_jenis_ikm');
        return $query->result_array();
    }
    public function getTipePasar()
    {
        $query = $this->db->get('tbl_tipe_pasar');
        return $query->result_array();
    }
    public function getSkalaPr()
    {
        $query = $this->db->get('tbl_skala_prshn');
        return $query->result_array();
    }
}
