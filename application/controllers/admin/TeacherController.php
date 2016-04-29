<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			$teachers = $this->Teacher->get_entries();
			
			$this->smartyci->assign('teachers', $teachers);
			$this->smartyci->display( 'admin\teacher\list.tpl' );
		}
	}

	public function create()
	{
		//var_dump($_SESSION);die;
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			$this->load->library('form_validation');
			$config = array(
				array(
					'field' => 'full_name',
					'label' => 'Full Name',
					'rules' => 'trim|required|min_length[5]'
				),
				array(
					'field' => 'born_date',
					'label' => 'Born Date',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'born_place',
					'label' => 'Born Place',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'gender',
					'label' => 'Gender',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]|max_length[12]|is_unique[teachers.username]',
					'errors' => array(
						'required' => 'You have not provided %s.',
						'is_unique' => 'This %s already exists.'
					),
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|valid_email'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required|min_length[8]',
					'errors' => array(
						'required' => 'You must provide a %s.',
					),
				),
				array(
					'field' => 'confirm_password',
					'label' => 'Password Confirmation',
					'rules' => 'trim|required|matches[password]'
				),
				array(
					'field' => 'role',
					'label' => 'Role',
					'rules' => 'trim|required'
				)
			);
			$roles = $this->Teacher->get_roles();
			//var_dump($roles);die;
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->assign('roles', $roles);
				$this->smartyci->display( 'admin\teacher\create.tpl' );
			}else{
				if($this->Teacher->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/teacher/create'));
				}else{
					$this->smartyci->assign('roles', $roles);
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\teacher\create.tpl' );
				}
			}
		}
	}

	public function edit($id)
	{
		//var_dump($_SESSION);die;
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			$this->load->library('form_validation');
			$config = array(
				array(
					'field' => 'full_name',
					'label' => 'Full Name',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required'
				)
			);
			$roles = $this->Teacher->get_roles();
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$teacher = $this->Teacher->get_entry($id);
			
				//var_dump($teacher);die;
				$this->smartyci->assign('teacher', $teacher);
				$this->smartyci->assign('roles', $roles);
				$this->smartyci->display( 'admin\teacher\edit.tpl' );
			}else{
				if($this->Teacher->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/teacher/'.$id));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/teacher/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			$teacher = $this->Teacher->get_entry($id);
			
			//var_dump($teacher);die;
			$this->smartyci->assign('teacher', $teacher);
			$this->smartyci->display( 'admin\teacher\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			if($this->Teacher->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/teacher'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/teacher'));
			}
		}
	}

}
