<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model 
{
	public function login($name)
	{
		return $this->db->get_where('user', ['name' => $name])->row_array();
	}
}