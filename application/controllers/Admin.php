<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{


	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// 	//$this->load->model('Mahasiswa_model');
	// 	//$this->load->library('form_validation');
		
	// }

	public function index()
	{
		//$this->load->model('Mahasiswa_model');
		$data['title'] = 'HALAMAN ADMIN';
		$data['data_mahasiswa'] =  $this->Mahasiswa_model->getAllMahasiswa();
		//echo 'Selamat Datang ' . $data['user']['name'];

		$this->load->view('admin/headadm', $data);
		$this->load->view('admin/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'TAMBAH DATA MAHASISWA';

		$this->form_validation->set_rules('npm', 'Npm', 'required|numeric', ['required' => 'NPM Harus Diisi', 'numeric' => 'NPM Harus Angka']);
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Harus Diisi']);

			
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/headadm', $data);
			$this->load->view('admin/tambah');
		} else {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin');
		}	
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin');
	}

	public function ubah($id)
	{
		$data['title'] = 'EDIT DATA MAHASISWA';
		$data['data_mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Desain Komunikasi Visual'];
		$data['semester'] = ['1', '2', '3', '4', '5', '6', '7', '8'];

		$this->form_validation->set_rules('npm', 'Npm', 'required|numeric', ['required' => 'NPM Harus Diisi', 'numeric' => 'NPM Harus Angka']);
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Harus Diisi']);

			
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/headadm', $data);
			$this->load->view('admin/ubah', $data);
		} else {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin');
		}	
	}
}


	// public function tambahdata(){	
	// 	$data ['title'] = "HALAMAN TAMBAH DATA";
	// 	$data ['tampil'] = $this->Modeladmin->tampilkan_data();

	// 	$this->load->view('admin/headadm', $data);
	// 	$this->load->view('admin/view_tambahdata',$data);

	// }

	// public function aksi_tambah_data(){

	// 	$this->form_validation->set_rules('npm','NPM','required|trim',[
	// 		'required' => 'NPM tidak boleh kosong!'
	// 	]);
	// 	$this->form_validation->set_rules('nama','Nama','required|trim',[
	// 		'required' => 'Nama tidak boleh kosong!'
	// 	]);
	// 	$this->form_validation->set_rules('semester','Semester','required|trim',[
	// 		'required' => 'Semester tidak boleh kosong!'
	// 	]);
		
	// 	if($this->form_validation->run() != false){

	// 		$npm = $this->input->post('npm');
	// 		$nama =$this->input->post('nama');
	// 		$semester =$this->input->post('semester');

	// 		$data = array(
	// 			'npm'=> $npm, 
	// 			'nama'=> $nama,
	// 			'semester'=> $semester
	// 		);	

	// 		$this->Modeladmin->tambah_data($data,'data_mahasiswa');	
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');
	// 		redirect('Admin/tambahdata');
	// 	}

	// 	else{
	// 		$this->tambahdata();
	// 	}

	// }

	// function hapus($id){		
	// 	$where = array('id' => $id);
	// 	$this->Modeladmin->hapus_data($where,'data_mahasiswa');
	// 	$this->session->set_flashdata('message2','<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
	// 	redirect('Admin/tambahdata');
	// }

	// public function editdata($id=null){
	//     if(is_null($id)){
	//     	$this->session->set_flashdata('message3','<div class="alert alert-success" role="alert">Data tidak ada</div');
	//     	redirect('Admin/tambahdata');
	//      }
	// 	$where = array('id' => $id);
	// 	$data ['title'] = "EDIT DATA";
	// 	$data ['datamhs'] = $this->Modeladmin->edit_data($where, 'data_mahasiswa')->row_array();
	// 	$this->load->view('admin/headadm', $data);
	// 	$this->load->view('admin/view_editdata',$data);
	// }

	// public function aksi_edit_data(){
	// 	$id = $this->input->post('id');
	// 	$npm = $this->input->post('npm');
	// 	$nama =$this->input->post('nama');
	// 	$semester =$this->input->post('semester');	

	// 	$data = array(
	// 		'npm'=> $npm, 
	// 		'nama'=> $nama,
	// 		'semester'=> $semester
	// 	);	

	// 	$where = array(
	// 		'id' => $id
	// 	);

	// 	$this->Modeladmin->update_data($where,$data,'data_mahasiswa');
	// 	$this->session->set_flashdata('message1','<div class="alert alert-success" role="alert">Data Berhasil diubah</div>');
	// 	redirect('Admin/tambahdata');
	// }