<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		if(!empty($this->session->userdata('email'))) {
			redirect('dashboard');
		}
		else {

		}
	}
	public function index()
	{
		$this->load->view('login_view');
		

	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array('email' => $email, 'password' => $password);
		if ($this->user_model->can_login($data)) {
			$role = $this->user_model->get_role($data);
			//$role = $record['role'];
			//echo $record;
			$sess_data = array
			(
				'email' => $email,
				'role' => $role
			);
			$this->session->set_userdata($sess_data);
			redirect('/dashboard');
		}
		else {
			redirect('home');
		}
	}

	public function register()
	{
		$this->load->model('user_model');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$role = $this->input->post('role');
		$result = array
		(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'role' => $role
		);
		$this->user_model->insert($result);
		$sess_data = array
		(
			'email' => $email,
			'role' => $role
		);
		$this->session->set_userdata($sess_data);
		redirect('/dashboard');

	}

}
