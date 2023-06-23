<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{
    public function laporan_data_lulusan($tahun, $jurusan)
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->join('jurusan', 'jurusan.id_jurusan=alumni.id_jurusan', 'left');
        $this->db->where('alumni.id_jurusan', $jurusan);
        $this->db->where('alumni.tahun_lulus', $tahun);
        return $this->db->get()->result();
    }

    public function laporan_daftar_perusahaan()
    {
        return $this->db->get('perusahaan')->result();
    }

    public function laporan_lowongan_pekerjaan($tahun)
    {
        $sql = $this->db->query("SELECT * FROM lowongan 
        LEFT JOIN perusahaan ON perusahaan.`id_perusahaan` = lowongan.`id_perusahaan`
        WHERE DATE_FORMAT(batas_lowongan,'%Y')= '$tahun'");
        return $sql->result();
    }
}
