<?php

class question_model extends CI_model
{
	public function __construct() {
		parent::__construct();
	}

	public function insert_q($data) {
		$this->db->insert('interview_question',$data);
	}

	public function get_questions($iid) {
		$qid = array(
						'interview_id' => $iid
					);
		$result = $this->db->query('SELECT I.*, Q.*
						   			FROM interview_question I, qrepository Q
						   			WHERE Q.q_id = I.q_id AND I.interview_id ='.$qid['interview_id']) ;
		
		return $result->result_array();	

	}

	public function get_qans($iid) {
		$qid = array(
						'interview_id' => $iid
					);
		$result = $this->db->query('SELECT I.*, Q.*
						   			FROM interview_question I, qrepository Q
						   			WHERE Q.q_id = I.q_id AND I.interview_id ='.$qid['interview_id']) ;
		//print_r($result);
		return $result->result_array();	

	}

	public function insert_answer($data){
		//print_r($data);
		$answer = array(
							'answer' => $data['answer']
						);
		$condition = array(
							 'q_id' => $data['q_id'],
							 'interview_id' => $data['interview_id']
						  );
		$this->db->where($condition);
		$this->db->update('interview_question',$answer);

	}

	public function update_feedback($data) {
		$feedback = array(
							'rating' => $data['rating']
						);
		$condition = array(
							 'q_id' => $data['q_id'],
							 'interview_id' => $data['interview_id']
						  );
		$this->db->where($condition);
		$this->db->update('interview_question',$feedback);

	}
	
}