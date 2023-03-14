<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_lokasi_ikm', 'm_lokasi_pasar', 'm_lokasi_eksportir', 'm_upload']);
    }
    public function index()
    {
        $data = [
            'judul' => 'Beranda',
            'sentra' => $this->m_lokasi_ikm->getDataIkm(),
            'pasar' => $this->m_lokasi_pasar->getDataPasar(),
            'eksportir' => $this->m_lokasi_eksportir->getDataEks(),
            'totIkmBt' => $this->m_lokasi_ikm->totalIkmBt(),
            'totIkmGk' => $this->m_lokasi_ikm->totalIkmGk(),
            'totIkmKp' => $this->m_lokasi_ikm->totalIkmKp(),
            'totIkmSl' => $this->m_lokasi_ikm->totalIkmSl(),
            'totIkmYk' => $this->m_lokasi_ikm->totalIkmYk(),
            'totPasarBt' => $this->m_lokasi_pasar->totPasarBt(),
            'totPasarGk' => $this->m_lokasi_pasar->totPasarGk(),
            'totPasarKp' => $this->m_lokasi_pasar->totPasarKp(),
            'totPasarSl' => $this->m_lokasi_pasar->totPasarSl(),
            'totPasarYk' => $this->m_lokasi_pasar->totPasarYk(),
            'totEksBt' => $this->m_lokasi_eksportir->totEksBt(),
            'totEksGk' => $this->m_lokasi_eksportir->totEksGk(),
            'totEksKp' => $this->m_lokasi_eksportir->totEksKp(),
            'totEksSl' => $this->m_lokasi_eksportir->totEksSl(),
            'totEksYk' => $this->m_lokasi_eksportir->totEksYk()
        ];
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('admin/v_beranda', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function ikm()
    {
        $data = [
            'judul' => 'Data Sentra IKM',
            'lokasi' => $this->m_lokasi_ikm->getDataIkm()
        ];
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('admin/v_data_ikm', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function pasar()
    {
        $data = [
            'judul' => 'Data Pasar Rakyat',
            'lokasi' => $this->m_lokasi_pasar->getDataPasar()
        ];
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('admin/v_data_pasar', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function ekspor()
    {
        $data = [
            'judul' => 'Data Eksportir',
            'lokasi' => $this->m_lokasi_eksportir->getDataEks()
        ];
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('admin/v_data_eksportir', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function upload()
    {
        $data = [
            'judul' => 'Daftar File',
            'berkas' => $this->m_upload->getAllFile()
        ];
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('admin/v_upload', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function sentraBT()
    {
        $id = array('id_kabupaten' => 1);
        $data = array(
            'judul' => 'Data Sentra IKM Kabupaten Bantul',
            'sentra' => $this->m_lokasi_ikm->getWhereIkm($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('bantul/admin/v_sentra_bt', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function pasarBT()
    {
        $id = array('id_kabupaten' => 1);
        $data = array(
            'judul' => 'Data Pasar Rakyat Kabupaten Bantul',
            'pasar' => $this->m_lokasi_pasar->getWherePasar($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('bantul/admin/v_pasar_bt', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function eksporBT()
    {
        $id = array('id_kabupaten' => 1);
        $data = array(
            'judul' => 'Data Eksportir Kabupaten Bantul',
            'ekspor' => $this->m_lokasi_eksportir->getWhereEks($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('bantul/admin/v_eksportir_bt', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function sentraGK()
    {
        $id = array('id_kabupaten' => 2);
        $data = array(
            'judul' => 'Data Sentra IKM Kabupaten Gunung Kidul',
            'sentra' => $this->m_lokasi_ikm->getWhereIkm($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('gunungkidul/admin/v_sentra_gk', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function pasarGK()
    {
        $id = array('id_kabupaten' => 2);
        $data = array(
            'judul' => 'Data Pasar Rakyat Kabupaten Gunung Kidul',
            'pasar' => $this->m_lokasi_pasar->getWherePasar($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('gunungkidul/admin/v_pasar_gk', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function eksporGK()
    {
        $id = array('id_kabupaten' => 2);
        $data = array(
            'judul' => 'Data Eksportir Kabupaten Gunung Kidul',
            'ekspor' => $this->m_lokasi_eksportir->getWhereEks($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('gunungkidul/admin/v_eksportir_gk', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function sentraKP()
    {
        $id = array('id_kabupaten' => 3);
        $data = array(
            'judul' => 'Data Sentra IKM Kabupaten Kulon Progo',
            'sentra' => $this->m_lokasi_ikm->getWhereIkm($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('kulonprogo/admin/v_sentra_kp', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function pasarKP()
    {
        $id = array('id_kabupaten' => 3);
        $data = array(
            'judul' => 'Data Pasar Rakyat Kabupaten Kulon Progo',
            'pasar' => $this->m_lokasi_pasar->getWherePasar($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('kulonprogo/admin/v_pasar_kp', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function eksporKP()
    {
        $id = array('id_kabupaten' => 3);
        $data = array(
            'judul' => 'Data Eksportir Kabupaten Kulon Progo',
            'ekspor' => $this->m_lokasi_eksportir->getWhereEks($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('kulonprogo/admin/v_eksportir_kp', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function sentraSL()
    {
        $id = array('id_kabupaten' => 4);
        $data = array(
            'judul' => 'Data Sentra IKM Kabupaten Sleman',
            'sentra' => $this->m_lokasi_ikm->getWhereIkm($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('sleman/admin/v_sentra_sl', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function pasarSL()
    {
        $id = array('id_kabupaten' => 4);
        $data = array(
            'judul' => 'Data Pasar Rakyat Kabupaten Sleman',
            'pasar' => $this->m_lokasi_pasar->getWherePasar($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('sleman/admin/v_pasar_sl', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function eksporSL()
    {
        $id = array('id_kabupaten' => 4);
        $data = array(
            'judul' => 'Data Eksportir Kabupaten Sleman',
            'ekspor' => $this->m_lokasi_eksportir->getWhereEks($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('sleman/admin/v_eksportir_sl', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function sentraYK()
    {
        $id = array('id_kabupaten' => 5);
        $data = array(
            'judul' => 'Data Sentra IKM Kota Yogyakarta',
            'sentra' => $this->m_lokasi_ikm->getWhereIkm($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('yogyakarta/admin/v_sentra_yk', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function pasarYK()
    {
        $id = array('id_kabupaten' => 5);
        $data = array(
            'judul' => 'Data Pasar Rakyat Kota Yogyakarta',
            'pasar' => $this->m_lokasi_pasar->getWherePasar($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('yogyakarta/admin/v_pasar_yk', $data);
        $this->load->view('layouts/footer', $data);
    }
    public function eksporYK()
    {
        $id = array('id_kabupaten' => 5);
        $data = array(
            'judul' => 'Data Eksportir Kota Yogyakarta',
            'ekspor' => $this->m_lokasi_eksportir->getWhereEks($id)->result(),
        );
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('yogyakarta/admin/v_eksportir_yk', $data);
        $this->load->view('layouts/footer', $data);
    }
}
