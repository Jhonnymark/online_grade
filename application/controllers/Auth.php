<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        $this->load->view('login');
    }

    public function login_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username);

        if ($user && password_verify($password, $user->password)) {
            // Set session data
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'role' => $user->role,
                'logged_in' => TRUE
            ]);
            // Redirect based on role
            if ($user->role == 'dean') {
                redirect('dashboard');
            } elseif ($user->role == 'teacher') {
                redirect('dashboard');
            } elseif ($user->role == 'student') {
                redirect('dashboard');
            }
        } else {
            // Set error message and redirect to login
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register() {
        $this->load->view('register');
    }

    public function register_process() {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'role' => $this->input->post('role') // 'dean', 'teacher', or 'student'
        ];

        $inserted = $this->User_model->insert_user($data);

        if ($inserted) {
            $this->session->set_flashdata('success', 'Registration successful! You can now log in.');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('error', 'Registration failed! Please try again.');
            redirect('auth/register');
        }
    }
}
