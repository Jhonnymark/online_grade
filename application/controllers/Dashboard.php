<?php
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $role = $this->session->userdata('role');
        if ($role == 'dean') {
            $this->load->view('dean_dashboard');
        } elseif ($role == 'teacher') {
            $this->load->view('teacher_dashboard');
        } else {
            $this->load->view('student_dashboard');
        }
    }
}
