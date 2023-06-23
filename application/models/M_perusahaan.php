<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perusahaan extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('perusahaan');
        $this->db->join('user', 'user.id_profil_user=perusahaan.id_perusahaan', 'left');
        $this->db->where('user.level', 2);
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('perusahaan');
        $this->db->join('user', 'user.id_profil_user=perusahaan.id_perusahaan', 'left');
        $this->db->where('user.level', 2);
        $this->db->where('id_perusahaan', $id);
        return $this->db->get()->row();
    }
}
