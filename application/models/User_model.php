<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function tampilUser()
    {
        return $this->db->get('user')->result();
    }

    public function tampilUserSaja($id_user)
    {
        return $this->db->get('user', ['id_user' => $id_user])->result();
    }


    public function Register()
    {
        $data = [
            'id_user' => $this->input->post('id_user', true),
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level' => 'Peternak',
        ];
        $this->db->insert('user', $data);
    }


    public function hapusDataUser($id_user)
    {
        $this->db->where('id_user', $id_user);
        if (
            $this->db->delete('user')

        ) {
            return true;
        } else {
            return false;
        }
    }

    public function getUser($id_user)
    {
        $this->db->select('user.*');
        $this->db->where('id_user', $id_user);
        return $this->db->get('user')->result();
    }

    public function getDetail($id_user)
    {
        $this->db->select('user.*');
        $this->db->where('id_user', $id_user);
        return $this->db->get('user')->result();
    }
}