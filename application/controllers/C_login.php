<?php
class C_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('login/V_home_login');
    }

    public function login($level)
    {
        $data['level'] = $level;
        $this->load->view('login/V_login', $data);
    }

    public function proses_login()
    {
        $level = $this->input->post('level');
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim',
            [
                'required' => 'Username Tidak Boleh kosong!!',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Tidak Boleh kosong!!',
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('msg_danger', 'Login gagal: ' . validation_errors());
            redirect('C_login/login/' . $level);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $user = $this->db->get_where('user', ['username' => $username, 'level' => $level])->row_array();

        if ($user) {
            if ($user['status'] == 1) {
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'id_user' => $user['id_user'],
                        'id_profil_user' => $user['id_profil_user'],
                        'username' => $user['username'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 1) {
                        redirect('C_admin');
                    } else if ($user['level'] == 2) {
                        redirect('C_perusahaan');
                    } else if ($user['level'] == 3) {
                        redirect('C_alumni');
                    }
                } else {
                    $this->session->set_flashdata('msg_danger', 'Password Salah.');
                    redirect('C_login/login/' . $level);
                }
            } else {
                $this->session->set_flashdata('msg_danger', 'Akun Anda Belum Aktif!! Silahkan Hubungi Admin Untuk Aktivasi Akun anda!!.');
                redirect('C_login/login/' . $level);
            }
        } else {
            $this->session->set_flashdata('msg_danger', 'Username Salah atau Tidak terdaftar!!.');
            redirect('C_login/login/' . $level);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('id_profil_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('msg_info', 'Logout Berhasil.');
        redirect('C_login');
    }
}
