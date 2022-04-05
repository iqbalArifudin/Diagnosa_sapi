<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Berita_model');
        $this->load->model('User_model');
     $this->load->helper('form');
        }
        
        public function index()
        {
        $data['title'] = 'Halaman Berita';
        $data['user'] = $this->User_model->tampilUserSaja($this->session->userdata('id_user'));
            $data['berita'] = $this->Berita_model->tampilBerita();
        $this->load->view('template admin/header_admin',$data);
        $this->load->view('template admin/sidebar_admin', $data);
        $this->load->view('admin/berita/index',$data);
        $this->load->view('template admin/footer_admin',$data);  
        }

        public function tambahberita(){
            $this->load->library('form_validation');
        $data['title'] = 'Halaman Tambah Berita';
        $data['user'] = $this->User_model->tampilUserSaja($this->session->userdata('id_user'));
            $data['berita'] = $this->Berita_model->tampilBerita();
            $this->form_validation->set_rules('judul_berita', 'judul_berita', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header_admin',$data);
            $this->load->view('template admin/sidebar_admin', $data);
                $this->load->view('admin/Berita/Tambah',$data );
                $this->load->view('template admin/footer_admin',$data);  
            }
            else{
            $upload = $this->Berita_model->upload();
                if ($upload['result'] == 'success'){
                $this->Berita_model->tambahBerita($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('admin/Berita', 'refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_berita)
        {
        if ($this->Berita_model->hapusData($id_berita) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
            redirect('admin/Berita');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('admin/Berita', 'refresh');
            }
           
        }

        public function editberita($id_berita)
        {
        $data['title'] = 'Halaman Edit Berita';
        $data['berita'] = $this->Berita_model->getBerita($id_berita);
        $this->form_validation->set_rules('judul_berita', 'judul_berita', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template admin/header_admin',$data);
            $this->load->view('template admin/sidebar_admin', $data);
                $this->load->view('admin/berita/edit',$data);
                $this->load->view('template admin/footer_admin',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['foto_berita']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/FotoBerita/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_berita')) {
                    $old_file = $data['berita']['foto_berita'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/FotoBerita/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('foto_berita', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_berita = $this->input->post('id_berita');
            $judul_berita = $this->input->post('judul_berita');
            $keterangan_berita = $this->input->post('keterangan_berita');

            $this->db->set('judul_berita', $judul_berita);
            $this->db->set('keterangan_berita', $keterangan_berita);
            $this->db->where('id_berita', $id_berita);
            $this->db->update('berita');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/Berita');
        }
    }
    
        public function detail($id_berita){
        $data['title'] = 'Halaman Detail Berita';
        $data['berita'] = $this->Berita_model->getDetail($id_berita);
        $this->load->view('template admin/header_admin', $data);
        $this->load->view('template admin/sidebar_admin');
            $this->load->view('admin/berita/detail' ,$data);
        $this->load->view('template admin/footer_admin'); 
        } 

    }
        /* End of fils admin.php */
?>