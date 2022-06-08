<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penyakit_model');
        $this->load->model('User_model');
        $this->load->model('Diagnosa_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman User';
        $data['user'] = $this->User_model->getUser($this->session->userdata('id_user'));
        $data['riwayat_diagnosa'] = $this->Diagnosa_model->tampilRiwayat($this->session->userdata('id_user'));
        $this->load->view('Template/header', $data);
        $this->load->view('Template/sidebar', $data);
        $this->load->view('Peternak/Diagnosa/Riwayat', $data);
        $this->load->view('Template/footer', $data);
    }
}
        /* End of fils konsep.php */