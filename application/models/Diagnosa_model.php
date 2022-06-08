<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa_model extends CI_Model
{
    private $_table = "diagnosa";

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
    public function getName()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function joinTable()
    {
        $query = "SELECT `diagnosa`.* ,`gejala`.`id_gejala`,`user`.`id_user`
        FROM `diagnosa`
        JOIN `gejala` ON `diagnosa`.`gejala` = `gejala`.`id_gejala`
        JOIN `user` ON `diagnosa`.`user` = `gejala`.`id_user`
        ORDER BY id_diagnosa ASC";

        return $this->db->query($query)->result_array();
    }
    public function joinHasil()
    {
        $query = "SELECT `hasil_diagnosa`.* ,`penyakit`.`jenis_penyakit`
        FROM `hasil_diagnosa`
        JOIN `penyakit` ON `hasil_diagnosa`.`diagnosa` = `penyakit`.`kode_penyakit`
        ORDER BY id_hasil ASC";

        return $this->db->query($query)->result_array();
    }

    public function tampilRiwayat($id_user)
    {
        $this->db->select('diagnosa.*, user.*');
        $this->db->join('user', 'diagnosa.id_user = user.id_user');
        $this->db->where('diagnosa.id_user', $id_user);
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get('diagnosa')->result();
    }
}