<?php 
class Grades extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Grade_model');
        $this->load->model('Section_model');
        $this->load->database();
    }

    public function index() {
        $data['grades'] = $this->Grade_model->get_all_grades();
        $this->load->view('grades/index', $data);
    }

    public function add($enrollment_id = null) {
        if ($enrollment_id === null) {
            show_error('No enrollment ID provided', 400);
            return;
        }
        $data['enrollment_id'] = $enrollment_id;
        $this->load->view('grades/add', $data);
    }

    public function store() {
        $data = [
            'enrollment_id' => $this->input->post('enrollment_id'),
            'prelim' => $this->input->post('prelim'),
            'midterm' => $this->input->post('midterm'),
            'final' => $this->input->post('final'),
            'viewable_date' => $this->input->post('viewable_date')
        ];
        $this->Grade_model->insert_grade($data);
        redirect('grades');
    }

    public function edit($id) {
        $data['grade'] = $this->Grade_model->get_grade_by_id($id);
        $this->load->view('grades/edit', $data);
    }

    public function update($id) {
        $data = [
            'prelim' => $this->input->post('prelim'),
            'midterm' => $this->input->post('midterm'),
            'final' => $this->input->post('final'),
            'viewable_date' => $this->input->post('viewable_date')
        ];
        $this->Grade_model->update_grade($id, $data);
        redirect('grades');
    }

    public function delete($id) {
        $this->Grade_model->delete_grade($id);
        redirect('grades');
    }
}
