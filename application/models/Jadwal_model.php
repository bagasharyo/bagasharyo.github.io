<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_model 
{
	public function tambah($table, $data)
	{
		$data = [
			'hari' => htmlspecialchars($this->input->post('hari', true)),
			'mapel' => htmlspecialchars($this->input->post('mapel', true)),
		];
		return $this->db->insert('jadwal', $data);
	}

	public function ubah($id)
	{
		$data = [
			'hari' => htmlspecialchars($this->input->post('hari', true)),
			'mapel' => htmlspecialchars($this->input->post('mapel', true)),
		];
		$this->db->where(id, $this->input->post('id'));
        $this->db->update('jadwal',$data);
	}

	public function get($id)
	{
		return $this->db->get_where('jadwal', ['id' => $id])->row_array();
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jadwal');
	}
}