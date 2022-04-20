<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('User_model');
    }


    public function index()
    {
        $data['title'] = 'Form Menambahkan Data Register';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('passworrd', 'passworrd', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('User/Register', $data);

        } else {
            $this->User_model->Register();
                $this->session->set_flashdata('pesan', '<center>Registrasi Akun Anda Berhasil!</center>');
            redirect('User/Login', 'refresh');
        }
    }
}
        /* End of fils admin.php */