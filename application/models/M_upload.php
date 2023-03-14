<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_upload extends CI_Model
{
    public function getAllFile()
    {
        $query = $this->db->get('tbl_berkas');
        return $query->result_array();
    }
    public function getFileById($id)
    {
        return $this->db->get_where('tbl_berkas', ['id_berkas' => $id])->row_array();
    }
    public function insertFile()
    {
        $data = [
            'nama_berkas' => $this->upload->data('file_name'),
            'keterangan' => $this->input->post('keterangan', true),
            'tipe_berkas' => $this->upload->data('file_ext'),
            'ukuran_berkas' => $this->upload->data('file_size'),
        ];
        $this->db->insert('tbl_berkas', $data);
    }
    public function deleteFile($id)
    {
        $this->db->delete('tbl_berkas', ['id_berkas' => $id]);
    }
}
