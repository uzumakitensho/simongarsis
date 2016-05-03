<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TypeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$types = $this->FType->get_entries();
			
			$this->smartyci->assign('types', $types);
			$this->smartyci->display( 'admin\type\list.tpl' );
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
					'rules' => 'trim|required|min_length[2]|is_unique[types.name]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->display( 'admin\type\create.tpl' );
			}else{
				if($this->FType->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/fault/type/create'));
				}else{
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\type\create.tpl' );
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
					'rules' => 'trim|required|min_length[2]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$type = $this->FType->get_entry($id);
			
				$this->smartyci->assign('type', $type);
				$this->smartyci->display( 'admin\type\edit.tpl' );
			}else{
				if($this->FType->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/fault/type'));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/fault/type/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$type = $this->FType->get_entry($id);
			
			//var_dump($type);die;
			$this->smartyci->assign('type', $type);
			$this->smartyci->display( 'admin\type\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			if($this->FType->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/fault/type'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/fault/type'));
			}
		}
	}

}
