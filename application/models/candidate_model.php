<?php

class candidate_model extends CI_model
{
	public function __construct() {
		parent::__construct();
	}

	public function check_presence($data){
		$this->db->select('*')->from('candidate')->where($data);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return TRUE;
		}
		return FALSE;
	}

	public function upload_data($data){
		$this->db->insert('candidate',$data);
	}

	public function get_all() {
		$this->db->select('*')->from('candidate');
		$record = $this->db->get();
		if($record->num_rows() > 0){	
			return $record->result_array();
		}		
	}
}
