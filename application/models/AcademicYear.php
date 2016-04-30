<?php

class AcademicYear extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function count_entries()
	{
		return $this->db->count_all_results('academic_years');
	}
	
	public function insert_entry()
	{
		$data = array(
			'year' => $this->input->post('year'),
	    'status' => $this->input->post('status'),
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('academic_years');
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');
		if($this->check($this->input->post('year')))
			return false;

		$data = array(
			'year' => $this->input->post('year'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		return $this->db->update('academic_years', $data, array('id' => $id));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('academic_years', array('id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('academic_years');	
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
		$this->db->from('academic_years');
		$this->db->where('academic_years.id', $id);
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

	public function check($year)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('academic_years');
		$this->db->where('academic_years.year', $year);
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
}