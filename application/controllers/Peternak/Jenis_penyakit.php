<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_penyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penyakit_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman User';
        $data['user'] = $this->User_model->getUser($this->session->userdata('id_user'));
        $data['penyakit'] = $this->Penyakit_model->tampilPenyakit();
        $this->load->view('Template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('Peternak/Jenis Penyakit/index', $data);
        $this->load->view('Template/footer', $data);
    }
}
        /* End of fils konsep.php */