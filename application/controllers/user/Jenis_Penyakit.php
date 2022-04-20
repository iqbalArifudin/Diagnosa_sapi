<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Penyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penyakit_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman User';
        $data['penyakit'] = $this->Penyakit_model->tampilPenyakit();
        $this->load->view('Template_user/header',  $data);
        $this->load->view('User/Jenis_Penyakit', $data);
        $this->load->view('Template_user/footer', $data);
    }
}
        /* End of fils konsep.php */