<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$students = $this->Student->get_entries();
			
			$this->smartyci->assign('students', $students);
			$this->smartyci->display( 'admin\student\list.tpl' );
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
					'field' => 'nis',
					'label' => 'NIS',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'generation',
					'label' => 'Generation',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]|max_length[12]|is_unique[students.username]',
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
			$roles = $this->Student->get_roles();
			//var_dump($roles);die;
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->assign('roles', $roles);
				$this->smartyci->display( 'admin\student\create.tpl' );
			}else{
				if($this->Student->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/student/create'));
				}else{
					$this->smartyci->assign('roles', $roles);
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\student\create.tpl' );
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
					'field' => 'nis',
					'label' => 'NIS',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'generation',
					'label' => 'Generation',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|valid_email'
				),
				array(
					'field' => 'role',
					'label' => 'Role',
					'rules' => 'trim|required'
				)
			);
			$roles = $this->Student->get_roles();
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$student = $this->Student->get_entry($id);
			
				//var_dump($student);die;
				$this->smartyci->assign('student', $student);
				$this->smartyci->assign('roles', $roles);
				$this->smartyci->display( 'admin\student\edit.tpl' );
			}else{
				if($this->Student->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/student/'.$id));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/student/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			$student = $this->Student->get_entry($id);
			
			//var_dump($student);die;
			$this->smartyci->assign('student', $student);
			$this->smartyci->display( 'admin\student\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_as != 'administrator'){
			redirect(base_url('admin/login'));
		}else{
			if($this->Student->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/student'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/student'));
			}
		}
	}

}
