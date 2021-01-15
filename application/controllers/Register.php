<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Register_model');
	}

	public function index()
	{
		$data['title'] = 'Registration';
		$this->load->view('login/register', $data);
	}

	public function registration(){
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password dont match!', 'min_length' => 'Password too short!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false){
			$data['title'] = 'Registration';
			$this->load->view('login/register', $data);
		}else{
			$this->Register_model->register('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Congratulation! your accound has been created. Please Login!</div>');
			redirect('Login');
		}
		
	}
}