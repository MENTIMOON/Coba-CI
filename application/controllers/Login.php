<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data = array(
                'judul' => 'Login Admin',
            );
            $this->load->view('layouts/header_user', $data);
            $this->load->view('login/v_login', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = array(
            'username' => $username,
            'password' => md5($password)
        );
        $auth = $this->M_login->authUser('tbl_user', $user)->num_rows();
        if ($auth > 0) {
            $data = [
                'username' => $user['username'],
            ];
            $this->session->set_userdata($data);
            redirect('Admin');
        } else {
            $this->session->set_flashdata('text', 'Password salah!');
            redirect('Login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
