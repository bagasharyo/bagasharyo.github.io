<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Jadwal_model');
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect("login");
		}

		$data['title'] = 'Jadwal';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['login'] = $this->db->get('jadwal')->result_array();

		$this->load->view('dashboard/jadwal', $data);
	}

	public function tambah(){

		$this->form_validation->set_rules('hari', 'Hari', 'required');
		$this->form_validation->set_rules('mapel', 'Mapel', 'required');
		$data['title'] = 'Tambah Jadwal';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		if ($this->form_validation->run() == false) {
			$this->load->view('dashboard/tambahjadwal', $data);
		}else{
			$this->Jadwal_model->tambah('jadwal', $data);
			$this->session->set_flashdata('jadwal', '<div class="alert alert-success" role="alert">
				Data Berhasil Ditambahkan!</div>');
			redirect('Jadwal');
		}
	}

	public function ubah($id)
	{

		$data['title'] = 'Ubah Jadwal';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['jadwal'] = $this->Jadwal_model->get($id);
		$this->form_validation->set_rules('hari', 'Hari', 'required');
		$this->form_validation->set_rules('mapel', 'Mapel', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('dashboard/ubahjadwal', $data);
		}else{
			$this->Jadwal_model->ubah('jadwal', $data);
			$this->session->set_flashdata('jadwal', '<div class="alert alert-success" role="alert">
				Data Berhasil Diubah!</div>');
			redirect('Jadwal');
		}
	}

	public function ubah1()
	{

		$this->form_validation->set_rules('hari', 'Hari', 'required');
		$this->form_validation->set_rules('mapel', 'Mapel', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('dashboard/ubahjadwal', $data);
		}else{
			$this->Jadwal_model->ubah('jadwal', $data);
			$this->session->set_flashdata('jadwal', '<div class="alert alert-success" role="alert">
				Data Berhasil Diubah!</div>');
			redirect('Jadwal');
		}
	}

	public function hapus($id)
	{
		$this->Jadwal_model->hapus($id);
		$this->session->set_flashdata('barang', '<div class="alert alert-success" role="alert">
			Data Berhasil Dihapus!</div>');
		redirect('Jadwal');
	}
}