<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(empty($this->session->userdata('email'))) {
			redirect('home');
		}
		else {
			
		}
	}

	public function index(){
		//echo $this->session->userdata('role');
		if($this->session->userdata('role')=='hr') {
			$this->load->view('template/header');
			 
			$record = array (
						'result' => $this->candidate_model->get_all()
						);
			$this->load->view('dashboard_index_view',$record);
		}
		
		else if($this->session->userdata('role')=='tech') {
			$this->load->view('template/header');
			//echo "Hello";
			$email_id = $this->session->userdata('email');
			//echo $email_id;
			$record = array (
						'result' => $this->interview_model->get_candidates($email_id),
						'questions' => $this->qrepository_model->all_questions()
						);
			
			$this->load->view('dashboard_tech_view',$record);
		} 
	}

	public function get_details(){
		$email = $this->input->post('email');
		$name = $this->input->post('int_name');
		$cand_email = $this->input->post('cand_email');
		$slug = md5($name);
		$url = 'http://localhost:8888/work/index.php/interview/online_test/'.$slug;
		$record = array (
					'assigned_to' => $email,
					'interview_name' => $name,
					'assigned_from' => $this->session->userdata('email'),
					'candidate_email' => $cand_email,
					'slug' => $slug,
					'url' => $url
					);
		$this->interview_model->insert($record);
		$this->send_email($record);
		$this->load->view('interview_conf_view');
		
	}

	public function send_email($data) {
		$this->email->from('sgupta@gmail.com', 'Zomato HR');
		$this->email->to('k.anirudh8@gmail.com'); 
		$this->email->cc('lalithr95@gmail.com'); 

		$this->email->subject('Zomato Hiring');
		$this->email->message("Hi! Your interview had been confirmed !\r\n
						       Check the link below to write the test. \r\n".$data['url']);	

		$this->email->send();

		
	}

}