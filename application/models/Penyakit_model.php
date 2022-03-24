<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{

    public function tampilPenyakit()
    {
        $this->db->select('penyakit.*');
        return $this->db->get('penyakit')->result();
    }

    public function tambahPenyakit()
    {
        $data = [
            'id_penyakit' => $this->input->post('id_penyakit', true),
            'jenis_penyakit' => $this->input->post('jenis_penyakit', true),
            'pencegahan' => $this->input->post('pencegahan', true),
        ];
        $this->db->insert('penyakit', $data);
    }

    public function ubahPenyakit($id_penyakit)
    {
        $data = [
            'jenis_penyakit' => $this->input->post('jenis_penyakit', true),
            'pencegahan' => $this->input->post('pencegahan', true),
        ];
        $this->db->where('id_penyakit', $id_penyakit);
        $this->db->update('penyakit', $data);
    }

    public function hapusDataPenyakit($id_penyakit)
    {
        $this->db->where('id_penyakit', $id_penyakit);
        if (
            $this->db->delete('penyakit')

        ) {
            return true;
        } else {
            return false;
        }
    }

    public function getPenyakit($id_penyakit)
    {
        $this->db->select('penyakit.*');
        return $this->db->get('penyakit')->result();
    }

    public function getDetailPenyakit($id_penyakit)
    {
        $this->db->select('gejala.*, penyakit.*');
        $this->db->join('penyakit', 'gejala.id_penyakit = penyakit.id_penyakit');
        $this->db->where('gejala.id_penyakit', $id_penyakit);
        return $this->db->get('gejala')->result();
    }

    public function tampilGejala()
    {
        $this->db->select('gejala.*, penyakit.*');
        $this->db->join('penyakit', 'gejala.id_penyakit = penyakit.id_penyakit');
        return $this->db->get('gejala')->result();
    }

    public function tampilDetailPenyakit()
    {
        $this->db->select('gejala.*, penyakit.*');
        $this->db->join('gejala', 'penyakit.id_penyakit = gejala.id_penyakit');
        return $this->db->get('penyakit')->result();
    }

    public function getTampilPenyakit($id_penyakit)
    {
        $this->db->select('penyakit.*');
        $this->db->where('id_penyakit', $id_penyakit);
        return $this->db->get('penyakit')->result();
    }
}