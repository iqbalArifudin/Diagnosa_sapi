<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Penyakit_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Jenis Penyakit & Gejala';
        $data['gejala'] = $this->Penyakit_model->tampilGejala();
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('Admin/Gejala/index', $data);
        $this->load->view('template admin/footer_admin', $data);
    }

    public function editGejala($id_gejala)
    {
        $this->load->library('form_validation');
        $data['gejala'] = $this->Penyakit_model->getGejala($id_gejala);
        $this->form_validation->set_rules('jenis_gejala', 'jenis_gejala', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('Admin/Gejala/Editgejala', $data);
            $this->load->view('template admin/footer_admin', $data);
        } else {
            $this->Penyakit_model->ubahGejala($id_gejala);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                         Berhasil Diedit !
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                        </div>'
            );
            redirect('admin/Gejala', 'refresh');
        }
    }

    public function hapusGejala($id_gejala)
    {
        if ($this->Penyakit_model->hapusDataGejala($id_gejala) == false) {
            $this->session->set_flashdata('flashdata', 'gagal');
            $this->session->set_flashdata('pesan2', 'Gagal Di hapus, Karena Data di pakai');
            redirect('admin/Gejala');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata('pesan2', 'Data Berhasil Di hapus');
            redirect('admin/Gejala', 'refresh');
        }
    }

    public function tambahGejala()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jenis_gejala', 'jenis_gejala', 'required');
        $data['title'] = 'Halaman Tambah Jenis Gejala';
        $data['gejala'] = $this->Penyakit_model->tampilGejala();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('Admin/Gejala/TambahGejala', $data);
            $this->load->view('template admin/footer_admin', $data);
        } else {
            $this->Penyakit_model->tambahGejala();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Berhasil Ditambahkan ! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('Admin/Gejala', 'refresh');
        }
    }


    public function detail_all($id_penyakit)
    {
        $data['title'] = 'Halaman Detail Jenis Penyakit';
        // $data['penyakit1'] = $this->Penyakit_model->getDetailPenyakit($id_penyakit);
        $data['gejala'] = $this->Penyakit_model->tampilGejalasaja($id_penyakit);
        $data['gejala1'] = $this->Penyakit_model->getDetailGejala($id_penyakit);
        $data['penyakit'] = $this->Penyakit_model->getTampilPenyakit($id_penyakit);
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('Admin/Penyakit/Detailpenyakit', $data);
        $this->load->view('template admin/footer_admin', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('User/login', 'refresh');
    }
}
        /* End of fils admin.php */