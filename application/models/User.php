<?php

class User extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('users');
	}
	
	public function insert_entry()
	{
		$data = array(
	    'username' => $this->input->post('username'), 
	    'password' => md5($this->input->post('password')),
	    'email' => $this->input->post('email'),
	    'full_name' => $this->input->post('full_name'),
	    'role_id' => $this->input->post('role_id'),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('users');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');

		$data = array(
	    'email' => $this->input->post('email'),
	    'full_name' => $this->input->post('full_name'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		//var_dump($data);die;
		return $this->db->update('users', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('users', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('users.*, roles.description, roles.id as role_id');
		$this->db->from('users');
		$this->db->where('users.id !=', $this->session->user_id);
		$this->db->join('roles', 'users.role_id = roles.id');		
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
		$this->db->select('users.*, roles.description, roles.id as role_id');
		$this->db->from('users');
		$this->db->where('users.id', $id);
		$this->db->join('roles', 'users.role_id = roles.id');		
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