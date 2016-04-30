<?php

class Course extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('courses');
	}
	
	public function insert_entry()
	{
		$data = array(
			'name' => strtoupper($this->input->post('name')),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('courses');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');
		if($this->check(strtoupper($this->input->post('name'))))
			return false;

		$data = array(
			'name' => strtoupper($this->input->post('name')),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		return $this->db->update('courses', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('courses', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('courses');	
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
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where('courses.id', $id);
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

	public function check($name)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where('courses.name', $name);
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
}