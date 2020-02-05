<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// 	//$this->load->library('form_validation');
	// }

	public function index()
	{
		$this->form_validation->set_rules('npm', 'Npm', 'trim|required', ['required' => 'NPM Harus Diisi']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password Harus Diisi']);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'HALAMAN LOGIN';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// validasinya lolos
			$this->_login();
		}
	}

	public function index_adm()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required', ['required' => 'Username Harus Diisi']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password Harus Diisi']);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'HALAMAN LOGIN ADMIN';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login_admin');
			$this->load->view('templates/auth_footer');
		} else {
			// validasinya lolos
			$this->_login_admin();
		}
	}

	private function _login()
	{
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['npm' => $npm])->row_array();
		
		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])){
					$data = [
						'npm' => $user['npm'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						redirect('user');
					}
					
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Diaktivasi</div>');
				redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NPM Belum Terdaftar</div>');
			redirect('auth');
		}
	}

	public function index_regist()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Nama Harus Diisi']);
		$this->form_validation->set_rules('npm', 'Npm', 'required|trim', ['required' => 'NPM Harus Diisi']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['required' => 'Email Harus Diisi', 'valid_email' => 'Email Tidak Sesuai', 'is_unique' => 'Email Sudah Terdaftar']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
			'matches' => 'Password Tidak Sama', 'required' => 'Password Harus Diisi']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', ['required' => 'Ulangi Password Harus Diisi']);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'HALAMAN REGISTRASI';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');	
		} else {
			// validasinya lolos
			$this->registration();
		}
	}

	public function registration()
	{
		$npm = $this->input->post('npm');
		$data_mahasiswa = $this->db->get_where('data_mahasiswa', ['npm' => $npm])->row_array();


		// jika usernya ada
		if ($data_mahasiswa) {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'npm' => htmlspecialchars($this->input->post('npm', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akunmu Sudah Terdaftar, Silahkan Login</div>');
			redirect('auth');

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NPM Tidak Ditemukan</div>');
			redirect('auth/index_regist');
		}
	}

	// public function registration()
	// {
	// 	$this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Nama Harus Diisi']);
	// 	$this->form_validation->set_rules('npm', 'Npm', 'required|trim', ['required' => 'NPM Harus Diisi']);
	// 	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['required' => 'Email Harus Diisi', 'valid_email' => 'Email Tidak Sesuai', 'is_unique' => 'Email Sudah Terdaftar']);
	// 	$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
	// 		'matches' => 'Password Tidak Sama', 'required' => 'Password Harus Diisi'
	// 	]);
	// 	$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', ['required' => 'Ulangi Password Harus Diisi']);

	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'HALAMAN REGISTRASI';
	// 		$this->load->view('templates/auth_header', $data);
	// 		$this->load->view('auth/registration');
	// 		$this->load->view('templates/auth_footer');	
	// 	} else {
	// 		$data = [
	// 			'name' => htmlspecialchars($this->input->post('name', true)),
	// 			'npm' => htmlspecialchars($this->input->post('npm', true)),
	// 			'email' => htmlspecialchars($this->input->post('email', true)),
	// 			'image' => 'default.jpg',
	// 			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	// 			'role_id' => 2,
	// 			'is_active' => 1,
	// 			'date_created' => time()
	// 		];

	// 		$this->db->insert('user', $data);
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akunmu Sudah Terdaftar, Silahkan Login</div>');
	// 		redirect('auth');
	// 	}
	// }

	public function logout()
	{
		$this->session->unset_userdata('npm');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu Telah Keluar</div>');
		redirect('auth');
	}


	private function _login_admin()
	{
		$name = $this->input->post('name');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['name' => $name])->row_array();
		
		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])){
					$data = [
						'name' => $user['name'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					redirect('admin');				
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
					redirect('auth/index_adm');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Diaktivasi</div>');
				redirect('auth/index_adm');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Terdaftar</div>');
			redirect('auth/index_adm');
		}
	}
}