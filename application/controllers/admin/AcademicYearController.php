<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcademicYearController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$years = $this->AcademicYear->get_entries();
			
			$this->smartyci->assign('years', $years);
			$this->smartyci->display( 'admin\year\list.tpl' );
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
					'rules' => 'trim|required|min_length[2]|is_unique[academic_years.name]'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->display( 'admin\year\create.tpl' );
			}else{
				if($this->AcademicYear->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/year/create'));
				}else{
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\year\create.tpl' );
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
				$year = $this->AcademicYear->get_entry($id);
			
				$this->smartyci->assign('year', $year);
				$this->smartyci->display( 'admin\year\edit.tpl' );
			}else{
				if($this->AcademicYear->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/year'));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/year/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$year = $this->AcademicYear->get_entry($id);
			
			//var_dump($year);die;
			$this->smartyci->assign('year', $year);
			$this->smartyci->display( 'admin\year\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			if($this->AcademicYear->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/year'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/year'));
			}
		}
	}

}
