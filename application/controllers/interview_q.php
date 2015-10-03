<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interview_q extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function insert_q() {
		$qid = $this->input->post('qid');
		$interview_id = $this->input->post('int_id');
		$record = array (
							'q_id' => $qid,
							'interview_id' => $interview_id
						);
		$this->question_model->insert_q($record);
		redirect('/dashboard');	
	}


	public function get_qa($id) {
		$qans = $this->question_model->get_qans($id);	
		//print_r($qans);
		$record = array(
							'qans' => $qans
						);
		$this->load->view('feedback_view',$record);
	}

	public function set_feedback() {
		$iid = $this->input->post('iid');
		$questions = $this->question_model->get_questions($iid);
		//print_r($questions);
		foreach($questions as $row) {
			$q_id = $row['q_id'];
			$feedback = $this->input->post($q_id);
			$data = array(
							'interview_id' => $iid,
							'rating' => $feedback,
							'q_id' => $q_id
						 );
			$this->question_model->update_feedback($data);
			//echo "success";

		}
		redirect('/dashboard');
	}
}