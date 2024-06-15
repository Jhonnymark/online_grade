<?php
class Courses extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Course_model');
    }

    public function index() {
        $data['courses'] = $this->Course_model->get_all_courses();
        $this->load->view('courses/index', $data);
    }

    public function create() {
        $this->load->view('courses/create');
    }

    public function store() {
        $data = ['name' => $this->input->post('name')];
        $this->Course_model->insert_course($data);
        redirect('courses');
    }

    public function edit($id) {
        $data['course'] = $this->Course_model->get_course_by_id($id);
        $this->load->view('courses/edit', $data);
    }

    public function update($id) {
        $data = ['name' => $this->input->post('name')];
        $this->Course_model->update_course($id, $data);
        redirect('courses');
    }

    public function delete($id) {
        $this->Course_model->delete_course($id);
        redirect('courses');
    }
}