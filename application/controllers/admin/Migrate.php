<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Migrate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if ($this->migration->current() === FALSE){
			//show_error($this->migration->error_string());
			$this->session->set_flashdata('failed', 'Migrate failed.');
			redirect(base_url('admin'));
		}else{
			$this->session->set_flashdata('success', 'Migrate successed.');
			redirect(base_url('admin'));
		}	
	}
}
