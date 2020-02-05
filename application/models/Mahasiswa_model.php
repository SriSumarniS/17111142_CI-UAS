<?php 

/**
* 
*/
class Mahasiswa_model extends CI_model{
	public function getAllMahasiswa()
	{
		return $this->db->get('data_mahasiswa')->result_array();
	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"npm" => $this->input->post('npm', true),
			"nama" => $this->input->post('nama', true),
			"jurusan" => $this->input->post('jurusan', true),
			"semester" => $this->input->post('semester', true),
		];

		$this->db->insert('data_mahasiswa', $data);
	}

	public function hapusDataMahasiswa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('data_mahasiswa');
	}

	public function getMahasiswaById($id)
	{
		return $this->db->get_where('data_mahasiswa', ['id' => $id])->row_array();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"npm" => $this->input->post('npm', true),
			"nama" => $this->input->post('nama', true),
			"jurusan" => $this->input->post('jurusan', true),
			"semester" => $this->input->post('semester', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('data_mahasiswa', $data);
	}	
}
	