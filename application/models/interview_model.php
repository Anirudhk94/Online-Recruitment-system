<?php

class interview_model extends CI_model
{
	public function __construct() {
		parent::__construct();
	}

	public function insert($data) {
		$this->db->insert('interview',$data);
	}

	public function check_slug($slug) {
		$record = array(
						'slug' => $slug 
						);
		$this -> db -> select('*') -> from ('interview') -> where ($record);
		$result = $this -> db -> get();
		if($result->num_rows() > 0){
			return true;
		}
		return false;
	}

	public function get_interviewid($slug) {
		$record = array(
						'slug' => $slug 
						);
		$this -> db -> select('*') -> from ('interview') -> where ($record);
		$result = $this -> db -> get();
		if($result->num_rows() > 0){
			return $result->result_array()[0]['interview_id'];
		}
	}

	public function get_status($slug) {
		$record = array(
						'slug' => $slug 
						);
		$this -> db -> select('*') -> from ('interview') -> where ($record);
		$result = $this -> db -> get();

		//print_r($result->result_array());
		if($result->result_array()[0]['status'] == 0){
			return 0;
		}
		return 1;
	}

	public function get_candidates($data){
		$record = array(
					'assigned_to' => $data
					);
		$this->db->select('*')->from('interview')->where($record);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}
	}

	public function update_status($data){
		//print_r($data);
		$answer = array(
							'status' => $data['status']
						);
		$condition = array(
							 'interview_id' => $data['interview_id']
						  );
		$this->db->where($condition);
		$this->db->update('interview',$answer);

	}

}