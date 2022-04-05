<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
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
        $data['penyakit'] = $this->Penyakit_model->tampilPenyakit();
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('Admin/Penyakit/index', $data);
        $this->load->view('template admin/footer_admin', $data);
    }

    public function tambahPenyakit()
    {
        $this->form_validation->set_rules('jenis_penyakit', 'jenis_penyakit', 'required');
        $data['title'] = 'Halaman Tambah Jenis Penyakit';
        $data['penyakit'] = $this->Penyakit_model->tampilPenyakit();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('Admin/Penyakit/Tambahpenyakit', $data);
            $this->load->view('template admin/footer_admin', $data);
        } else {
            $this->Penyakit_model->tambahPenyakit();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Berhasil Ditambahkan ! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('Admin/Penyakit', 'refresh');
        }
    }

    public function editpenyakit($id_penyakit)
    {
        $this->load->library('form_validation');
        $data['title'] = 'Halaman Edit Jenis Penyakit';
        $data['penyakit'] = $this->Penyakit_model->getPenyakit($id_penyakit);
        $this->form_validation->set_rules('jenis_penyakit', 'jenis_penyakit', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('Admin/Penyakit/Editpenyakit', $data);
            $this->load->view('template admin/footer_admin', $data);
        } else {
            $this->Penyakit_model->ubahPenyakit($id_penyakit);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                         Data Berhasil Diedit !
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                        </div>'
            );
            redirect('Admin/Penyakit', 'refresh');
        }
    }

    public function hapuspenyakit($id_penyakit)
    {
        if ($this->Penyakit_model->hapusDataPenyakit($id_penyakit) == false) {
            $this->session->set_flashdata('flashdata', 'gagal');
            $this->session->set_flashdata('pesan2', 'Gagal Di hapus, Karena Data di pakai');
            redirect('admin/Penyakit');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata('pesan2', 'Data Berhasil Di hapus');
            redirect('admin/Penyakit', 'refresh');
        }
    }

    public function tambahGejala()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jenis_gejala', 'jenis_gejala', 'required');
        $data['title'] = 'Halaman Tambah Jenis Gejala';
        $data['penyakit'] = $this->Penyakit_model->tampilPenyakit();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('Admin/Penyakit/tambahgejala', $data);
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
            redirect('Admin/Penyakit', 'refresh');
        }
    }

    public function detail_all($id_penyakit)
    {
        $data['title'] = 'Halaman Detail Jenis Penyakit';
        $data['penyakit1'] = $this->Penyakit_model->getDetailPenyakit($id_penyakit);
        $data['gejala'] = $this->Penyakit_model->tampilGejala();
        $data['penyakit'] = $this->Penyakit_model->getTampilPenyakit($id_penyakit);
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('Admin/Penyakit/Detailpenyakit', $data);
        $this->load->view('template admin/footer_admin', $data);
    }
}
        /* End of fils admin.php */