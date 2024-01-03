<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role Name', 'required');

        if ($this->form_validation->run() == true) {

            $role_name = $this->input->post('role');
            $this->db->insert('user_role', ['role' => $role_name]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role added successfully!</div>');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    // public function createDosenAccount()
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['existing_users'] = $this->db->get('user')->result_array();

    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
    //         'is_unique' => 'This email has already been registered!'
    //     ]);

    //     if ($this->input->post('password')) {
    //         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
    //         $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
    //             'matches' => 'Password doesn\'t match!',
    //             'min_length' => 'Password is too short!'
    //         ]);
    //         $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password1]');
    //     }

    //     if ($this->form_validation->run() == true) {
    //         $email = $this->input->post('email', true);
    //         $userData = [
    //             'email' => htmlspecialchars($email),
    //             'image' => 'default.jpg',
    //             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //             'role_id' => 2, // Role ID for Dosen
    //             'is_active' => 1,
    //             'date_created' => date('Y-m-d H:i:s')
    //         ];
            
    //         $this->db->insert('user', $userData);

    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dosen account has been created!</div>');
    //         redirect('admin/index');
    //     } else {
    //         $data['title'] = 'Create Dosen Account';
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/index', $data);
    //         $this->load->view('templates/footer');
    //     }
    // }

    
}
