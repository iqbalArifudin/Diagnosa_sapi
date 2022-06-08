<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Penyakit_model');
        $this->load->model('Rule_model');
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

    public function hapusRule($id_gejala)
    {
        if ($this->Rule_model->hapusGejalaRule($id_gejala) == false) {
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

    public function tambahRule($id_penyakit)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_gejala', 'id_gejala', 'required');
        $data['title'] = 'Halaman Tambah Jenis Gejala';
        $data['penyakit'] = $this->Penyakit_model->getPenyakit($id_penyakit);
        $data['gejala'] = $this->Penyakit_model->tampilGejala();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('Admin/Penyakit/TambahRule', $data);
            $this->load->view('template admin/footer_admin', $data);
        } else {
            $this->Rule_model->tambahRule($this->uri->segment(4));
            redirect('Admin/Penyakit/detail_all/' . $this->uri->segment(4), 'refresh');
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            echo "data berhasil ditambah";
            
        }
    }

    public function detail_all($id_penyakit)
    {
        $data['title'] = 'Halaman Detail Jenis Penyakit';
        // $data['penyakit1'] = $this->Penyakit_model->getDetailPenyakit($id_penyakit);
        $data['rule'] = $this->Rule_model->tampilrule($id_penyakit);
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