<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa_penyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penyakit_model');
        $this->load->model('User_model');
        $this->load->model('Rule_model');
        $this->load->model('Diagnosa_model');
    }


    public function index()
    {
        $data['title'] = 'Halaman User';
        $data['user'] = $this->User_model->getUser($this->session->userdata('id_user'));
        $data['gejala'] = $this->Penyakit_model->getAllGejala();
        $data["rule"] = $this->Rule_model->joinTableRule();
        $rule = $this->Rule_model->getAllRule();
        $this->form_validation->set_rules('gejala[]', 'gejala[]', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Template/header', $data);
            $this->load->view('Template/sidebar', $data);
            $this->load->view('Peternak/Diagnosa/Diagnosa_penyakit', $data);
            $this->load->view('Template/footer', $data);
        } else {
            $id_user = $this->session->userdata('id_user');
            // $id_gejala =  $this->input->post("id_gejala", TRUE);
            $pilihan = count($_POST['gejala']);
            for ($i = 0; $i < $pilihan; $i++) {
                $diagnosa = [
                    'id_user'   => $id_user,
                    'gejala' => 'G' . $_POST['gejala'][$i]
                ];
                $this->db->insert('diagnosa', $diagnosa);
                $tampil = "SELECT id_penyakit, COUNT(id_gejala)
                            FROM rules
                            WHERE id_gejala IN(" . implode(',', $_POST['gejala']) . ")
                            GROUP BY id_penyakit
                            ORDER BY COUNT(id_penyakit) DESC LIMIT 1
               ";
            }

            $result = $this->db->query($tampil)->row_array();
            $data['penyakit'] = $this->db->get_where('penyakit', ['id_penyakit' => $result['id_penyakit']])->row_array();
            $hasil = [
                'id_user'   => $id_user,
                'diagnosa' => 'P' . $result['id_penyakit']
            ];
            $this->db->insert('hasil_diagnosa', $hasil);

            $this->load->view('Template/header', $data);
            $this->load->view('Template/sidebar', $data);
            $this->load->view('Peternak/Diagnosa/Hasil_Diagnosa', $data);
            $this->load->view('Template/footer', $data);
        }
    }


    public function hitung()
    {
        $data["gejala"] = $this->Penyakit_model->getAllGejala();
        $gejala = $this->Penyakit_model->getAllGejala();
        $data["rule"] = $this->Rule_model->joinTableRule();
        $this->form_validation->set_rules('gejala[]', 'gejala[]', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('Template/header', $data);
            $this->load->view('Template/sidebar', $data);
            $this->load->view('Peternak/Diagnosa/Diagnosa_penyakit', $data);
            $this->load->view('Template/footer', $data);
        } else {
            $id_user = $this->session->userdata('id_user');
            // $id_gejala =  $this->input->post("id_gejala", TRUE);
            // gejala yang dipilih user
            $pilihan_user = [];
            foreach ($_POST['gejala'] as $key => $value) {
                if ($value > 0) :
                    $pilihan_user[] = $key;

                    // menyimpan data gejala yang dipilih
                    $diagnosa = [
                        'id_user'   => $id_user,
                        'gejala' => $_POST['gejala']
                    ];
                    $this->db->insert('diagnosa', $diagnosa);
                endif;
            }
            $sql = "SELECT GROUP_CONCAT(penyakit.kode_penyakit),rules.nilai_bobot
                                FROM rules
                                JOIN penyakit
                                ON rules.id_penyakit = penyakit.id_penyakit
                                WHERE rules.id_gejala
                                IN (" . implode(',', $pilihan_user) . ")
                                GROUP BY rules.id_gejala";

            $result = $this->db->query($sql);
            $gejala = array();
            while ($row = $result->row()) {
                $gejala[] = $row;
            }
            // menentukan environment
            $sql = "SELECT GROUP_CONCAT(penyakit.kode_penyakit) FROM penyakit";
            $result = $this->db->query($sql);
            $row = $result->row();
            $fod = $row[0];

            // menentukan nilai densitas
            $densitas_baru = array();
            while (!empty($gejala)) {
                //nilai pada Y1 baris atas
                $densitas1[0] = array_shift($gejala);
                $densitas1[1] = array($fod, 1 - $densitas1[0][1]);
                $densitas2 = array();
                //nilai pada X1 baris 1
                if (empty($densitas_baru)) {
                    $densitas2[0] = array_shift($gejala);
                } else {
                    foreach ($densitas_baru as $k => $r) {
                        //nilai pada X1 baris 2; jika ad densitas baru
                        if ($k != "&theta;") {
                            $densitas2[] = array($k, $r);
                        }
                    }
                }
                //bagian y1
                $theta = 1;
                //nilai X1 baris 2 teta
                foreach ($densitas2 as $d) $theta -= $d[1];
                $densitas2[] = array($fod, $theta);
                $m = count($densitas2);
                $densitas_baru = array();
                for ($y = 0; $y < $m; $y++) {
                    for ($x = 0; $x < 2; $x++) {
                        if (!($y == $m - 1 && $x == 1)) {
                            $v = explode(',', $densitas1[$x][0]);
                            $w = explode(',', $densitas2[$y][0]);
                            sort($v);
                            sort($w);
                            $vw = array_intersect($v, $w);  //mencari nilai irisan
                            if (empty($vw)) {
                                $k = "&theta;";
                            } else {
                                $k = implode(',', $vw);
                            }
                            if (!isset($densitas_baru[$k])) {

                                //data Y1r2
                                $densitas_baru[$k] = $densitas1[$x][1] * $densitas2[$y][1];
                            } else {
                                $densitas_baru[$k] += $densitas1[$x][1] * $densitas2[$y][1];
                            }
                        }
                    }
                }
                foreach ($densitas_baru as $k => $d) {
                    if ($k != "&theta;") {
                        $densitas_baru[$k] = $d / (1 - (isset($densitas_baru["&theta;"]) ? $densitas_baru["&theta;"] : 0));
                    }
                }
            }

            unset($densitas_baru["&theta;"]);
            arsort($densitas_baru);

            // mendapatkan nilai akhir
            $codes = array_keys($densitas_baru);
            $sql = "SELECT * FROM penyakit WHERE id_penyakit IN('{$codes[0]}')";
            $result = $this->db->query($sql);
            $row = $result->row();
            $data['row'] = $result->row();

            // menyimpan hasil akhir
            $hasil = [
                'id_user' => $id_user,
                'diagnosa' => $data['row']
            ];
            $this->db->insert('hasil_diagnosa', $hasil);

            // mengirim hasil akhir ke tampilan
            $this->load->view('Template/header', $data);
            $this->load->view('Template/sidebar', $data);
            $this->load->view('Peternak/Diagnosa/Hasil_Diagnosa', $data);
            $this->load->view('Template/footer', $data);
        }
    }
}
        /* End of fils konsep.php */