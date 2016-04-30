<?php

class Student extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('students');
	}
	
	public function insert_entry()
	{
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'born_date' => $this->input->post('born_date'),
			'born_place' => $this->input->post('born_place'),
			'gender' => $this->input->post('gender'),
			'telephone' => $this->input->post('telephone'),
			'address' => $this->input->post('address'),
			'nis' => $this->input->post('nis'),
			'nisn' => $this->input->post('nisn'),
			'generation' => $this->input->post('generation'),
			'email' => $this->input->post('email'),
	    'username' => $this->input->post('username'), 
	    'password' => md5($this->input->post('password')),
	    'role_id' => $this->input->post('role'),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('students');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');

		$data = array(
	    'full_name' => $this->input->post('full_name'),
			'born_date' => $this->input->post('born_date'),
			'born_place' => $this->input->post('born_place'),
			'gender' => $this->input->post('gender'),
			'telephone' => $this->input->post('telephone'),
			'address' => $this->input->post('address'),
			'nis' => $this->input->post('nis'),
			'nisn' => $this->input->post('nisn'),
			'generation' => $this->input->post('generation'),
			'email' => $this->input->post('email'),
	    'role_id' => $this->input->post('role'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		return $this->db->update('students', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('students', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('students.*, roles.description, roles.id as role_id');
		$this->db->from('students');
		$this->db->join('roles', 'students.role_id = roles.id');		
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			foreach ($sql->result() as $row){
				$data[] = $row;
			}
		}
		$sql->free_result();
		return $data;
	}

	public function get_entry($id)
	{
		$data = array();
		$this->db->select('students.*, roles.description, roles.id as role_id');
		$this->db->from('students');
		$this->db->where('students.id', $id);
		$this->db->join('roles', 'students.role_id = roles.id');		
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			foreach ($sql->result() as $row){
				$data = $row;
			}
		}
		//var_dump($this->id);die;
		$sql->free_result();
		return $data;
	}

	public function get_roles()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('roles');
		$this->db->where('roles.id', 7);
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			foreach ($sql->result() as $row){
				$data = $row;
			}
		}
		//var_dump($this->id);die;
		$sql->free_result();
		return $data;
	}
	
}