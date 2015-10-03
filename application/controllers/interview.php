<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interview extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function online_test($slug) {
		if($this->interview_model->check_slug($slug)) {	
			$data = array(
							'slug' => $slug
						 );
			$this->load->view('test_homepage_view',$data);
		}
		else {
			echo "Invalid URL";
		}
	}

	public function test_session($data) {
		if($this->interview_model->get_status($data) == 0) {
				$email = $this->input->post('email');
				$slug = $data;

				$ses_data = array(
									'email' => $email,
									'slug' => $slug,
									'iid' => $this->interview_model->get_interviewid($slug)
								 );
				$this->session->set_userdata($ses_data);

				$iid = $this->interview_model->get_interviewid($slug);
				//echo $iid;
				$questions = $this->question_model->get_questions($this->session->userdata('iid'));

				$data = array(
						'questions' => $questions
					);

				$this->load->view('questions_page_view',$data);
		}
		else{
				$this->load->view('test_complete_view');
		}
	}

	public function getAnswers() {	
		
		$iid = $this->session->userdata('iid');

		$questions = $this->question_model->get_questions($iid);

		foreach($questions as $row) {
			$q_id = $row['q_id'];
			$answer = $this->input->post($q_id);
			$iid = $this->input->post('iid');

			$data = array(
							'interview_id' => $iid,
							'answer' => $answer,
							'q_id' => $q_id
						 );
			$this->question_model->insert_answer($data);
			//echo "success";

		}
			$status = array(
							'status' => '1',
							'interview_id' => $iid
							);

		$this->interview_model->update_status($status);	
		$this->session->sess_destroy();
		$this->load->view('test_complete_view');

	}

}	