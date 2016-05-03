<?php

class FType extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('types');
	}
	
	public function insert_entry()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'short_name' => $this->input->post('short_name'),
			'description' => $this->input->post('description'),
			'category_id' => $this->input->post('category_id'),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('types');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');

		$data = array(
			'name' => $this->input->post('name'),
			'short_name' => $this->input->post('short_name'),
			'description' => $this->input->post('description'),
			'category_id' => $this->input->post('category_id'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		return $this->db->update('types', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('types', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('types.*, categories.name as category_name, categories.short_name as category_short_name, categories.description as category_description, categories.status as category_status');
		$this->db->from('types');
		$this->db->join('categories', 'types.category_id = categories.id');		
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
		$this->db->select('types.*, categories.name as category_name, categories.short_name as category_short_name, categories.description as category_description, categories.status as category_status');
		$this->db->from('types');
		$this->db->where('types.id', $id);
		$this->db->join('categories', 'types.category_id = categories.id');		
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