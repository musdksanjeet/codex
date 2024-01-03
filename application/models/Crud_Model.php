<?php

class Crud_Model extends CI_Model
{
	
	public function saverecords($data)
	{
		$this->db->insert('crud',$data);
		return true;
	}


	public function display_records()
	{
	    $query = $this->db->get('crud');
	    return $query->result_array();
	}

	
}