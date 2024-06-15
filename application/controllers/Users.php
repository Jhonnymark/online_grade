<?php
class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $this->load->view('users/index', $data);
    }

    public function create() {
        $this->load->view('users/create');
    }

    public function store() {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'role' => $this->input->post('role')
        ];
        $this->User_model->insert_user($data);
        redirect('users');
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id) {
        $data = [
            'username' => $this->input->post('username'),
            'role' => $this->input->post('role')
        ];
        if ($this->input->post('password')) {
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }
        $this->User_model->update_user($id, $data);
        redirect('users');
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('users');
    }
}
