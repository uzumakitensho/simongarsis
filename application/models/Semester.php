<?php

class Semester extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('semesters');
	}
	
	public function insert_entry()
	{
		$data = array(
			'academic_year_id' => $this->input->post('academic_year_id'),
			'code' => $this->input->post('code'),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('semesters');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');

		$data = array(
			'academic_year_id' => $this->input->post('academic_year_id'),
			'code' => $this->input->post('code'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );

    if($this->check($data))
			return false;
		
		return $this->db->update('semesters', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('semesters', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('semesters');	
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
		$this->db->from('semesters');
		$this->db->where('semesters.id', $id);
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

	public function check($data)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('semesters');
		$this->db->where('semesters.academic_year_id', $data['academic_year_id']);
		$this->db->where('semesters.code', $data['code']);
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
}