<?php
class Section_model extends CI_Model {
    public function get_all_sections() {
        return $this->db->get('sections')->result();
    }

    public function get_section_by_id($id) {
        return $this->db->get_where('sections', ['id' => $id])->row();
    }

    public function insert_section($data) {
        return $this->db->insert('sections', $data);
    }

    public function update_section($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('sections', $data);
    }

    public function delete_section($id) {
        $this->db->where('id', $id);
        return $this->db->delete('sections');
    }
}
