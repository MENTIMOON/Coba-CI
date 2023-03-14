<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_lokasi_ikm extends CI_Model
{
    //MENGAMBIL DATA DARI DB
    public function getAllData()
    {
        $query = $this->db->get('tbl_lokasi_sentra');
        return $query->result_array();
    }
    public function getIkmById($id)
    {
        $this->db->join('tbl_jenis_ikm', 'tbl_lokasi_sentra.id_jenis_ikm = tbl_jenis_ikm.id_jenis_ikm');
        $this->db->join('tbl_kabupaten', 'tbl_lokasi_sentra.id_kabupaten = tbl_kabupaten.id_kabupaten');
        $this->db->join('tbl_kecamatan', 'tbl_lokasi_sentra.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_lokasi_sentra.id_desa = tbl_desa.id_desa');
        $this->db->order_by('id_lokasi');
        return $this->db->get_where('tbl_lokasi_sentra', ['id_lokasi' => $id])->row_array();
    }
    public function getWhereIkm($id)
    {
        $this->db->join('tbl_jenis_ikm', 'tbl_lokasi_sentra.id_jenis_ikm= tbl_jenis_ikm.id_jenis_ikm');
        $this->db->join('tbl_kecamatan', 'tbl_lokasi_sentra.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_lokasi_sentra.id_desa = tbl_desa.id_desa');
        $this->db->order_by('id_lokasi');
        return $this->db->get_where('tbl_lokasi_sentra', $id);
    }
    //MENGHITUNG JUMLAH DATA
    public function totalIkmBt()
    {
        $query = $this->db->query('SELECT id_lokasi FROM tbl_lokasi_sentra WHERE id_kabupaten=1');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalIkmGk()
    {
        $query = $this->db->query('SELECT id_lokasi FROM tbl_lokasi_sentra WHERE id_kabupaten=2');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalIkmKp()
    {
        $query = $this->db->query('SELECT id_lokasi FROM tbl_lokasi_sentra WHERE id_kabupaten=3');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalIkmSl()
    {
        $query = $this->db->query('SELECT id_lokasi FROM tbl_lokasi_sentra WHERE id_kabupaten=4');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalIkmYk()
    {
        $query = $this->db->query('SELECT id_lokasi FROM tbl_lokasi_sentra WHERE id_kabupaten=5');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    //MENAMPILKAN DATA DARI DB
    public function getDataIkm()
    {
        $this->db->join('tbl_jenis_ikm', 'tbl_lokasi_sentra.id_jenis_ikm= tbl_jenis_ikm.id_jenis_ikm');
        $this->db->join('tbl_kabupaten', 'tbl_lokasi_sentra.id_kabupaten = tbl_kabupaten.id_kabupaten');
        $this->db->join('tbl_kecamatan', 'tbl_lokasi_sentra.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_lokasi_sentra.id_desa = tbl_desa.id_desa');
        $this->db->order_by('id_lokasi');
        return $this->db->get('tbl_lokasi_sentra')->result_array();
    }
    //SIMPAN DATA KE DB
    public function inputDataIkm()
    {
        $data = [
            "nama_sentra" => $this->input->post('nama_sentra', true),
            "id_jenis_ikm" => $this->input->post('jenis_ikm', true),
            "kbli" => $this->input->post('kbli', true),
            "alamat_sentra" => $this->input->post('alamat_sentra', true),
            "id_desa" => $this->input->post('desa', true),
            "id_kecamatan" => $this->input->post('kecamatan', true),
            "id_kabupaten" => $this->input->post('kabupaten', true),
            "kontak" => $this->input->post('kontak', true),
            "telepon" => $this->input->post('telepon', true),
            "unit" => $this->input->post('unit', true),
            "tenaga_kerja" => $this->input->post('tenaga_kerja', true),
            "nilai_investasi" => $this->input->post('nilai_investasi', true),
            "jumlah" => $this->input->post('jumlah', true),
            "satuan" => $this->input->post('satuan', true),
            "nilai_produksi" => $this->input->post('nilai_produksi', true),
            "nilai_bb" => $this->input->post('nilai_bb', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        $this->db->insert('tbl_lokasi_sentra', $data);
    }
    //EDIT DATA
    public function editDataIkm()
    {
        $data = [
            "nama_sentra" => $this->input->post('nama_sentra', true),
            "id_jenis_ikm" => $this->input->post('jenis_ikm', true),
            "kbli" => $this->input->post('kbli', true),
            "alamat_sentra" => $this->input->post('alamat_sentra', true),
            "id_desa" => $this->input->post('desa', true),
            "id_kecamatan" => $this->input->post('kecamatan', true),
            "id_kabupaten" => $this->input->post('kabupaten', true),
            "kontak" => $this->input->post('kontak', true),
            "telepon" => $this->input->post('telepon', true),
            "unit" => $this->input->post('unit', true),
            "tenaga_kerja" => $this->input->post('tenaga_kerja', true),
            "nilai_investasi" => $this->input->post('nilai_investasi', true),
            "jumlah" => $this->input->post('jumlah', true),
            "satuan" => $this->input->post('satuan', true),
            "nilai_produksi" => $this->input->post('nilai_produksi', true),
            "nilai_bb" => $this->input->post('nilai_bb', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        $this->db->where('id_lokasi', $this->input->post('id'));
        $this->db->update('tbl_lokasi_sentra', $data);
    }
    //HAPUS DATA
    public function deleteDataIkm($id)
    {
        $this->db->delete('tbl_lokasi_sentra', ['id_lokasi' => $id]);
    }
}
