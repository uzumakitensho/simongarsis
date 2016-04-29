<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->smartyci->useCached( 'welcome\list.tpl' );
		$this->smartyci->display( 'welcome\list.tpl' );
	}
	
	public function create()
	{
		$this->smartyci->useCached( 'welcome\create.tpl' );
		$this->smartyci->display( 'welcome\create.tpl' );
	}
}
