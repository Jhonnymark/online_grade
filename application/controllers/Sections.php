<?php 
class Sections extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Section_model');
        $this->load->model('Course_model');
        $this->load->model('User_model');
    }

    public function index() {
        $data['sections'] = $this->Section_model->get_all_sections();
        $this->load->view('sections/index', $data);
    }

    public function create() {
        $data['courses'] = $this->Course_model->get_all_courses();
        $data['teachers'] = $this->User_model->get_users_by_role('teacher');
        $this->load->view('sections/create', $data);
    }

    public function store() {
        $data = [
            'course_id' => $this->input->post('course_id'),
            'teacher_id' => $this->input->post('teacher_id'),
            'schedule' => $this->input->post('schedule')
        ];
        $this->Section_model->insert_section($data);
        redirect('sections');
    }

    public function edit($id) {
        $data['section'] = $this->Section_model->get_section_by_id($id);
        $data['courses'] = $this->Course_model->get_all_courses();
        $data['teachers'] = $this->User_model->get_users_by_role('teacher');
        $this->load->view('sections/edit', $data);
    }

    public function update($id) {
        $data = [
            'course_id' => $this->input->post('course_id'),
            'teacher_id' => $this->input->post('teacher_id'),
            'schedule' => $this->input->post('schedule')
        ];
        $this->Section_model->update_section($id, $data);
        redirect('sections');
    }

    public function delete($id) {
        $this->Section_model->delete_section($id);
        redirect('sections');
    }
}