<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_lokasi_eksportir extends CI_Model
{
    //MENGAMBIL DATA DARI DB
    public function getAllEks()
    {
        $query = $this->db->get('tbl_eksportir');
        return $query->result_array();
    }
    public function getEksById($id)
    {
        $this->db->join('tbl_kabupaten', 'tbl_eksportir.id_kabupaten = tbl_kabupaten.id_kabupaten');
        $this->db->join('tbl_kecamatan', 'tbl_eksportir.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_eksportir.id_desa = tbl_desa.id_desa');
        $this->db->join('tbl_skala_prshn', 'tbl_eksportir.id_skala_prshn = tbl_skala_prshn.id_skala_prshn');
        $this->db->order_by('id_eksportir');
        return $this->db->get_where('tbl_eksportir', ['id_eksportir' => $id])->row_array();
    }
    public function getWhereEks($id)
    {
        $this->db->join('tbl_kecamatan', 'tbl_eksportir.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_eksportir.id_desa = tbl_desa.id_desa');
        $this->db->join('tbl_skala_prshn', 'tbl_eksportir.id_skala_prshn = tbl_skala_prshn.id_skala_prshn');
        $this->db->order_by('id_eksportir');
        return $this->db->get_where('tbl_eksportir', $id);
    }
    //MENGHITUNG JUMLAH DATA
    public function totEksBt()
    {
        $query = $this->db->query('SELECT id_eksportir FROM tbl_eksportir WHERE id_kabupaten=1');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totEksGk()
    {
        $query = $this->db->query('SELECT id_eksportir FROM tbl_eksportir WHERE id_kabupaten=2');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totEksKp()
    {
        $query = $this->db->query('SELECT id_eksportir FROM tbl_eksportir WHERE id_kabupaten=3');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totEksSl()
    {
        $query = $this->db->query('SELECT id_eksportir FROM tbl_eksportir WHERE id_kabupaten=4');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totEksYk()
    {
        $query = $this->db->query('SELECT id_eksportir FROM tbl_eksportir WHERE id_kabupaten=5');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    //MENAMPILKAN DATA DARI DB
    public function getDataEks()
    {
        $this->db->join('tbl_desa', 'tbl_eksportir.id_desa = tbl_desa.id_desa');
        $this->db->join('tbl_kecamatan', 'tbl_eksportir.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_kabupaten', 'tbl_eksportir.id_kabupaten = tbl_kabupaten.id_kabupaten');
        $this->db->join('tbl_skala_prshn', 'tbl_eksportir.id_skala_prshn = tbl_skala_prshn.id_skala_prshn');
        $this->db->order_by('id_eksportir');
        return $this->db->get('tbl_eksportir')->result_array();
    }
    //SIMPAN DATA KE DB
    public function inputDataEks()
    {
        $data = [
            "nama_prshn" => $this->input->post('nama_prshn', true),
            "id_desa" => $this->input->post('desa', true),
            "id_kecamatan" => $this->input->post('kecamatan', true),
            "id_kabupaten" => $this->input->post('kabupaten', true),
            "komoditi" => $this->input->post('komoditi', true),
            "jenis_prshn" => implode(',', $this->input->post('jenis_prshn', true)),
            "id_skala_prshn" => $this->input->post('skala_prshn', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        $this->db->insert('tbl_eksportir', $data);
    }
    //EDIT DATA
    public function editDataEks()
    {
        $data = [
            "nama_prshn" => $this->input->post('nama_prshn', true),
            "id_desa" => $this->input->post('desa', true),
            "id_kecamatan" => $this->input->post('kecamatan', true),
            "id_kabupaten" => $this->input->post('kabupaten', true),
            "komoditi" => $this->input->post('komoditi', true),
            "jenis_prshn" => implode(',', $this->input->post('jenis_prshn', true)),
            "id_skala_prshn" => $this->input->post('skala_prshn', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        $this->db->where('id_eksportir', $this->input->post('id'));
        $this->db->update('tbl_eksportir', $data);
    }
    //HAPUS DATA
    public function deleteDataEks($id)
    {
        $this->db->delete('tbl_eksportir', ['id_eksportir' => $id]);
    }
}
