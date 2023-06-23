<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', 1);
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level', 1);
        $this->db->where('id_user', $id);
        return $this->db->get()->row();
    }

    public function getAll_alumni()
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->join('user', 'user.id_profil_user=alumni.id_alumni', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan=alumni.id_jurusan', 'left');
        $this->db->where('user.level', 3);
        return $this->db->get();
    }

    public function getAll_perusahaan()
    {
        $this->db->select('*');
        $this->db->from('perusahaan');
        $this->db->join('user', 'user.id_profil_user=perusahaan.id_perusahaan', 'left');
        $this->db->where('user.level', 2);
        return $this->db->get();
    }

    public function getAll_lowongan()
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan', 'left');
        $this->db->order_by('id_lowongan', 'desc');
        return $this->db->get();
    }

    function getAll_pelatihan()
    {
        $this->db->select('*');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan= pelatihan.id_perusahaan');
        $this->db->order_by('id_pelatihan', 'desc');
        return $this->db->get('pelatihan');
    }

    function getAll_belum_bekerja()
    {
        $this->db->select('*');
        $this->db->from('ts_f1');
        $this->db->join('ts_f8', 'ts_f8.id_alumni=ts_f1.id_alumni', 'left');
        $this->db->where('ts_f8.jawaban', 'Tidak');
        return $this->db->get();
    }

    function getAll_sudah_bekerja()
    {
        $this->db->select('*');
        $this->db->from('ts_f1');
        $this->db->join('ts_f8', 'ts_f8.id_alumni=ts_f1.id_alumni', 'left');
        $this->db->where('ts_f8.jawaban', 'Ya');
        return $this->db->get();
    }
}
