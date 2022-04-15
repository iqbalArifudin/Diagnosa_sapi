<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['user'] = $this->User_model->tampilUser();
        $data['title'] = 'Halaman Data User';

        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('admin/user/index', $data);
        $this->load->view('template admin/footer_admin');
    }
}