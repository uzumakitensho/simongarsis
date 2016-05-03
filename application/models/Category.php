<?php

class Category extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('categories');
	}
	
	public function insert_entry()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'short_name' => $this->input->post('short_name'),
			'description' => $this->input->post('description'),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('categories');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');

		$data = array(
			'name' => $this->input->post('name'),
			'short_name' => $this->input->post('short_name'),
			'description' => $this->input->post('description'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		return $this->db->update('categories', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('categories', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('categories');		
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
		$this->db->from('categories');
		$this->db->where('categories.id', $id);		
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