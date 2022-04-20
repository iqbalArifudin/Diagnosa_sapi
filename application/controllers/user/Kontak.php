<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller
{
        public function __construct()
        {
            parent::__construct();
 
        }
        
        public function index()
        {
            $data['title'] = 'Halaman User';
        $this->load->view('Template_user/header',  $data);
        $this->load->view('User/Kontak', $data);
        $this->load->view('Template_user/footer', $data);
        }
    }
        /* End of fils konsep.php */