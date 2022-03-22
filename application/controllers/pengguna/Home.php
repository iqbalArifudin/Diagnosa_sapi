<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
        public function __construct()
        {
            parent::__construct();

        }
        
        public function index()
        {
            $data['title'] = 'Halaman User';
            $this->load->view('Template/header');
            $this->load->view('User/Home');
            $this->load->view('Template/footer');
        }
    }
        /* End of fils konsep.php */
    

?>