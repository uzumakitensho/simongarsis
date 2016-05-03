<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$categories = $this->Category->get_entries();
			
			$this->smartyci->assign('categories', $categories);
			$this->smartyci->display( 'admin\category\list.tpl' );
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
					'rules' => 'trim|required|min_length[2]|is_unique[categories.name]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->display( 'admin\category\create.tpl' );
			}else{
				if($this->Category->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/fault/category/create'));
				}else{
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\category\create.tpl' );
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
				$category = $this->Category->get_entry($id);
			
				$this->smartyci->assign('category', $category);
				$this->smartyci->display( 'admin\category\edit.tpl' );
			}else{
				if($this->Category->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/fault/category'));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/fault/category/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$category = $this->Category->get_entry($id);
			
			//var_dump($category);die;
			$this->smartyci->assign('category', $category);
			$this->smartyci->display( 'admin\category\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			if($this->Category->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/fault/category'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/fault/category'));
			}
		}
	}

}
