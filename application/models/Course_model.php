<?php
class Course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Ensure database library is loaded
    }

    public function get_all_courses() {
        return $this->db->get('courses')->result();
    }

    public function get_course_by_id($id) {
        return $this->db->get_where('courses', ['id' => $id])->row();
    }

    public function insert_course($data) {
        return $this->db->insert('courses', $data);
    }

    public function update_course($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('courses', $data);
    }

    public function delete_course($id) {
        $this->db->where('id', $id);
        return $this->db->delete('courses');
    }
}
