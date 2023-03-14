<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pasar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_lokasi_pasar', 'm_wilayah', 'm_jenis']);
    }
    public function input()
    {
        $this->form_validation->set_rules('nama_pasar', 'Nama Pasar', 'required');
        $this->form_validation->set_rules('luas_lahan', 'Luas Lahan', 'required');
        $this->form_validation->set_rules('luas_bangunan', 'Luas Bangunan', 'required');
        $this->form_validation->set_rules('jml_pedagang', 'Jumlah Pedagang', 'required');
        $this->form_validation->set_rules('kios', 'Kios', 'required');
        $this->form_validation->set_rules('los', 'Los', 'required');
        $this->form_validation->set_rules('lapak', 'Lapak', 'required');
        $this->form_validation->set_rules('omzet', 'Omzet', 'required');
        $this->form_validation->set_rules('retribusi', 'Retribusi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Tambah Data Pasar Rakyat',
                'lokasi' => $this->m_lokasi_pasar->getAllPasar(),
                'kabupaten' => $this->m_wilayah->getAllKab(),
                'kecamatan' => $this->m_wilayah->getAllKec(),
                'desa' => $this->m_wilayah->getAllDesa(),
                'tipe' => $this->m_jenis->getTipePasar(),
                'pasaran' => ['Harian', 'Pahing', 'Pon', 'Wage', 'Kliwon', 'Legi', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
            );
            $this->load->view('layouts/header_admin', $data);
            $this->load->view('pasar/v_tambah_pasar', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->m_lokasi_pasar->inputDataPasar();
            $this->session->set_flashdata('text', ' ditambahkan!');
            redirect('Admin/pasar');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama_pasar', 'Nama Pasar', 'required');
        $this->form_validation->set_rules('luas_lahan', 'Luas Lahan', 'required');
        $this->form_validation->set_rules('luas_bangunan', 'Luas Bangunan', 'required');
        $this->form_validation->set_rules('jml_pedagang', 'Jumlah Pedagang', 'required');
        $this->form_validation->set_rules('kios', 'Kios', 'required');
        $this->form_validation->set_rules('los', 'Los', 'required');
        $this->form_validation->set_rules('lapak', 'Lapak', 'required');
        $this->form_validation->set_rules('omzet', 'Omszet', 'required');
        $this->form_validation->set_rules('retribusi', 'Retribusi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Edit Data Pasar Rakyat',
                'pasar' => $this->m_lokasi_pasar->getPasarById($id),
                'lokasi' => $this->m_lokasi_pasar->getAllPasar(),
                'kabupaten' => $this->m_wilayah->getAllKab(),
                'kecamatan' => $this->m_wilayah->getAllKec(),
                'desa' => $this->m_wilayah->getAllDesa(),
                'tipe' => $this->m_jenis->getTipePasar(),
                'pasaran' => ['Harian', 'Pahing', 'Pon', 'Wage', 'Kliwon', 'Legi', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
            );
            $this->load->view('layouts/header_admin', $data);
            $this->load->view('pasar/v_edit_pasar', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->m_lokasi_pasar->editDataPasar();
            $this->session->set_flashdata('text', ' diedit!');
            redirect('Admin/pasar');
        }
    }
    public function delete($id)
    {
        $this->m_lokasi_pasar->deleteDataPasar($id);
        $this->session->set_flashdata('hapus', ' dihapus!');
        redirect('Admin/pasar');
    }
}
