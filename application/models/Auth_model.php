<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function registration($data)
    {
        $this->db->insert('user', $data);
    }

    public function check_email_exists($email)
    {
        $query = $this->db->get_where('user', array('email' => $email));

        if (empty($query->row_array())) {
            return true; // Email belum terdaftar
        } else {
            return false; // Email sudah terdaftar
        }
    }
}
