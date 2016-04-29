<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class HomeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//var_dump($this->session->logged_in);die;
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			
			//$this->smartyci->useCached( 'admin\home\list.tpl' );
			$this->smartyci->assign('now', Carbon::now()->toRfc850String());
			$this->smartyci->display( 'admin\home\list.tpl' );
		}
	}
}
