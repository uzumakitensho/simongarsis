<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
		
			// $result_per_page = 5;
			// $config['base_url'] = base_url().'admin/user';
			// $config['total_rows'] = $this->User->count_entries();
			// $config['per_page'] = $result_per_page;
			// $this->pagination->initialize($config);
			// $pagination = $this->pagination->create_links();
			
			$users = $this->User->get_entries();
			
			//var_dump($datatable);die;
			
			// $this->smartyci->assign('pagination', $pagination);
			$this->smartyci->assign('users', $users);
			$this->smartyci->display( 'admin\user\list.tpl' );
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
					'rules' => 'trim|required'
				),
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]',
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
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$this->smartyci->display( 'admin\user\create.tpl' );
			}else{
				if($this->User->insert_entry()){
					$this->session->set_flashdata('success', 'Data added successfuly.');
					redirect(base_url('admin/user/create'));
				}else{
					$this->smartyci->assign('failed', 'Failed add data.');
					$this->smartyci->display( 'admin\user\create.tpl' );
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
					'rules' => 'trim|required|valid_email'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				$user = $this->User->get_entry($id);
			
				//var_dump($user);die;
				$this->smartyci->assign('user', $user);
				$this->smartyci->display( 'admin\user\edit.tpl' );
			}else{
				if($this->User->update_entry()){
					$this->session->set_flashdata('success', 'Data updated successfuly.');
					redirect(base_url('admin/user/'.$id));
				}else{
					$this->session->set_flashdata('failed', 'Data not success updated.');
					redirect(base_url('admin/user/edit/'.$id));
				}
			}
		}
	}

	public function detail($id)
	{
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			$user = $this->User->get_entry($id);
			
			//var_dump($user);die;
			$this->smartyci->assign('user', $user);
			$this->smartyci->display( 'admin\user\detail.tpl' );
		}
	}

	public function delete($id)
	{
		if($this->session->logged_in == false){
			redirect(base_url('admin/login'));
		}else{
			if($this->User->delete_entry($id)){
				$this->session->set_flashdata('success', 'Data deleted successfuly.');
				redirect(base_url('admin/user'));
			}else{
				$this->session->set_flashdata('failed', 'Data not success deleted.');
				redirect(base_url('admin/user'));
			}
		}
	}

}
