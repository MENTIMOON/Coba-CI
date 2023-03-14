<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_login extends CI_Model
{
    //MENGAMBIL DATA DARI DB
    public function authUser($table, $auth)
    {
        return $this->db->get_where($table, $auth);
    }
}
