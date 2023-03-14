<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_lokasi_pasar extends CI_Model
{
    //MENGAMBIL DATA DARI DB
    public function getAllPasar()
    {
        $query = $this->db->get('tbl_lokasi_pasar');
        return $query->result_array();
    }
    public function getPasarById($id)
    {
        $this->db->join('tbl_kabupaten', 'tbl_lokasi_pasar.id_kabupaten = tbl_kabupaten.id_kabupaten');
        $this->db->join('tbl_kecamatan', 'tbl_lokasi_pasar.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_lokasi_pasar.id_desa = tbl_desa.id_desa');
        $this->db->join('tbl_tipe_pasar', 'tbl_lokasi_pasar.id_tipe_pasar = tbl_tipe_pasar.id_tipe_pasar');
        $this->db->order_by('id_lokasi_pasar');
        return $this->db->get_where('tbl_lokasi_pasar', ['id_lokasi_pasar' => $id])->row_array();
    }
    public function getWherePasar($id)
    {
        $this->db->join('tbl_kecamatan', 'tbl_lokasi_pasar.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_desa', 'tbl_lokasi_pasar.id_desa = tbl_desa.id_desa');
        $this->db->join('tbl_tipe_pasar', 'tbl_lokasi_pasar.id_tipe_pasar = tbl_tipe_pasar.id_tipe_pasar');
        $this->db->order_by('id_lokasi_pasar');
        return $this->db->get_where('tbl_lokasi_pasar', $id);
    }
    //MENGHITUNG JUMLAH DATA
    public function totPasarBt()
    {
        $query = $this->db->query('SELECT id_lokasi_pasar FROM tbl_lokasi_pasar WHERE id_kabupaten=1');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totPasarGk()
    {
        $query = $this->db->query('SELECT id_lokasi_pasar FROM tbl_lokasi_pasar WHERE id_kabupaten=2');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totPasarKp()
    {
        $query = $this->db->query('SELECT id_lokasi_pasar FROM tbl_lokasi_pasar WHERE id_kabupaten=3');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totPasarSl()
    {
        $query = $this->db->query('SELECT id_lokasi_pasar FROM tbl_lokasi_pasar WHERE id_kabupaten=4');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totPasarYk()
    {
        $query = $this->db->query('SELECT id_lokasi_pasar FROM tbl_lokasi_pasar WHERE id_kabupaten=5');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    //MENAMPILKAN DATA DARI DB
    public function getDataPasar()
    {
        $this->db->join('tbl_desa', 'tbl_lokasi_pasar.id_desa = tbl_desa.id_desa');
        $this->db->join('tbl_kecamatan', 'tbl_lokasi_pasar.id_kecamatan = tbl_kecamatan.id_kecamatan');
        $this->db->join('tbl_kabupaten', 'tbl_lokasi_pasar.id_kabupaten = tbl_kabupaten.id_kabupaten');
        $this->db->join('tbl_tipe_pasar', 'tbl_lokasi_pasar.id_tipe_pasar = tbl_tipe_pasar.id_tipe_pasar');
        $this->db->order_by('id_lokasi_pasar');
        return $this->db->get('tbl_lokasi_pasar')->result_array();
    }
    //SIMPAN DATA KE DB
    public function inputDataPasar()
    {
        $data = [
            "id_desa" => $this->input->post('desa', true),
            "id_kecamatan" => $this->input->post('kecamatan', true),
            "id_kabupaten" => $this->input->post('kabupaten', true),
            "nama_pasar" => $this->input->post('nama_pasar', true),
            'luas_lahan' => $this->input->post('luas_lahan', true),
            'luas_bangunan' => $this->input->post('luas_bangunan', true),
            'id_tipe_pasar' => $this->input->post('tipe_pasar', true),
            'pasaran' => implode(',', $this->input->post('pasaran', true)),
            'jml_pedagang' => $this->input->post('jml_pedagang', true),
            'kios' => $this->input->post('kios', true),
            'los' => $this->input->post('los', true),
            'lapak' => $this->input->post('lapak', true),
            'omzet' => $this->input->post('omzet', true),
            'retribusi' => $this->input->post('retribusi', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        $this->db->insert('tbl_lokasi_pasar', $data);
    }
    //EDIT DATA
    public function editDataPasar()
    {
        $data = [
            "id_desa" => $this->input->post('desa', true),
            "id_kecamatan" => $this->input->post('kecamatan', true),
            "id_kabupaten" => $this->input->post('kabupaten', true),
            "nama_pasar" => $this->input->post('nama_pasar', true),
            'luas_lahan' => $this->input->post('luas_lahan', true),
            'luas_bangunan' => $this->input->post('luas_bangunan', true),
            'id_tipe_pasar' => $this->input->post('tipe_pasar', true),
            'pasaran' => implode(',', $this->input->post('pasaran', true)),
            'jml_pedagang' => $this->input->post('jml_pedagang', true),
            'kios' => $this->input->post('kios', true),
            'los' => $this->input->post('los', true),
            'lapak' => $this->input->post('lapak', true),
            'omzet' => $this->input->post('omzet', true),
            'retribusi' => $this->input->post('retribusi', true),
            "latitude" => $this->input->post('latitude', true),
            "longitude" => $this->input->post('longitude', true),
        ];
        $this->db->where('id_lokasi_pasar', $this->input->post('id'));
        $this->db->update('tbl_lokasi_pasar', $data);
    }
    //HAPUS DATA
    public function deleteDataPasar($id)
    {
        $this->db->delete('tbl_lokasi_pasar', ['id_lokasi_pasar' => $id]);
    }
}
