<?php

class qrepository_model extends CI_model
{
	public function __construct() {
		parent::__construct();
	}

	public function all_questions() {
		$this->db->select('*')->from('qrepository');
		$query = $this->db->get();
		return $query->result_array();
	}
}