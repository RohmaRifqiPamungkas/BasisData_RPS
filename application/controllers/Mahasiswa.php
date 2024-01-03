<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Profile Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function presensiMhs()
    {
        $this->load->model('Presensi_model');
        $data['presensimhs'] = $this->Presensi_model->getAllPresensi();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nim', 'Nim Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Presensi Mahasiswa';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/presensimhs', $data);
            $this->load->view('templates/footer');
        } else {
            $nim = $this->input->post('nim', true);

            // Update status to 'Hadir'
            $this->Presensi_model->updateStatusToHadir($nim);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Presensi berhasil!</div>');
            redirect('user/presensirps');
        }
    }
}
