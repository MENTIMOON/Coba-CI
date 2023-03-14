<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_eksportir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_lokasi_eksportir', 'm_wilayah', 'm_jenis']);
    }
    public function input()
    {
        $this->form_validation->set_rules('nama_prshn', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('komoditi', 'Komoditi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Tambah Data Eksportir',
                'lokasi' => $this->m_lokasi_eksportir->getAllEks(),
                'kabupaten' => $this->m_wilayah->getAllKab(),
                'kecamatan' => $this->m_wilayah->getAllKec(),
                'desa' => $this->m_wilayah->getAllDesa(),
                'jenis' => ['Produsen', 'Trader'],
                'skala' => $this->m_jenis->getSkalaPr(),
            ];
            $this->load->view('layouts/header_admin', $data);
            $this->load->view('eksportir/v_tambah_eksportir', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->m_lokasi_eksportir->inputDataEks();
            $this->session->set_flashdata('text', ' ditambahkan!');
            redirect('Admin/ekspor');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama_prshn', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('komoditi', 'Komoditi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Edit Data Eksportir',
                'lokasi' => $this->m_lokasi_eksportir->getAllEks(),
                'eksportir' => $this->m_lokasi_eksportir->getEksById($id),
                'kabupaten' => $this->m_wilayah->getAllKab(),
                'kecamatan' => $this->m_wilayah->getAllKec(),
                'desa' => $this->m_wilayah->getAllDesa(),
                'jenis' => ['Produsen', 'Trader'],
                'skala' => $this->m_jenis->getSkalaPr(),
            ];
            $this->load->view('layouts/header_admin', $data);
            $this->load->view('eksportir/v_edit_eksportir', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->m_lokasi_eksportir->editDataEks();
            $this->session->set_flashdata('text', ' diedit!');
            redirect('Admin/ekspor');
        }
    }
    public function delete($id)
    {
        $this->m_lokasi_eksportir->deleteDataEKs($id);
        $this->session->set_flashdata('hapus', ' dihapus!');
        redirect('Admin/ekspor');
    }
}
