<?php
class C_registrasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function registrasi_alumni()
    {
        $data['jurusan'] = $this->db->get('jurusan')->result();
        $this->load->view('login/V_registrasi_alumni', $data);
    }

    public function save_alumni()
    {
        $this->form_validation->set_rules('nobp', 'NO BP', 'required|is_unique[alumni.nobp]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[alumni.email]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nobp' => $this->input->post('nobp'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jk'),
                'nohp' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'id_jurusan' => $this->input->post('jurusan'),
                'tahun_lulus' => $this->input->post('tahun_lulus')
            ];
            $this->db->insert('alumni', $data);
            $id_alumni = $this->db->insert_id();

            $data_user = [
                'username' => $this->input->post('nobp'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_profil_user' => $id_alumni,
                'level' => 3,
                'status' => 0
            ];
            $this->db->insert('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Registrasi Berhasil. Silahkan Login.');
            redirect('C_login/login/3');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_registrasi/registrasi_alumni');
        }
    }

    public function registrasi_perusahaan()
    {
        $this->load->view('login/V_registrasi_perusahaan');
    }

    public function save_perusahaan()
    {
        $this->form_validation->set_rules('nama', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon Perusahaan', 'required');
        $this->form_validation->set_rules('email', 'Email Perusahaan', 'required|valid_email|is_unique[perusahaan.email_perusahaan]');
        $this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
        $this->form_validation->set_rules('website', 'Website Perusahaan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Perusahaan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_perusahaan' => $this->input->post('nama'),
                'alamat_perusahaan' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('telepon'),
                'email_perusahaan' => $this->input->post('email'),
                'website_perusahaan' => $this->input->post('website'),
                'deskripsi_perusahaan' => $this->input->post('deskripsi')
            ];
            $this->db->insert('perusahaan', $data);
            $id_perusahaan = $this->db->insert_id();

            $data_user = [
                'username' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_profil_user' => $id_perusahaan,
                'level' => 2,
                'status' => 0
            ];
            $this->db->insert('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Registrasi Berhasil. Silahkan Login.');
            redirect('C_login/login/2');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_registrasi/registrasi_perusahaan');
        }
    }
}
