<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{

    private $_table = "gejala";

    public function tampilPenyakit()
    {
        $this->db->select('penyakit.*');
        return $this->db->get('penyakit')->result();
    }

    public function tambahPenyakit()
    {
        $data = [
            'id_penyakit' => $this->input->post('id_penyakit', true),
            'kode_penyakit' => $this->input->post('kode_penyakit', true),
            'jenis_penyakit' => $this->input->post('jenis_penyakit', true),
            'pencegahan' => $this->input->post('pencegahan', true),
        ];
        $this->db->insert('penyakit', $data);
    }

    // public function tambahRule($id)
    // {
    //     $data = [
    //         'id_rule' => $this->input->post('id_rule', true),
    //         'id_penyakit' => $id,
    //         'id_gejala' => $this->input->post('id_gejala', true),
    //         'nilai_bobot' => $this->input->post('nilai_bobot', true),
    //     ];
    //     $this->db->insert('rules', $data);
    // }
    
    public function ubahPenyakit($id_penyakit)
    {
        $data = [
            'kode_penyakit' => $this->input->post('kode_penyakit', true),
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

    // public function hapusGejalaRule($id_gejala)
    // {
    //     $this->db->where('id_gejala', $id_gejala);
    //     if (
    //         $this->db->delete('rules')

    //     ) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function getPenyakit($id_penyakit)
    {
        $this->db->select('penyakit.*');
        $this->db->where('id_penyakit', $id_penyakit);
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
        $this->db->select('gejala.*');
        return $this->db->get('gejala')->result();
    }

    public function getGejala($id_gejala)
    {
        $this->db->select('gejala.*');
        $this->db->where('id_gejala', $id_gejala);
        return $this->db->get('gejala')->result();
    }

    public function getAllGejala()
    {
        return $this->db->get($this->_table)->result_array();
    }

    // public function tampilrule($id_gejala)
    // {
    //     $this->db->select('rules.*, penyakit.*, gejala.*');
    //     $this->db->join('penyakit', 'rules.id_penyakit = penyakit.id_penyakit');
    //     $this->db->join('gejala', 'rules.id_gejala = gejala.id_gejala');
    //     $this->db->where('rules.id_penyakit', $id_gejala);
    //     return $this->db->get('rules')->result();
    // }

    // public function getRule($id_gejala)
    // {
    //     $this->db->select('rules.*');
    //     $this->db->where('id_gejala', $id_gejala);
    //     return $this->db->get('rules')->result();
    // }

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

    public function tambahGejala()
    {
        $data = [
            'id_gejala' => $this->input->post('id_gejala', true),
            'kode_gejala' => $this->input->post('kode_gejala', true),
            'jenis_gejala' => $this->input->post('jenis_gejala', true),
        ];
        $this->db->insert('gejala', $data);
    }


    //Rules
    // public function joinTableRule()
    // {
    //     $query = "SELECT `rules`.*, `penyakit`.`jenis_penyakit`, `gejala`.`jenis_gejala`, `gejala`.`id_gejala`
    //                 FROM `rules`
    //                 JOIN `penyakit` ON `rules`.`id_penyakit` = `penyakit`.`id_penyakit`
    //                 JOIN `gejala` ON `rules`.`id_gejala` = `gejala`.`id_gejala`
    //                ";
    //     return $this->db->query($query)->result_array();
    // }

    // public function getAllRule()
    // {
    //     return $this->db->get($this->_table1)->result_array();
    // }
}