<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('candidate_form_view');
	}

	public function file_upload()
	{


// upload functionality
		$config['upload_path'] = '/Applications/MAMP/htdocs/work/uploads';
		$config['allowed_types'] = 'pdf|doc|rtf';
		$config['max_size']	= '5000';
		
		if(is_file($config['upload_path']))
		{
		    chmod($config['upload_path'], 777); ## this should change the permissions
		}
		$this->upload->initialize($config);
		// $this->load->library('upload', $config);
		//$this->load->view('templates/header');
		if ( ! $this->upload->do_upload('resume'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error['error']);
			//$this->load->view('jobs_index', $error);
		}
		else
		{
			$file_data = $this->upload->data();
			// $data = "Profile successfully submitted";
			// $name = $this->input->post('name');
			// $email = $this->input->post('email');
			// $result = array
			// (
			// 	'name' => $name,
			// 	'email' => $email,
			// 	'resume' => $file_data['full_path']
			// );
			//$this->load->model('user_model');
			//$data = array('data' => $data);
			//$result = $this->user_model->save($result);
		

		//$this->upload->initialize($config);
		// $this->load->library('upload', $config);
			return $file_data;
		}
	}

	public function register() {
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$pno = $this->input->post('pno');
		$url = $this->input->post('url');

		// print_r($resume);
		$result_upload = $this->file_upload();

		$data = array(
				'name' => $name,
				'email' => $email,
				'pno' => $pno,
				'url' => $url,
				'resume' => $result_upload['full_path']
				);
		
		
		$this->session->set_userdata('email',$email);

		if(!$this->candidate_model->check_presence(array('email' => $email))){

			$this->candidate_model->upload_data($data);
			$this->session->set_flashdata('success', "Profile has been submitted");
			$result = array(
					'success' => $this->session->flashdata('success')
				);
			$this->load->view('candidate_form_view', array('success' => $this->session->flashdata('success')));
		}
		else{
			$this->session->set_flashdata('success', "Profile already exists!");
			$result = array(
					'success' => $this->session->flashdata('success')
				);
			$this->load->view('candidate_form_view', array('success' => $this->session->flashdata('success')));
		}

	}
}
