<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        //    $this->admin_model->index();
        $data['title'] = 'Halaman Admin';
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('admin/Home/Index', $data);
        $this->load->view('template admin/footer_admin', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('User/login', 'refresh');
    }
}
        /* End of fils admin.php */