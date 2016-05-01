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
	
	public function insert_entry($datas)
	{
		//var_dump($datas['academic_year_id']);die;
		$data = array(
			'academic_year_id' => $datas['academic_year_id'],
			'code' => $datas['code'],
	    'status' => $datas['status'],
	    'created_at' => date('Y-m-d H:i:s'),
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		$this->db->set($data);
		return $this->db->insert('semesters');
	}
	
	public function update_entry($datas)
	{
		//var_dump($datas['academic_year_id']);die;
		$data = array(
	    'status' => $datas['status'],
	    'updated_at' => date('Y-m-d H:i:s')
    );
		
		return $this->db->update('semesters', $data, array('academic_year_id' => $datas['academic_year_id']));
	}
	
	public function delete_entry($id)
	{
		return $this->db->delete('semesters', array('academic_year_id' => $id));
	}

	public function get_entries()
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('semesters');
		$this->db->join('academic_years', 'semesters.academic_year_id = academic_years.id');
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
		$this->db->join('academic_years', 'semesters.academic_year_id = academic_years.id');
		$this->db->order_by('academic_years.year', 'ASC');
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
		//var_dump($data['academic_year_id']);die;
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