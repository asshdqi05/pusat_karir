<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_alumni extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->join('user', 'user.id_profil_user=alumni.id_alumni', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan=alumni.id_jurusan', 'left');
        $this->db->where('user.level', 3);
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->join('user', 'user.id_profil_user=alumni.id_alumni', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan=alumni.id_jurusan', 'left');
        $this->db->where('user.level', 3);
        $this->db->where('id_alumni', $id);
        return $this->db->get()->row();
    }
}
