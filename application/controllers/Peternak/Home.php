<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman User';
        $data['user'] = $this->User_model->getUser($this->session->userdata('id_user'));
        $this->load->view('Template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('Peternak/Home/Index', $data);
        $this->load->view('Template/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('User/login', 'refresh');
    }
}
        /* End of fils konsep.php */