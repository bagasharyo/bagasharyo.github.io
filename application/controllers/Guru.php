<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_controller
{
	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect("login");
		}

		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('dashboard/index', $data);
	}
}