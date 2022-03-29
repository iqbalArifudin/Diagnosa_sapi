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

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Template_user/header', $data);
            $this->load->view('User/Register', $data);
            $this->load->view('Template_user/footer', $data);
        } else {
            $upload = $this->User_model->upload();
            if ($upload['result'] == 'success') {
                $this->User_model->Register($upload);
                $this->session->set_flashdata('pesan', '<center>Registrasi Akun Anda Berhasil!</center>');
                redirect('User/Login', 'refresh');
            } else {
                echo $upload['error'];
            }
        }
    }
}
        /* End of fils admin.php */