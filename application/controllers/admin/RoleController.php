<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$roles = $this->Role->get_entries();
			
			$this->smartyci->assign('roles', $roles);
			$this->smartyci->display( 'admin\role\list.tpl' );
		}
	}

	public function create()
	{
		//var_dump($_SESSION);die;
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$this->load->library('form_validation');
			$config = array(
				array(
					'field' => 'name',
					'label' => 'Name',
					'rules' => 'trim|required|min_length[4]'
				),
				array(
					'field' => 'description',
					'label' => 'Description',
					'rules' => 'trim|required|min_length[4]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->display( 'admin\role\create.tpl' );
			}else{
				if($this->Role->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/role/create'));
				}else{
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\role\create.tpl' );
				}
			}
		}
	}

	public function edit($id)
	{
		//var_dump($_SESSION);die;
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$this->load->library('form_validation');
			$config = array(
				array(
					'field' => 'name',
					'label' => 'Name',
					'rules' => 'trim|required|min_length[4]'
				),
				array(
					'field' => 'description',
					'label' => 'Description',
					'rules' => 'trim|required|min_length[4]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$role = $this->Role->get_entry($id);
			
				$this->smartyci->assign('role', $role);
				$this->smartyci->display( 'admin\role\edit.tpl' );
			}else{
				if($this->Role->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/role/'.$id));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/role/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$role = $this->Role->get_entry($id);
			
			//var_dump($role);die;
			$this->smartyci->assign('role', $role);
			$this->smartyci->display( 'admin\role\detail.tpl' );
		}
	}

}
