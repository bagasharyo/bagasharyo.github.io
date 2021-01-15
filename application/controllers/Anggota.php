<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_controller
{
	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect("login");
		}
		if($this->session->userdata('role_id') != 1){
			redirect("login");
		}

		$data['title'] = 'Daftar Siswa';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['login'] = $this->db->get('user')->result_array();

		$this->load->view('dashboard/anggota', $data);
	}

}