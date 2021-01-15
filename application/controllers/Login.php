<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Login';
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run()== false){
			$this->load->view('login/login' ,$data);
		}else{
			$this->_Login();
		}
	}

	private function _Login(){
		$name = htmlspecialchars($this->input->post('name'));
		$password = htmlspecialchars($this->input->post('password'));
		$user = $this->Login_model->login($name);
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id'],
					'status' => 'login'
				];
				$this->session->set_userdata($data);
				if($user['role_id'] == 1){
					redirect('Guru');
				}else{
					redirect('Siswa');
				}

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Password salah!</div>');
				redirect('Login');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email tidak terdaftar!</div>');
			redirect('Login');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			You have been logged out!</div>');
		$this->session->sess_destroy();
		redirect('welcome');
	}
}	