<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$classes = $this->Classe->get_entries();
			
			$this->smartyci->assign('classes', $classes);
			$this->smartyci->display( 'admin\class\list.tpl' );
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
					'rules' => 'trim|required|min_length[2]|is_unique[classes.name]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->display( 'admin\class\create.tpl' );
			}else{
				if($this->Classe->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/class/create'));
				}else{
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\class\create.tpl' );
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
				$class = $this->Classe->get_entry($id);
			
				$this->smartyci->assign('class', $class);
				$this->smartyci->display( 'admin\class\edit.tpl' );
			}else{
				if($this->Classe->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/class'));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/class/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$class = $this->Classe->get_entry($id);
			
			//var_dump($class);die;
			$this->smartyci->assign('class', $class);
			$this->smartyci->display( 'admin\class\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			if($this->Classe->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/class'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/class'));
			}
		}
	}

}
