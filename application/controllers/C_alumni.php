<?php
class C_alumni extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_perusahaan');
        $this->load->model('M_lowongan');
        $this->load->model('M_alumni');
        $this->load->model('Pelatihan_model');

        if (!$this->session->userdata('username') && !$this->session->userdata('id_user') || $this->session->userdata('level') != 3) {
            $this->session->set_flashdata('msg_danger', 'Anda Harus Login Terlebih Dahulu!!');
            redirect('C_login');
        }
    }

    public function index()
    {
        $compount['judul_halaman'] = 'Dashboard';
        $compount['menu'] = ['mn_dashboard' => "active"];
        $data['data_lowongan'] = $this->M_lowongan->getAll();
        $data['data_pelatihan'] = $this->Pelatihan_model->get_all_pelatihan_new();
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('template_alumni/V_home_alumni', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function lowongan()
    {
        $compount['judul_halaman'] = 'Lowongan Pekerjaan';
        $compount['menu'] = ['mn_lowongan' => "active"];
        $data['data_lowongan'] = $this->M_lowongan->getAll();
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('lowongan/V_daftar_lowongan', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function detail_lowongan($id_lowongan)
    {
        $compount['judul_halaman'] = 'Lowongan Pekerjaan';
        $compount['menu'] = ['mn_lowongan' => "active"];
        $id = $this->session->userdata('id_profil_user');
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $data['data_lowongan'] = $this->M_lowongan->getById($id_lowongan);
        $data['data_kriteria'] = $this->db->get_where('kriteria_lowongan', ['id_lowongan' => $id_lowongan])->result();
        $data['data_syarat'] = $this->db->get_where('syarat_lowongan', ['id_lowongan' => $id_lowongan])->result();
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('lowongan/V_detail_lowongan', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function pelatihan()
    {
        $compount['judul_halaman'] = 'Pelatihan';
        $compount['menu'] = ['mn_pelatihan' => "active"];
        $data['data_pelatihan'] = $this->Pelatihan_model->get_all_pelatihan();
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('pelatihan/V_daftar_pelatihan', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function detail_pelatihan($id_pelatihan)
    {
        $compount['judul_halaman'] = 'Pelatihan';
        $compount['menu'] = ['mn_pelatihan' => "active"];
        $id = $this->session->userdata('id_profil_user');
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $data['data_pelatihan'] = $this->Pelatihan_model->get_pelatihan($id_pelatihan);
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('pelatihan/V_detail_pelatihan', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function profil()
    {
        $compount['judul_halaman'] = 'Profil Alumni';
        $compount['menu'] = ['mn_profil' => "active"];
        $id = $this->session->userdata('id_profil_user');
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('alumni/V_profil_alumni', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function edit_profil_alumni()
    {
        $compount['judul_halaman'] = 'Edit Profil Alumni';
        $compount['menu'] = ['mn_profil' => "active"];
        $id = $this->session->userdata('id_profil_user');
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('alumni/V_edit_profil_alumni', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function update_profil_alumni()
    {
        $this->load->library('upload');
        $this->form_validation->set_rules('nobp', 'NO BP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');


        if ($this->form_validation->run() == TRUE) {
            $id_alumni = $this->input->post('id_alumni');

            $upload_image = $_FILES['foto_alumni'];
            $old_foto = $this->input->post("old_foto");

            $new_name = $id_alumni . "_" . $_FILES["foto_alumni"]['name'];

            if ($upload_image) {
                $config['upload_path']          = './upload/alumni'; //buat diretori jika belum ada.
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['file_name']            = $new_name;
                $config['overwrite']            = true;

                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto_alumni')) {
                    unlink(FCPATH . 'upload/alumni/' . $old_foto);
                    $new_foto = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    $new_foto = $old_foto;
                }
            }
            $nf = $new_foto;

            $data = [
                'nobp' => $this->input->post('nobp'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jk'),
                'nohp' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'id_jurusan' => $this->input->post('jurusan'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'foto_alumni' => $nf
            ];
            $this->db->where('id_alumni', $id_alumni);
            $this->db->update('alumni', $data);

            if ($this->input->post('password') == "") {
                $pw = $this->input->post('password_old');
            } else {
                $pw = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            $id_user = $this->input->post('id_user');
            $data_user = [
                'username' => $this->input->post('nobp'),
                'password' => $pw,
            ];
            $this->db->where('id_user', $id_user);
            $this->db->update('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Data berhasil Diupdate.');
            redirect('C_alumni/profil');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_alumni/edit_profil_alumni');
        }
    }

    public function tracer_study()
    {
        $id = $this->session->userdata('id_profil_user');
        $dt = $this->M_alumni->getById($id);
        $cek = $this->db->get_where('ts_f1', ['id_alumni' => $dt->id_alumni]);
        if ($cek->num_rows() == 0) {
            $data['data_alumni'] = $this->M_alumni->getById($id);
            $compount['judul_halaman'] = 'Tracer Study';
            $compount['menu'] = ['mn_tracer' => "active"];
            $this->load->view('template_alumni/V_header', $compount);
            $this->load->view('alumni/V_tracer_study', $data);
            $this->load->view('template_alumni/V_footer');
        } else {
            $compount['judul_halaman'] = 'Tracer Study';
            $compount['menu'] = ['mn_tracer' => "active"];
            $this->load->view('template_alumni/V_header', $compount);
            $this->load->view('alumni/V_pesan_tracer_study');
            $this->load->view('template_alumni/V_footer');
        }
    }

    public function save_tracer_study()
    {
        $id = $this->session->userdata('id_profil_user');
        $data = $this->M_alumni->getById($id);

        $f1 = [
            'id_alumni' => $data->id_alumni,
            'no_mahasiswa' => $this->input->post('no_mahasiswa'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama' => $this->input->post('nama'),
            'no_telepon' => $this->input->post('no_telepon'),
            'email' => $this->input->post('email'),
            'pekerjaan' => $this->input->post('pekerjaan')
        ];
        $this->db->insert('ts_f1', $f1);

        $f2 = [
            'id_alumni' => $data->id_alumni,
            'perkuliahan' => $this->input->post('perkuliahan'),
            'demonstrasi' => $this->input->post('demonstrasi'),
            'partisipasi_dalam_proyek_riset' => $this->input->post('partisipasi_dalam_proyek_riset'),
            'magang' => $this->input->post('magang'),
            'praktikum' => $this->input->post('praktikum'),
            'kerja_lapangan' => $this->input->post('kerja_lapangan'),
            'diskusi' => $this->input->post('diskusi')
        ];
        $this->db->insert('ts_f2', $f2);

        $f3 = [
            'id_alumni' => $data->id_alumni,
            'posisi' => $this->input->post('posisi_j_f3'),
            'jawaban' => $this->input->post('j_f3')
        ];
        $this->db->insert('ts_f3', $f3);

        $f4 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => implode(',', $this->input->post('f4')),
        ];
        $this->db->insert('ts_f4', $f4);

        $f5 = [
            'id_alumni' => $data->id_alumni,
            'posisi' => $this->input->post('posisi_j_f5'),
            'jawaban' => $this->input->post('j_f5')
        ];
        $this->db->insert('ts_f5', $f5);

        $f6 = [
            'id_alumni' => $data->id_alumni,
            'perusahaan' => $this->input->post('f6_1'),
            'instansi' => $this->input->post('f6_2'),
            'institusi' => $this->input->post('f6_3'),
        ];
        $this->db->insert('ts_f6', $f6);

        $f7 = [
            'id_alumni' => $data->id_alumni,
            'perusahaan' => $this->input->post('f7_1'),
            'instansi' => $this->input->post('f7_2'),
            'institusi' => $this->input->post('f7_3'),
        ];
        $this->db->insert('ts_f7', $f7);

        $f7a = [
            'id_alumni' => $data->id_alumni,
            'perusahaan' => $this->input->post('f7a_1'),
            'instansi' => $this->input->post('f7a_2'),
            'institusi' => $this->input->post('f7a_3')
        ];
        $this->db->insert('ts_f7a', $f7a);

        $f8 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => $this->input->post('f8')
        ];
        $this->db->insert('ts_f8', $f8);

        $f9 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => implode(',', $this->input->post('f9'))
        ];
        $this->db->insert('ts_f9', $f9);

        $f10 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => $this->input->post('f10')
        ];
        $this->db->insert('ts_f10', $f10);

        $f11 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => $this->input->post('f11')
        ];
        $this->db->insert('ts_f11', $f11);

        $f13 = [
            'id_alumni' => $data->id_alumni,
            'pekerjaan_utama' => $this->input->post('f13_1'),
            'lembur_dan_tip' => $this->input->post('f13_2'),
            'pekerjaan_lainnya' => $this->input->post('f13_3')
        ];
        $this->db->insert('ts_f13', $f13);

        $f14 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => $this->input->post('f14')
        ];
        $this->db->insert('ts_f14', $f14);

        $f15 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => $this->input->post('f15')
        ];
        $this->db->insert('ts_f15', $f15);

        $f16 = [
            'id_alumni' => $data->id_alumni,
            'jawaban' => implode(',', $this->input->post('f16'))
        ];
        $this->db->insert('ts_f16', $f16);

        $f17_1 = [
            'id_alumni' => $data->id_alumni,
            'j1' => $this->input->post('f17_1'),
            'j2' => $this->input->post('f17_2'),
            'j3' => $this->input->post('f17_3'),
            'j4' => $this->input->post('f17_4'),
            'j5' => $this->input->post('f17_5'),
            'j6' => $this->input->post('f17_6'),
            'j7' => $this->input->post('f17_7'),
            'j8' => $this->input->post('f17_8'),
            'j9' => $this->input->post('f17_9'),
            'j10' => $this->input->post('f17_10'),
            'j11' => $this->input->post('f17_11'),
            'j12' => $this->input->post('f17_12'),
            'j13' => $this->input->post('f17_13'),
            'j14' => $this->input->post('f17_14'),
            'j15' => $this->input->post('f17_15'),
            'j16' => $this->input->post('f17_16'),
            'j17' => $this->input->post('f17_17'),
            'j18' => $this->input->post('f17_18'),
            'j19' => $this->input->post('f17_19'),
            'j20' => $this->input->post('f17_20'),
            'j21' => $this->input->post('f17_21'),
            'j22' => $this->input->post('f17_22'),
            'j23' => $this->input->post('f17_23'),
            'j24' => $this->input->post('f17_24'),
            'j25' => $this->input->post('f17_25'),
            'j26' => $this->input->post('f17_26'),
            'j27' => $this->input->post('f17_27')
        ];
        $this->db->insert('ts_f17_1', $f17_1);

        $f17_2 = [
            'id_alumni' => $data->id_alumni,
            'j1' => $this->input->post('f17_1_2'),
            'j2' => $this->input->post('f17_2_2'),
            'j3' => $this->input->post('f17_3_2'),
            'j4' => $this->input->post('f17_4_2'),
            'j5' => $this->input->post('f17_5_2'),
            'j6' => $this->input->post('f17_6_2'),
            'j7' => $this->input->post('f17_7_2'),
            'j8' => $this->input->post('f17_8_2'),
            'j9' => $this->input->post('f17_9_2'),
            'j10' => $this->input->post('f17_10_2'),
            'j11' => $this->input->post('f17_11_2'),
            'j12' => $this->input->post('f17_12_2'),
            'j13' => $this->input->post('f17_13_2'),
            'j14' => $this->input->post('f17_14_2'),
            'j15' => $this->input->post('f17_15_2'),
            'j16' => $this->input->post('f17_16_2'),
            'j17' => $this->input->post('f17_17_2'),
            'j18' => $this->input->post('f17_18_2'),
            'j19' => $this->input->post('f17_19_2'),
            'j20' => $this->input->post('f17_20_2'),
            'j21' => $this->input->post('f17_21_2'),
            'j22' => $this->input->post('f17_22_2'),
            'j23' => $this->input->post('f17_23_2'),
            'j24' => $this->input->post('f17_24_2'),
            'j25' => $this->input->post('f17_25_2'),
            'j26' => $this->input->post('f17_26_2'),
            'j27' => $this->input->post('f17_27_2')
        ];
        $this->db->insert('ts_f17_2', $f17_2);

        $this->session->set_flashdata('msg_success', 'Tracer Study Berhasil Disimpan.');
        redirect('C_alumni');
    }

    public function daftar_lowongan($id_lowongan)
    {
        $compount['judul_halaman'] = 'Daftar Lowongan Pekerjaan';
        $compount['menu'] = ['mn_lowongan' => "active"];
        $data['data_lowongan'] = $this->M_lowongan->getById($id_lowongan);
        $id = $this->session->userdata('id_profil_user');
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $data['data_kriteria'] = $this->db->get_where('kriteria_lowongan', ['id_lowongan' => $id_lowongan])->result();
        $data['data_syarat'] = $this->db->get_where('syarat_lowongan', ['id_lowongan' => $id_lowongan])->result();
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('lowongan/V_pendaftaran_lowongan', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function save_daftar_lowongan()
    {
        $id_lowongan = $this->input->post('id_lowongan');
        $data = [
            'id_lowongan' => $this->input->post('id_lowongan'),
            'id_perusahaan' => $this->input->post('id_perusahaan'),
            'id_alumni' => $this->input->post('id_alumni'),
        ];
        $this->db->insert('daftar_lowongan', $data);
        $id_daftar = $this->db->insert_id();

        $nama = $id_daftar . '_' . $this->input->post('nama');

        $config['upload_path']          = './upload/file_lowongan';
        $config['allowed_types']        = 'pdf|zip|rar';
        $config['max_size']             = 6000;
        $config['file_name']            = $nama;
        $config['overwrite']            = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_lowongan')) {
            $u_data = $this->upload->data();
            $file_name = $u_data['file_name'];

            $data = array('document' => $file_name);
            $this->db->where('id_pendaftaran', $id_daftar);
            $this->db->update('daftar_lowongan', $data);
        }

        $this->session->set_flashdata('msg_success', 'Pendaftaran Lowongan Berhasil.');
        redirect('C_alumni/detail_lowongan/' . $id_lowongan);
    }


    public function daftar_pelatihan($id_pelatihan)
    {
        $compount['judul_halaman'] = 'Daftar pelatihan';
        $compount['menu'] = ['mn_pelatihan' => "active"];
        $data['data_pelatihan'] = $this->Pelatihan_model->get_pelatihan($id_pelatihan);
        $id = $this->session->userdata('id_profil_user');
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $this->load->view('template_alumni/V_header', $compount);
        $this->load->view('pelatihan/V_pendaftaran_pelatihan', $data);
        $this->load->view('template_alumni/V_footer');
    }

    public function save_daftar_pelatihan()
    {
        $id_pelatihan = $this->input->post('id_pelatihan');
        $data = [
            'id_pelatihan' => $this->input->post('id_pelatihan'),
            'id_perusahaan' => $this->input->post('id_perusahaan'),
            'id_alumni' => $this->input->post('id_alumni'),
        ];
        $this->db->insert('daftar_pelatihan', $data);

        $this->session->set_flashdata('msg_success', 'Pendaftaran pelatihan Berhasil.');
        redirect('C_alumni/detail_pelatihan/' . $id_pelatihan);
    }

    // function debug()
    // {
    //     $id = $this->session->userdata('id_profil_user');
    //     $data = $this->M_alumni->getById($id);

    //     print_r($data->id_alumni);
    // }
}
