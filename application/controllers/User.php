<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		// parent::__construct();
		// if (!$this->session->userdata('name')) {
		// 	redirect('auth');
		// }
	}

	public function index()
	{
		$data['title'] = 'HALAMAN USER';
		$data['user'] =  $this->db->get_where('user', ['npm' =>
		$this->session->userdata('npm')])->row_array();
		//echo 'Selamat Datang ' . $data['user']['name'];

		$this->load->view('user/index', $data);
	}
}