<?php

class Dashboard_m extends CI_Model {

	public function where($table,$data)
	{
	
		$this->db->where($data);
		$query=$this->db->get($table)->result_array();
			return $query;
	}
	public function updaterecord($table,$id,$updatedata)
	{
		$this->db->where($id);
		$query=$this->db->update($table,$updatedata);
		return $query;
	}

	public function deleterecord($table,$id)
	{
		$this->db->where($id);
		$query=$this->db->delete($table);
		return $query;
	}

}


 ?>