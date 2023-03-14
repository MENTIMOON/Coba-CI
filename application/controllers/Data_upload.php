<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_upload']);
    }
    public function input()
    {
        $config = [
            'upload_path' => './assets/unggah/',
            'allowed_types' => 'xlsx|docx|pdf',
            'max_size' => 2048,
            'encrypt_name' => true,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('Admin/upload');
        } else {
            $this->m_upload->insertFile();
            $this->session->set_flashdata('text', ' diunggah!');
            redirect('Admin/upload');
        }
    }
    public function download($id)
    {
        $data = $this->db->get_where('tbl_berkas', ['id_berkas' => $id])->row();
        force_download('assets/unggah/' . $data->nama_berkas, NULL);
    }
    public function delete($id)
    {
        $this->m_upload->deleteFile($id);
        $this->session->set_flashdata('hapus', ' dihapus!');
        redirect('Admin/upload');
    }
}
