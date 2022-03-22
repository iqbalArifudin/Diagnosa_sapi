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
        $data['Penyakit'] = $this->Penyakit_model->tampilPenyakit();
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('template admin/topbar_admin', $data);
        $this->load->view('admin/Penyakit/index', $data);
        $this->load->view('template admin/footer_admin', $data);
    }

    public function tambahPenyakit()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['Penyakit'] = $this->Penyakit_model->tampilPenyakit();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin');
            $this->load->view('template admin/topbar_admin');
            $this->load->view('admin/Penyakit/tambah_admin', $data);
            $this->load->view('template admin/footer_admin');
        } else {
            $this->Penyakit_model->tambahPenyakit();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Kritik atau Saran Anda Berhasil Dikirim ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/Penyakit', 'refresh');
        }
    }

    public function edit($id_Penyakit)
    {
        $this->load->library('form_validation');
        $data['Penyakit'] = $this->Penyakit_model->getPenyakit($id_Penyakit);
        $data['penduduk'] = $this->Penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template admin/header_admin', $data);
            $this->load->view('template admin/sidebar_admin', $data);
            $this->load->view('template admin/topbar_admin', $data);
            $this->load->view('admin/Penyakit/edit', $data);
            $this->load->view('template admin/footer_admin', $data);
        } else {
            $this->Penyakit_model->ubahPenyakit($id_Penyakit);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                             Kritik atau Saran Berhasil Diedit !
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            </div>'
            );
            redirect('admin/Penyakit', 'refresh');
        }
    }

    public function hapus($id_Penyakit)
    {
        if ($this->Penyakit_model->hapusData($id_Penyakit) == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('admin/Penyakit');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('admin/Penyakit', 'refresh');
        }
    }
}
        /* End of fils admin.php */