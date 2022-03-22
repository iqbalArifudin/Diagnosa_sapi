<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{

    public function tampilBerita()
    {
        return $this->db->get('berita')->result();
    }

    public function tambahBerita($upload)
    {
        $data = [
            'id_berita' => $this->input->post('id_berita', true),
            'judul_berita' => $this->input->post('judul_berita', true),
            'keterangan_berita' => $this->input->post('keterangan_berita', true),
            'foto_berita'=>$upload['file']['file_name'],
        ];
        $this->db->insert('berita', $data);
    }
    public function upload(){    
        $config['upload_path'] = './assets/FotoBerita/';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']     = '10000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto_berita')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function hapusData($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        if (
            $this->db->delete('berita')

        ) {
            return true;
        } else {
            return false;
        }
    }


    public function getBerita($id_berita)
    {
        $this->db->select('berita.*');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get('berita')->result();
    }

    public function getDetail($id_berita)
    {
        $this->db->select('berita.*');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get('berita')->result();
    }
}