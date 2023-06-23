<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_lowongan extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan', 'left');
        $this->db->order_by('id_lowongan', 'desc');
        return $this->db->get()->result();
    }

    // public function getAll_by_id_terbaru()
    // {
    //     $this->db->select('*');
    //     $this->db->from('lowongan');
    //     $this->db->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan', 'left');

    //     return $this->db->get()->result();
    // }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan', 'left');
        $this->db->where('id_lowongan', $id);
        return $this->db->get()->row();
    }

    public function getallById($id)
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan=lowongan.id_perusahaan', 'left');
        $this->db->where('lowongan.id_perusahaan', $id);
        return $this->db->get()->result();
    }

    public function get_pelamar_by_lowongan($id)
    {
        $this->db->select('*');
        $this->db->from('daftar_lowongan');
        $this->db->join('lowongan', 'lowongan.id_lowongan=daftar_lowongan.id_lowongan', 'left');
        $this->db->join('alumni', 'alumni.id_alumni=daftar_lowongan.id_alumni', 'left');
        $this->db->where('daftar_lowongan.id_lowongan', $id);
        return $this->db->get()->result();
    }
}
