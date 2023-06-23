<?php
class C_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_admin');
        $this->load->model('M_alumni');
        $this->load->model('M_perusahaan');
        $this->load->model('M_lowongan');
        $this->load->model('Pelatihan_model');
        $this->load->helper('download');

        if (!$this->session->userdata('username') && !$this->session->userdata('id_user') || $this->session->userdata('level') != 1) {
            $this->session->set_flashdata('msg_danger', 'Anda Harus Login Sebagai Admin Terlebih Dahulu!!!');
            redirect('C_login');
        }
    }



    public function index()
    {
        $compount['judul_halaman'] = 'Dashboard Admin';
        $compount['menu'] = ['mn_dashboard' => "active"];
        $data['data_alumni'] = $this->M_admin->getAll_alumni();
        $data['data_perusahaan'] = $this->M_admin->getAll_perusahaan();
        $data['data_lowongan'] = $this->M_admin->getAll_lowongan();
        $data['data_pelatihan'] = $this->M_admin->getAll_pelatihan();
        $data['ts'] = $this->db->get('ts_f1');
        $data['sudah_kerja'] = $this->M_admin->getAll_sudah_bekerja();
        $data['belum_kerja'] = $this->M_admin->getAll_belum_bekerja();
        $this->load->view('template/V_header', $compount);
        $this->load->view('template/V_home_admin', $data);
        $this->load->view('template/V_footer');
    }

    public function debug()
    {
        $data = $this->M_admin->getAll_sudah_bekerja()->num_rows();
        print_r($data);
    }

    public function admin()
    {
        $compount['judul_halaman'] = 'Data Admin';
        $compount['menu'] = ['mn_admin' => "active"];
        $data['data_admin'] = $this->M_admin->getAll();
        $this->load->view('template/V_header', $compount);
        $this->load->view('admin/V_list_admin', $data);
        $this->load->view('template/V_footer');
    }
    public function add_admin()
    {
        $compount['judul_halaman'] = 'Tambah Data Admin';
        $compount['menu'] = ['mn_admin' => "active"];
        $this->load->view('template/V_header', $compount);
        $this->load->view('admin/V_add_admin');
        $this->load->view('template/V_footer');
    }
    public function edit_admin($id)
    {
        $compount['judul_halaman'] = 'Tambah Data Admin';
        $compount['menu'] = ['mn_admin' => "active"];
        $data['data_admin'] = $this->M_admin->getById($id);
        $this->load->view('template/V_header', $compount);
        $this->load->view('admin/V_edit_admin', $data);
        $this->load->view('template/V_footer');
    }

    public function save_admin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data_user = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_profil_user' => 0,
                'level' => 1,
                'status' => 1
            ];
            $this->db->insert('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Data berhasil Disimpan.');
            redirect('C_admin/add_admin');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/add_admin');
        }
    }

    public function update_admin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id_user = $this->input->post('id_user');
            $data_user = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];
            $this->db->where('id_user', $id_user);
            $this->db->update('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Data berhasil Diupdate.');
            redirect('C_admin/admin');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/edit_admin/' . $this->input->post('id_user'));
        }
    }

    public function delete_admin()
    {
        $id_user = $this->input->post('id_user');
        $this->db->delete('user', array('id_user' => $id_user));
        $this->session->set_flashdata('msg_info', 'Data berhasil Dihapus.');
        redirect('C_admin/admin');
    }

    //end crud admin

    public function alumni()
    {
        $compount['judul_halaman'] = 'Data Alumni';
        $compount['menu'] = ['mn_alumni' => "active"];
        $data['data_alumni'] = $this->M_alumni->getAll();
        $this->load->view('template/V_header', $compount);
        $this->load->view('alumni/V_list_alumni', $data);
        $this->load->view('template/V_footer');
    }

    public function add_alumni()
    {
        $compount['judul_halaman'] = 'Tambah Data Alumni';
        $compount['menu'] = ['mn_alumni' => "active"];
        $data['jurusan'] = $this->db->get('jurusan')->result();
        $this->load->view('template/V_header', $compount);
        $this->load->view('alumni/V_add_alumni', $data);
        $this->load->view('template/V_footer');
    }

    public function edit_alumni($id)
    {
        $compount['judul_halaman'] = 'Edit Data Alumni';
        $compount['menu'] = ['mn_alumni' => "active"];
        $data['jurusan'] = $this->db->get('jurusan')->result();
        $data['data_alumni'] = $this->M_alumni->getById($id);
        $this->load->view('template/V_header', $compount);
        $this->load->view('alumni/V_edit_alumni', $data);
        $this->load->view('template/V_footer');
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

            $this->session->set_flashdata('msg_success', 'Data berhasil Disimpan.');
            redirect('C_admin/add_alumni');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/add_alumni');
        }
    }

    public function update_alumni()
    {
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
            redirect('C_admin/edit_alumni/' . $this->input->post('id_alumni'));
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/edit_alumni/' . $this->input->post('id_alumni'));
        }
    }

    public function delete_alumni()
    {
        $id_alumni = $this->input->post('id_alumni');
        $id_user = $this->input->post('id_user');
        $this->db->delete('alumni', array('id_alumni' => $id_alumni));
        $this->db->delete('user', array('id_user' => $id_user));
        $this->session->set_flashdata('msg_info', 'Data berhasil Dihapus.');
        redirect('C_admin/alumni');
    }

    public function status_user_alumni()
    {
        $this->form_validation->set_rules('status', 'Opsi', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id_user = $this->input->post('id_user');
            $data_user = [
                'status' => $this->input->post('status')
            ];
            $this->db->where('id_user', $id_user);
            $this->db->update('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Status User berhasil Diupdate.');
            redirect('C_admin/alumni');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/alumni');
        }
    }

    // end crud alumnni

    public function perusahaan()
    {
        $compount['judul_halaman'] = 'Data perusahaan';
        $compount['menu'] = ['mn_perusahaan' => "active"];
        $data['data_perusahaan'] = $this->M_perusahaan->getAll();
        $this->load->view('template/V_header', $compount);
        $this->load->view('perusahaan/V_list_perusahaan', $data);
        $this->load->view('template/V_footer');
    }

    public function add_perusahaan()
    {
        $compount['judul_halaman'] = 'Tambah Data perusahaan';
        $compount['menu'] = ['mn_perusahaan' => "active"];
        $this->load->view('template/V_header', $compount);
        $this->load->view('perusahaan/V_add_perusahaan');
        $this->load->view('template/V_footer');
    }

    public function edit_perusahaan($id)
    {
        $compount['judul_halaman'] = 'Edit Data perusahaan';
        $compount['menu'] = ['mn_perusahaan' => "active"];
        $data['data_perusahaan'] = $this->M_perusahaan->getById($id);
        $this->load->view('template/V_header', $compount);
        $this->load->view('perusahaan/V_edit_perusahaan', $data);
        $this->load->view('template/V_footer');
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

            $this->session->set_flashdata('msg_success', 'Data berhasil Disimpan.');
            redirect('C_admin/add_perusahaan');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/add_perusahaan');
        }
    }

    public function update_perusahaan()
    {
        $this->form_validation->set_rules('nama', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon Perusahaan', 'required');
        $this->form_validation->set_rules('email', 'Email Perusahaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
        $this->form_validation->set_rules('website', 'Website Perusahaan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Perusahaan', 'required');


        if ($this->form_validation->run() == TRUE) {
            $id_perusahaan = $this->input->post('id_perusahaan');
            $data = [
                'nama_perusahaan' => $this->input->post('nama'),
                'alamat_perusahaan' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('telepon'),
                'email_perusahaan' => $this->input->post('email'),
                'website_perusahaan' => $this->input->post('website'),
                'deskripsi_perusahaan' => $this->input->post('deskripsi')
            ];
            $this->db->where('id_perusahaan', $id_perusahaan);
            $this->db->update('perusahaan', $data);

            if ($this->input->post('password') == "") {
                $pw = $this->input->post('password_old');
            } else {
                $pw = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            $id_user = $this->input->post('id_user');
            $data_user = [
                'username' => $this->input->post('email'),
                'password' => $pw,
            ];
            $this->db->where('id_user', $id_user);
            $this->db->update('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Data berhasil Diupdate.');
            redirect('C_admin/edit_perusahaan/' . $this->input->post('id_perusahaan'));
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/edit_perusahaan/' . $this->input->post('id_perusahaan'));
        }
    }

    public function delete_perusahaan()
    {
        $id_perusahaan = $this->input->post('id_perusahaan');
        $id_user = $this->input->post('id_user');
        $this->db->delete('perusahaan', array('id_perusahaan' => $id_perusahaan));
        $this->db->delete('user', array('id_user' => $id_user));
        $this->session->set_flashdata('msg_info', 'Data berhasil Dihapus.');
        redirect('C_admin/perusahaan');
    }

    public function status_user_perusahaan()
    {
        $this->form_validation->set_rules('status', 'Opsi', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id_user = $this->input->post('id_user');
            $data_user = [
                'status' => $this->input->post('status')
            ];
            $this->db->where('id_user', $id_user);
            $this->db->update('user', $data_user);

            $this->session->set_flashdata('msg_success', 'Status User berhasil Diupdate.');
            redirect('C_admin/perusahaan');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/perusahaan');
        }
    }
    // end crud alumnni

    function pelatihan()
    {
        $compount['judul_halaman'] = 'Data Pelatihan';
        $compount['menu'] = ['mn_pelatihan' => "active"];
        $data['pelatihan'] = $this->Pelatihan_model->get_all_pelatihan();
        $this->load->view('template/V_header', $compount);
        $this->load->view('pelatihan/V_list_pelatihan', $data);
        $this->load->view('template/V_footer');
    }

    /*
     * Adding a new pelatihan
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_perusahaan', 'Id Perusahaan', 'required');
        $this->form_validation->set_rules('nama_pelatihan', 'Nama Pelatihan', 'required');
        $this->form_validation->set_rules('tanggal_pelatihan', 'Tanggal Pelatihan', 'required');
        $this->form_validation->set_rules('jam_pelatihan', 'Jam Pelatihan', 'required');
        $this->form_validation->set_rules('lokasi_pelatihan', 'Lokasi Pelatihan', 'required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'id_perusahaan' => $this->input->post('id_perusahaan'),
                'nama_pelatihan' => $this->input->post('nama_pelatihan'),
                'tanggal_pelatihan' => $this->input->post('tanggal_pelatihan'),
                'jam_pelatihan' => $this->input->post('jam_pelatihan'),
                'lokasi_pelatihan' => $this->input->post('lokasi_pelatihan'),
                'contact_person' => $this->input->post('contact_person'),
            );
            $this->db->insert('pelatihan', $params);
            $pelatihan_id = $this->db->insert_id();

            $config['upload_path']          = './upload/pelatihan'; //buat diretori jika belum ada.
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000;
            $config['file_name']            = $pelatihan_id;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_pelatihan')) {
                $u_data = $this->upload->data();
                $file_name = $u_data['file_name'];

                $data = array('gambar_pelatihan' => $file_name);
                $this->db->where('id_pelatihan', $pelatihan_id);
                $this->db->update('pelatihan', $data);
            }

            $this->session->set_flashdata('msg_success', 'Data berhasil Disimpan.');
            redirect('C_admin/pelatihan');
        } else {

            $this->load->model('Perusahaan_model');
            $data['all_perusahaan'] = $this->Perusahaan_model->get_all_perusahaan();
            $compount['judul_halaman'] = 'Data Pelatihan';
            $compount['menu'] = ['mn_pelatihan' => "active"];
            $data['pelatihan'] = $this->Pelatihan_model->get_all_pelatihan();
            $this->load->view('template/V_header', $compount);
            $this->load->view('pelatihan/V_add_pelatihan', $data);
            $this->load->view('template/V_footer');
        }
    }

    /*
     * Editing a pelatihan
     */
    function edit_pelatihan($id_pelatihan)
    {
        // check if the pelatihan exists before trying to edit it
        $this->load->library('upload');
        $data['pelatihan'] = $this->Pelatihan_model->get_pelatihan($id_pelatihan);

        if (isset($data['pelatihan']['id_pelatihan'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('id_perusahaan', 'Id Perusahaan', 'required');
            $this->form_validation->set_rules('nama_pelatihan', 'Nama Pelatihan', 'required');
            $this->form_validation->set_rules('tanggal_pelatihan', 'Tanggal Pelatihan', 'required');
            $this->form_validation->set_rules('jam_pelatihan', 'Jam Pelatihan', 'required');
            $this->form_validation->set_rules('lokasi_pelatihan', 'Lokasi Pelatihan', 'required');
            $this->form_validation->set_rules('contact_person', 'Contact Person', 'required');

            if ($this->form_validation->run()) {

                $upload_image = $_FILES['gambar_pelatihan'];

                $old_foto = $this->input->post("old_foto");

                $new_name = $id_pelatihan . "_" . $_FILES["gambar_pelatihan"]['name'];

                if ($upload_image) {
                    $config['upload_path']          = './upload/pelatihan'; //buat diretori jika belum ada.
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000;
                    $config['file_name']            = $new_name;
                    $config['overwrite']            = true;

                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('gambar_pelatihan')) {
                        unlink(FCPATH . 'upload/pelatihan/' . $old_foto);
                        $new_foto = $this->upload->data('file_name');
                    } else {
                        echo $this->upload->display_errors();
                        $new_foto = $old_foto;
                    }
                }
                $nf = $new_foto;
                $params = array(
                    'id_perusahaan' => $this->input->post('id_perusahaan'),
                    'nama_pelatihan' => $this->input->post('nama_pelatihan'),
                    'tanggal_pelatihan' => $this->input->post('tanggal_pelatihan'),
                    'jam_pelatihan' => $this->input->post('jam_pelatihan'),
                    'lokasi_pelatihan' => $this->input->post('lokasi_pelatihan'),
                    'contact_person' => $this->input->post('contact_person'),
                    'gambar_pelatihan' =>  $nf
                );

                $this->Pelatihan_model->update_pelatihan($id_pelatihan, $params);
                $this->session->set_flashdata('msg_success', 'Data berhasil Diupdate.');
                redirect('C_admin/pelatihan');
            } else {
                $this->load->model('Perusahaan_model');
                $data['all_perusahaan'] = $this->Perusahaan_model->get_all_perusahaan();
                $data['pelatihan'] = $this->Pelatihan_model->get_pelatihan($id_pelatihan);

                $compount['judul_halaman'] = 'Edit Pelatihan';
                $compount['menu'] = ['mn_pelatihan' => "active"];
                $this->load->view('template/V_header', $compount);
                $this->load->view('pelatihan/V_edit_pelatihan', $data);
                $this->load->view('template/V_footer');
            }
        } else
            show_error('The pelatihan you are trying to edit does not exist.');
    }

    /*
     * Deleting pelatihan
     */
    function remove_pelatihan()
    {
        $id_pelatihan = $this->input->post('id');
        $pelatihan = $this->Pelatihan_model->get_pelatihan($id_pelatihan);

        // check if the pelatihan exists before trying to delete it
        if (isset($pelatihan['id_pelatihan'])) {
            unlink(FCPATH . 'upload/pelatihan/' . $pelatihan['gambar_pelatihan']);
            $this->Pelatihan_model->delete_pelatihan($id_pelatihan);
            $this->session->set_flashdata('msg_success', 'Data berhasil Dihapus.');
            redirect('C_admin/pelatihan');
        } else
            show_error('The pelatihan you are trying to delete does not exist.');
    }

    public function lowongan_pekerjaan()
    {
        $data['data_lowongan'] = $this->M_lowongan->getAll();
        $compount['judul_halaman'] = 'Data Lowongan pekerjaan';
        $compount['menu'] = ['mn_lowongan_pekerjaan' => "active"];
        $this->load->view('template/V_header', $compount);
        $this->load->view('lowongan/V_list_lowongan', $data);
        $this->load->view('template/V_footer');
    }

    public function add_lowongan()
    {
        $data['perusahaan'] = $this->db->get('perusahaan')->result();
        $compount['judul_halaman'] = 'Tambah Data Lowongan pekerjaan';
        $compount['menu'] = ['mn_lowongan_pekerjaan' => "active"];
        $this->load->view('template/V_header', $compount);
        $this->load->view('lowongan/V_add_lowongan', $data);
        $this->load->view('template/V_footer');
    }

    public function edit_lowongan($id)
    {
        $compount['judul_halaman'] = 'Edit Data Lowongan pekerjaan';
        $compount['menu'] = ['mn_lowongan_pekerjaan' => "active"];
        $data['perusahaan'] = $this->db->get('perusahaan')->result();
        $data['data_lowongan'] = $this->M_lowongan->getById($id);
        $this->load->view('template/V_header', $compount);
        $this->load->view('lowongan/V_edit_lowongan', $data);
        $this->load->view('template/V_footer');
    }

    public function save_temp_syarat()
    {
        $data = [
            'syarat' => $this->input->post('syarat'),
            'id_user' =>  $this->session->userdata('id_user')
        ];
        $this->db->insert('temp_syarat', $data);
        $this->load->view("lowongan/V_temp_syarat");
    }

    public function delete_temp_syarat()
    {
        $id = $this->input->post('id');
        $this->db->delete('temp_syarat', array('id' => $id));
?>
        <script>
            alert("Data Berhasil Di hapus");
        </script>
    <?php
        $this->load->view("lowongan/V_temp_syarat");
    }

    public function save_temp_kriteria()
    {
        $data = [
            'kriteria' => $this->input->post('kriteria'),
            'id_user' =>  $this->session->userdata('id_user')
        ];
        $this->db->insert('temp_kriteria', $data);
        $this->load->view("lowongan/V_temp_kriteria");
    }

    public function delete_temp_kriteria()
    {
        $id = $this->input->post('id');
        $this->db->delete('temp_kriteria', array('id' => $id));
    ?>
        <script>
            alert("Data Berhasil Di hapus");
        </script>
    <?php
        $this->load->view("lowongan/V_temp_kriteria");
    }

    public function save_lowongan()
    {

        $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('judul', 'Judul Lowongan', 'required');
        $this->form_validation->set_rules('area_penempatan', 'Area Penempatan', 'required');
        $this->form_validation->set_rules('deskripsi_lowongan', 'Deskripsi Lowongan', 'required');
        $this->form_validation->set_rules('keterangan_lowongan', 'Keterangan Lowongan', 'required');
        $this->form_validation->set_rules('batas_lowongan', 'Batas Lowongan', 'required');
        if (empty($_FILES['gambar_lowongan']['name'])) {
            $this->form_validation->set_rules('gambar_lowongan', 'Document', 'required');
        }

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_lowongan' => $this->input->post('judul'),
                'area_penempatan' => $this->input->post('area_penempatan'),
                'id_perusahaan' => $this->input->post('perusahaan'),
                'deskripsi_lowongan' => $this->input->post('deskripsi_lowongan'),
                'keterangan_lowongan' => $this->input->post('keterangan_lowongan'),
                'batas_lowongan' => $this->input->post('batas_lowongan')
            ];
            $this->db->insert('lowongan', $data);
            $id_lowongan = $this->db->insert_id();

            $config['upload_path']          = './upload/lowongan'; //buat diretori jika belum ada.
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000;
            $config['file_name']            = $id_lowongan;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_lowongan')) {
                $u_data = $this->upload->data();
                $file_name = $u_data['file_name'];

                $data = array('gambar_lowongan' => $file_name);
                $this->db->where('id_lowongan', $id_lowongan);
                $this->db->update('lowongan', $data);
            }

            $id_user = $this->session->userdata('id_user');

            $this->db->query("INSERT INTO syarat_lowongan (id_lowongan,syarat)SELECT '$id_lowongan',syarat from temp_syarat where id_user='$id_user'");
            $this->db->delete('temp_syarat', array('id_user' => $id_user));

            $this->db->query("INSERT INTO kriteria_lowongan (id_lowongan,kriteria)SELECT '$id_lowongan',kriteria from temp_kriteria where id_user='$id_user'");
            $this->db->delete('temp_kriteria', array('id_user' => $id_user));

            $this->session->set_flashdata('msg_success', 'Data berhasil Disimpan.');
            redirect('C_admin/lowongan_pekerjaan');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/add_lowongan');
        }
    }

    public function update_lowongan()
    {
        $this->load->library('upload');
        $id_lowongan = $this->input->post("id_lowongan");
        $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('judul', 'Judul Lowongan', 'required');
        $this->form_validation->set_rules('area_penempatan', 'Area Penempatan', 'required');
        $this->form_validation->set_rules('deskripsi_lowongan', 'Deskripsi Lowongan', 'required');
        $this->form_validation->set_rules('keterangan_lowongan', 'Keterangan Lowongan', 'required');
        $this->form_validation->set_rules('batas_lowongan', 'Batas Lowongan', 'required');


        if ($this->form_validation->run() == TRUE) {
            $upload_image = $_FILES['gambar_lowongan'];

            // $id_lowongan = $this->input->post("id_lowongan");
            $old_foto = $this->input->post("old_foto");

            $new_name = $id_lowongan . "_" . $_FILES["gambar_lowongan"]['name'];

            if ($upload_image) {
                $config['upload_path']          = './upload/lowongan'; //buat diretori jika belum ada.
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['file_name']            = $new_name;
                $config['overwrite']            = true;

                $this->upload->initialize($config);
                if ($this->upload->do_upload('gambar_lowongan')) {
                    unlink(FCPATH . 'upload/lowongan/' . $old_foto);
                    $new_foto = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                    $new_foto = $old_foto;
                }
            }
            $nf = $new_foto;
            $data = [
                'nama_lowongan' => $this->input->post('judul'),
                'area_penempatan' => $this->input->post('area_penempatan'),
                'id_perusahaan' => $this->input->post('perusahaan'),
                'deskripsi_lowongan' => $this->input->post('deskripsi_lowongan'),
                'keterangan_lowongan' => $this->input->post('keterangan_lowongan'),
                'batas_lowongan' => $this->input->post('batas_lowongan'),
                'gambar_lowongan' => $nf
            ];
            $this->db->where('id_lowongan', $id_lowongan);
            $this->db->update('lowongan', $data);

            $this->session->set_flashdata('msg_success', 'Data berhasil Diupdate.');
            redirect('C_admin/lowongan_pekerjaan');
        } else {
            $this->session->set_flashdata('msg_danger', 'Input data gagal: ' . validation_errors());
            redirect('C_admin/edit_lowongan/' . $id_lowongan);
        }
    }

    public function delete_lowongan()
    {
        $id_lowongan = $this->input->post('id_lowongan');
        $foto = $this->db->get_where('lowongan', ['id_lowongan' => $id_lowongan])->row();
        unlink(FCPATH . 'upload/lowongan/' . $foto->gambar_lowongan);
        $this->db->delete('lowongan', array('id_lowongan' => $id_lowongan));
        $this->db->delete('syarat_lowongan', array('id_lowongan' => $id_lowongan));
        $this->db->delete('kriteria_lowongan', array('id_lowongan' => $id_lowongan));
        $this->session->set_flashdata('msg_info', 'Data berhasil Dihapus.');
        redirect('C_admin/lowongan_pekerjaan');
    }

    public function tampil_syarat()
    {
        $data['id_lowongan'] = $this->input->post('id_lowongan');
        $this->load->view("lowongan/V_edit_syarat", $data);
    }

    public function tampil_kriteria()
    {
        $data['id_lowongan'] = $this->input->post('id_lowongan');
        $this->load->view("lowongan/V_edit_kriteria", $data);
    }

    public function save_syarat()
    {
        $data = [
            'syarat' => $this->input->post('syarat'),
            'id_lowongan' =>  $this->input->post('id_lowongan')
        ];
        $this->db->insert('syarat_lowongan', $data);
        $this->load->view("lowongan/V_edit_syarat", $data);
    }

    public function save_kriteria()
    {
        $data = [
            'kriteria' => $this->input->post('kriteria'),
            'id_lowongan' =>  $this->input->post('id_lowongan')
        ];
        $this->db->insert('kriteria_lowongan', $data);
        $this->load->view("lowongan/V_edit_kriteria", $data);
    }

    public function edit_syarat()
    {
        $idl['id_lowongan'] = $this->input->post('id_l');
        $data = [
            'syarat' => $this->input->post('syarat')
        ];
        $id = $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->update('syarat_lowongan', $data);

        $this->load->view("lowongan/V_edit_syarat", $idl);
    }

    public function edit_kriteria()
    {
        $idlw['id_lowongan'] = $this->input->post('id_lw');
        $data = [
            'kriteria' => $this->input->post('kriteria')
        ];
        $id = $this->input->post('idk');

        $this->db->where('id', $id);
        $this->db->update('kriteria_lowongan', $data);

        $this->load->view("lowongan/V_edit_kriteria", $idlw);
    }

    public function delete_syarat()
    {
        $id = $this->input->post('id');
        $this->db->delete('syarat_lowongan', array('id' => $id));
        $data['id_lowongan'] =  $this->input->post('id_lowongan');
    ?>
        <script>
            alert("Data Berhasil Di hapus");
        </script>
    <?php
        $this->load->view("lowongan/V_edit_syarat", $data);
    }

    public function delete_kriteria()
    {
        $id = $this->input->post('id');
        $this->db->delete('kriteria_lowongan', array('id' => $id));
        $data['id_lowongan'] =  $this->input->post('id_lowongan');
    ?>
        <script>
            alert("Data Berhasil Di hapus");
        </script>
<?php
        $this->load->view("lowongan/V_edit_kriteria", $data);
    }

    public function daftar_pelamar_lowongan($id_lowongan)
    {
        $compount['judul_halaman'] = 'Data Pelamar pekerjaan';
        $compount['menu'] = ['mn_lowongan_pekerjaan' => "active"];
        $data['data_pelamar'] = $this->M_lowongan->get_pelamar_by_lowongan($id_lowongan);
        $this->load->view('template/V_header', $compount);
        $this->load->view('lowongan/V_list_pelamar_lowongan', $data);
        $this->load->view('template/V_footer');
    }

    public function download_syarat($id_pendaftar)
    {
        $data = $this->db->get_where('daftar_lowongan', ['id_pendaftaran' => $id_pendaftar])->row();
        force_download('upload/file_lowongan/' . $data->document, NULL);
    }
}
