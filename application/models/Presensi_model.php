<?php

class Presensi_model extends CI_Model
{
    public function getAllPresensi()
    {
        return $this->db->get('user_presensi')->result_array();
    }

    public function insertPresensi($data)
    {
        $this->db->insert('user_presensi', $data);
    }

    public function getMahasiswaByNIM($nim)
    {
        return $this->db->get_where('user_presensi', ['nim' => $nim])->row_array();
    }

    public function updateStatusToHadir($nim)
    {
        $this->db->set('status', 'Hadir');
        $this->db->set('waktu', date('Y-m-d H:i:s'));
        $this->db->where('nim', $nim);
        $this->db->update('user_presensi');
    }
}
