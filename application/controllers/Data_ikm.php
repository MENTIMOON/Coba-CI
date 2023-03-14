<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_ikm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_jenis', 'm_lokasi_ikm', 'm_wilayah']);
    }
    public function input()
    {
        $this->form_validation->set_rules('nama_sentra', 'Nama IKM', 'required');
        $this->form_validation->set_rules('kbli', 'KBLI', 'required');
        $this->form_validation->set_rules('alamat_sentra', 'Alamat IKM', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
        $this->form_validation->set_rules('unit', 'Unit Usaha', 'required');
        $this->form_validation->set_rules('tenaga_kerja', 'Tenaga Kerja', 'required');
        $this->form_validation->set_rules('nilai_investasi', 'Nilai Investasi', 'required');
        $this->form_validation->set_rules('jumlah', 'Kapasitas Produksi (Jumlah)', 'required');
        $this->form_validation->set_rules('satuan', 'Kapastitas Produksi (Satuan)', 'required');
        $this->form_validation->set_rules('nilai_produksi', 'Nilai Produksi', 'required');
        $this->form_validation->set_rules('nilai_bb', 'Nilai BB/BP', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required|numeric');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Tambah Data Sentra IKM',
                'lokasi' => $this->m_lokasi_ikm->getAllData(),
                'jenis_ikm' => $this->m_jenis->getJenisIkm(),
                'kabupaten' => $this->m_wilayah->getAllKab(),
                'kecamatan' => $this->m_wilayah->getAllKec(),
                'desa' => $this->m_wilayah->getAllDesa(),
            ];
            $this->load->view('layouts/header_admin', $data);
            $this->load->view('ikm/v_tambah_ikm', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->m_lokasi_ikm->inputDataIkm();
            $this->session->set_flashdata('text', ' ditambahkan!');
            redirect('Admin/ikm');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama_sentra', 'Nama IKM', 'required');
        $this->form_validation->set_rules('kbli', 'KBLI', 'required');
        $this->form_validation->set_rules('alamat_sentra', 'Alamat IKM', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
        $this->form_validation->set_rules('unit', 'Unit Usaha', 'required');
        $this->form_validation->set_rules('tenaga_kerja', 'Tenaga Kerja', 'required');
        $this->form_validation->set_rules('nilai_investasi', 'Nilai Investasi', 'required');
        $this->form_validation->set_rules('jumlah', 'Kapasitas Produksi (Jumlah)', 'required');
        $this->form_validation->set_rules('satuan', 'Kapastitas Produksi (Satuan)', 'required');
        $this->form_validation->set_rules('nilai_produksi', 'Nilai Produksi', 'required');
        $this->form_validation->set_rules('nilai_bb', 'Nilai BB/BP', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required|numeric');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Edit Data Sentra IKM',
                'ikm' => $this->m_lokasi_ikm->getIkmById($id),
                'jenis_ikm' => $this->m_jenis->getJenisIkm(),
                'kabupaten' => $this->m_wilayah->getAllKab(),
                'kecamatan' => $this->m_wilayah->getAllKec(),
                'desa' => $this->m_wilayah->getAllDesa(),
            ];
            $this->load->view('layouts/header_admin', $data);
            $this->load->view('ikm/v_edit_ikm', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->m_lokasi_ikm->editDataIkm();
            $this->session->set_flashdata('text', ' diedit!');
            redirect('Admin/ikm');
        }
    }
    public function delete($id)
    {
        $this->m_lokasi_ikm->deleteDataIkm($id);
        $this->session->set_flashdata('hapus', ' dihapus!');
        redirect('Admin/ikm');
    }
}
