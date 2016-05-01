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
		$year = $this->input->post('year');
		$status = $this->input->post('status');

		$this->db->trans_begin();
		if($this->db->insert('academic_years')){
			$id = $this->get_id($year);
			$ganjil = array(
				'academic_year_id' => $id,
				'code' => 'GNJL',
		    'status' => $status,
	    );
	    $genap = array(
				'academic_year_id' => $id,
				'code' => 'GNP',
		    'status' => $status,
	    );
	    if(!$this->Semester->insert_entry($ganjil)){
	    	$this->db->trans_rollback();
	    	return false;
	    }
	    if(!$this->Semester->insert_entry($genap)){
	    	$this->db->trans_rollback();
	    	return false;
	    }

	    $this->db->trans_commit();
	    return true;
		}else{
			return false;
		}
	}
	
	public function update_entry()
	{
		$id = $this->input->post('id');
		if($this->check($this->input->post('year'),$id))
			return false;

		$data = array(
			'year' => $this->input->post('year'),
	    'status' => $this->input->post('status'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		//var_dump($data);die;
		$status = $this->input->post('status');
		$this->db->trans_begin();
		if($this->db->update('academic_years', $data, array('id' => $id))){
			$jilnep = array(
				'academic_year_id' => $id,
		    'status' => $status,
	    );

	    if(!$this->Semester->update_entry($jilnep)){
	    	$this->db->trans_rollback();
	    	return false;
	    }
	    $this->db->trans_commit();
	    return true;
		}else{
			return false;
		}
	}
	
	public function delete_entry($id)
	{
		$this->db->trans_begin();
		if($this->db->delete('academic_years', array('id' => $id))){
	    if(!$this->Semester->delete_entry($id)){
	    	$this->db->trans_rollback();
	    	return false;
	    }
	    $this->db->trans_commit();
	    return true;
		}else{
			return false;
		}
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('academic_years');	
		$this->db->order_by('year', 'ASC');
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

	public function check($year,$id)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('academic_years');
		$this->db->where('academic_years.year', $year);
		$this->db->where('academic_years.id !=', $id);
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function get_id($year)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('academic_years');
		$this->db->where('academic_years.year', $year);
		$sql = $this->db->get();
		if($sql->num_rows() > 0){
			foreach ($sql->result() as $row){
				$data = $row;
			}
		}
		//var_dump($this->id);die;
		$sql->free_result();
		return $data->id;
	}
	
}