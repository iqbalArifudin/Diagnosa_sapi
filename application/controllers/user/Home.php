<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
        public function __construct()
        {
            parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Penyakit_model');
        }
        
        public function index()
        {
            $data['title'] = 'Halaman User';
        $data['berita'] = $this->Berita_model->tampilBerita();
        $data['penyakit'] = $this->Penyakit_model->tampilPenyakit();
        $this->load->view('Template_user/header',  $data);
        $this->load->view('User/Home', $data);
        $this->load->view('Template_user/footer', $data);
        }
    }
        /* End of fils konsep.php */
    

?>