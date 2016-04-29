<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->username == null){
			redirect(base_url('admin/login'));
		}else{
			redirect(base_url('admin'));
		}
	}

	public function login()
	{
		$this->smartyci->display( 'admin\login\list.tpl' );
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}

	public function login_check()
	{
		$token = $this->input->post('token');

		switch ($token) {
			case 'administrator':
				$table = 'users';
				$url_success = 'admin';
				$url_fail = 'admin/login';
				break;
			case 'kepala_sekolah': case 'guru_bk': case 'guru_mapel':
				$table = 'teachers';
				$url_success = '';
				$url_fail = 'login';
				break;
			case 'siswa':
				$table = 'students';
				$url_success = '';
				$url_fail = 'login';
				break;
			case 'orang_tua':
				$table = 'parents';
				$url_success = '';
				$url_fail = 'login';
				break;
			default:
				$table = 'students';
				$url_success = '';
				$url_fail = 'login';
				break;
		}
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('status', 1);
		$user = $this->db->get($table);
		if($user->num_rows() == 1){
			$row = $user->result_array()[0];
			if($row['password'] === md5($this->input->post('password'))){
				$newdata = array(
					'user_id'  => $row['id'],
	        'username'  => $row['username'],
	        'email'     => $row['email'],
	        'full_name' => $row['full_name'],
	        'logged_as' => $token,
	        'logged_in' => true
				);

				$this->session->set_userdata($newdata);
				$this->session->set_flashdata('success', 'Login successfuly.');
				redirect(base_url($url_success));
			}else{
				$this->session->set_flashdata('failed', 'Login failed.');
				redirect(base_url($url_fail));
			}
		}else{
			$this->session->set_flashdata('failed', 'Login failed.');
			redirect(base_url($url_fail));
		}
		//var_dump($row);die;
	}
}