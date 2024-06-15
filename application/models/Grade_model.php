<?php
class Grade_model extends CI_Model {
    public function get_all_grades() {
        return $this->db->get('grades')->result();
    }

    public function get_grade_by_id($id) {
        return $this->db->get_where('grades', ['id' => $id])->row();
    }

    public function insert_grade($data) {
        return $this->db->insert('grades', $data);
    }

    public function update_grade($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('grades', $data);
    }

    public function delete_grade($id) {
        $this->db->where('id', $id);
        return $this->db->delete('grades');
    }
}
