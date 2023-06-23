<?php
class C_laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_laporan');
        $this->load->model('M_alumni');

        if (!$this->session->userdata('username') && !$this->session->userdata('id_user') || $this->session->userdata('level') != 1) {
            $this->session->set_flashdata('msg_danger', 'Anda Harus Login Sebagai Admin Terlebih Dahulu!!!');
            redirect('C_login');
        }
    }

    public function index()
    {
        $compount['judul_halaman'] = 'Laporan';
        $compount['menu'] = ['mn_laporan' => "active"];
        $this->load->view('template/V_header', $compount);
        $this->load->view('laporan/V_laporan');
        $this->load->view('template/V_footer');
    }

    public function laporan_data_lulusan()
    {
        $compount['judul_halaman'] = 'Laporan Data Lulusan';
        $compount['menu'] = ['mn_laporan' => "active"];
        $data['laporan'] = $this->M_laporan->laporan_data_lulusan($this->input->post('tahun'), $this->input->post('jurusan'));
        $data['jurusan'] = $this->db->get_where('jurusan', ['id_jurusan' => $this->input->post('jurusan')])->row();
        $data['tahun'] = $this->input->post('tahun');
        $this->load->view('template/V_header', $compount);
        $this->load->view('laporan/V_laporan_data_lulusan', $data);
        $this->load->view('template/V_footer');
    }

    public function laporan_daftar_perusahaan()
    {
        $compount['judul_halaman'] = 'Laporan Daftar Perusahaan';
        $compount['menu'] = ['mn_laporan' => "active"];
        $data['laporan'] = $this->M_laporan->laporan_daftar_perusahaan();
        $this->load->view('template/V_header', $compount);
        $this->load->view('laporan/V_laporan_daftar_perusahaan', $data);
        $this->load->view('template/V_footer');
    }

    public function laporan_lowongan_pekerjaan()
    {
        $compount['judul_halaman'] = 'Laporan Lowongan Pekerjaan';
        $compount['menu'] = ['mn_laporan' => "active"];
        $data['laporan'] = $this->M_laporan->laporan_lowongan_pekerjaan($this->input->post('tahun'));
        $data['tahun'] = $this->input->post('tahun');
        $this->load->view('template/V_header', $compount);
        $this->load->view('laporan/V_laporan_lowongan_pekerjaan', $data);
        $this->load->view('template/V_footer');
    }

    public function laporan_data_penginput_tracer_study()
    {
        $compount['judul_halaman'] = 'Laporan Data Penginput Tracer Study';
        $compount['menu'] = ['mn_laporan' => "active"];
        $data['laporan'] = $this->db->get_where('ts_f1', ['tahun_lulus' => $this->input->post('tahun')])->result();
        $data['tahun'] = $this->input->post('tahun');
        $this->load->view('template/V_header', $compount);
        $this->load->view('laporan/V_laporan_data_tracer_study', $data);
        $this->load->view('template/V_footer');
    }

    public function laporan_ts_per_alumni($id)
    {
        $compount['judul_halaman'] = 'Laporan Data Tracer Study';
        $compount['menu'] = ['mn_laporan' => "active"];
        $data['data_alumni'] = $this->M_alumni->getById($id);

        $data['f1'] = $this->db->get_where('ts_f1', ['id_alumni' => $id])->row();
        $data['f2'] = $this->db->get_where('ts_f2', ['id_alumni' => $id])->row();
        $data['f3'] = $this->db->get_where('ts_f3', ['id_alumni' => $id])->row();
        $data['f4'] = $this->db->get_where('ts_f4', ['id_alumni' => $id])->row();
        $data['f5'] = $this->db->get_where('ts_f5', ['id_alumni' => $id])->row();
        $data['f6'] = $this->db->get_where('ts_f6', ['id_alumni' => $id])->row();
        $data['f7'] = $this->db->get_where('ts_f7', ['id_alumni' => $id])->row();
        $data['f7a'] = $this->db->get_where('ts_f7a', ['id_alumni' => $id])->row();
        $data['f8'] = $this->db->get_where('ts_f8', ['id_alumni' => $id])->row();
        $data['f9'] = $this->db->get_where('ts_f9', ['id_alumni' => $id])->row();
        $data['f10'] = $this->db->get_where('ts_f10', ['id_alumni' => $id])->row();
        $data['f11'] = $this->db->get_where('ts_f11', ['id_alumni' => $id])->row();
        $data['f13'] = $this->db->get_where('ts_f13', ['id_alumni' => $id])->row();
        $data['f14'] = $this->db->get_where('ts_f14', ['id_alumni' => $id])->row();
        $data['f15'] = $this->db->get_where('ts_f15', ['id_alumni' => $id])->row();
        $data['f16'] = $this->db->get_where('ts_f16', ['id_alumni' => $id])->row();
        $data['f17_1'] = $this->db->get_where('ts_f17_1', ['id_alumni' => $id])->row();
        $data['f17_2'] = $this->db->get_where('ts_f17_2', ['id_alumni' => $id])->row();

        $this->load->view('template/V_header', $compount);
        $this->load->view('laporan/V_laporan_data_tracer_study_per_alumni', $data);
        $this->load->view('template/V_footer');
    }
}
