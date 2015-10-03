<?php

class user_model extends CI_model
{
	public function __construct() {
		parent::__construct();
	}

	public function insert($data) {
		$this->db->insert('user', $data);
	}

	public function can_login($data) {
		$this->db->select('*')->from('user')->where($data);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return TRUE;
		}
		return FALSE;

	}

	public function get_role($data) {
		$this->db->select('*')->from('user')->where($data);
		$query = $this->db->get();
		return $query->result_array()[0]['role'];
	}
}