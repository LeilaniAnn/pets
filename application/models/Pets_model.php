<?php
class Pets_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function get_pets($slug = FALSE) {
		if ($slug === FALSE) {
			$query = $this->db->get('pets');
			return $query->result_array();
		}
		$query = $this->db->get_where('pets', array(
			'slug' => $slug
		));
		return $query->row_array();
	}
	public function set_pets() {
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text'),
			'image' => $this->input->post('image')
		);
		return $this->db->insert('pets', $data);
	}
	public function set_pet() {
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text'),
			'image' => $this->input->post('image')
		);
		return $this->db->update('pets', $data);
	}
}
    /*public function set_likes() {
        $this->load->helper('form');
        return $this->db->query("UPDATE pets SET likes = likes + 1 where id = ?");
    }
}
*/