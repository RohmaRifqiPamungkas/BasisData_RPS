<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi_model extends CI_Model
{
    public function addMateri($data)
    {
        return $this->db->insert('user_materi', $data);
    }
    public function getMateriById($id)
    {
        return $this->db->get_where('user_materi', ['id_materi' => $id])->row_array();
    }
    public function getAllMateri()
    {
        $query = $this->db->get('user_materi');
        return $query->result_array();
    }
}
