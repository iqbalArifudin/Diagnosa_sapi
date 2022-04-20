<?php
defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }
    public function index()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password tidak boleh kosong !',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username tidak boleh kosong !',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('User/Login', $data);
        } else {
            $this->_login();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_session');

        // set_pesan('anda telah berhasil logout');
        redirect('User/Login');
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //jika user nya ada
        if ($user) {
            //cek psw
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'nama' => $user['nama'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'Peternak') {
                    redirect('User/Home_peternak');
                } else {
                    redirect('Admin/Berita');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Password Salah !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('User/Login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Username is not registered
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('User/Login');
        }
    }
}