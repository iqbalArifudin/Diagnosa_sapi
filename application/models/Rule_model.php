<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rule_model extends CI_Model
{

    private $_table = "rules";

    public function rules()
    {
        return [
            [
                'field' => 'penyakit',
                'label' => 'Penyakit',
                'rules' => 'required'
            ],
        ];

        return [
            [
                'field' => 'gejala',
                'label' => 'Gejala',
                'rules' => 'required'
            ],
        ];
        return [
            [
                'field' => 'nilai',
                'label' => 'Nilai',
                'rules' => 'required'
            ],
        ];
    }

    public function getById($id)
    {
        $query = "SELECT `rules`.*,`gejala`.`jenis_gejala`
        FROM `rules`
        JOIN `gejala` ON `rules`.`id_gejala` = `gejala`.`id_gejala`
        WHERE `rules`.`id_penyakit` = $id
       ";
        return $this->db->query($query)->result_array();
    }

    public function tambahRule($id)
    {
        $data = [
            'id_rule' => $this->input->post('id_rule', true),
            'id_penyakit' => $id,
            'id_gejala' => $this->input->post('id_gejala', true),
            'nilai_bobot' => $this->input->post('nilai_bobot', true),
        ];
        $this->db->insert('rules', $data);
    }


    public function hapusGejalaRule($id_gejala)
    {
        $this->db->where('id_gejala', $id_gejala);
        if (
            $this->db->delete('rules')

        ) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilrule($id_gejala)
    {
        $this->db->select('rules.*, penyakit.*, gejala.*');
        $this->db->join('penyakit', 'rules.id_penyakit = penyakit.id_penyakit');
        $this->db->join('gejala', 'rules.id_gejala = gejala.id_gejala');
        $this->db->where('rules.id_penyakit', $id_gejala);
        return $this->db->get('rules')->result();
    }

    public function getRule($id_gejala)
    {
        $this->db->select('rules.*');
        $this->db->where('id_gejala', $id_gejala);
        return $this->db->get('rules')->result();
    }

    public function nilaiMax()
    {
        $query = "SELECT * FROM rule";
        return $this->db->query($query)->num_rows();
    }

    public function save()
    {
        $semuadata = $this->getAllRule();
        $datakhir = $semuadata[count($semuadata) - 1];
        $idakhir = $datakhir['idrule'];
        $id = (int) substr($idakhir, 1);

        $idbaru = 'R' .  (string) ($id + 1);

        $data = [
            "idrule" => $idbaru,
            "namarule" => $this->input->post('namarule', true),
            "gejalarule" => $this->input->post('gejalarule', true),
            "nilai_bobot" => $this->input->post('nilai_bobot', true)
        ];

        $this->db->insert('rules', $data);
        // $data = json_decode($this->curl->simple_post('http://localhost/spsemangka_restapi/api/rule/',$data, array(CURLOPT_BUFFERSIZE => 10)),true);
        // return $data;
    }

    public function joinTableRule()
    {
        $query = "SELECT `rules`.*, `penyakit`.`jenis_penyakit`, `gejala`.`jenis_gejala`, `gejala`.`kode_gejala`
                    FROM `rules`
                    JOIN `penyakit` ON `rules`.`id_penyakit` = `penyakit`.`id_penyakit`
                    JOIN `gejala` ON `rules`.`id_gejala` = `gejala`.`id_gejala`
                   ";
        return $this->db->query($query)->result_array();
    }

    public function getAllRule()
    {
        return $this->db->get($this->_table)->result_array();
    }
}