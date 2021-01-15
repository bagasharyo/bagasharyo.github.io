<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_model 
{

	public function register($table, $data)
	{
		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role_id' => 2
		];
		return $this->db->insert('user', $data);
	}
}