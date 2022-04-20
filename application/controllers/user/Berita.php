<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        // load view admin/overview.php
        $data['title'] = 'Halaman User';
        $data['berita'] = $this->Berita_model->tampilBerita();
        $this->load->view(
            'Template_user/header',
            $data
        );
        $this->load->view('User/Berita', $data);
        $this->load->view(
            'Template_user/footer',
            $data
        );
    }

    public function detail($id_berita)
    {
        $data['berita'] = $this->Berita_model->getDetail($id_berita);
        $this->load->view('Template_user/header', $data);
        $this->load->view('user/Detail_Berita', $data);
        $this->load->view('Template_user/footer', $data);
    } 
}
        /* End of fils konsep.php */