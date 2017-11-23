<?php

class global_model extends Model {
	
	function __construct()
	{
		parent::__construct();
	}
	function add_record($tablename,$data) 
	{
		$this->db->insert($tablename, $data);
		return ;
	}
	function add_record_id($tablename,$data) 
	{
		$this->db->insert($tablename, $data);
		$id = mysql_insert_id();
		return $id;
	}
	function get_alldata($tablename)
	{
		$q = $this->db->select('*')
		     ->from($tablename);			 
		$res = $q->get()->result();		
		return $res;
	}
	function get_data($rqdata,$tablename,$fieldname,$value)
	{
		$q = $this->db->select($rqdata)
		     ->from($tablename)
			 ->where($fieldname,$value);
		$res = $q->get()->result();		
		return $res;
	}
	function update_record($tablename,$data,$id,$value) 
	{
		$this->db->update($tablename, $data, array($id => $value));				
	}
	function result_sql($sql)
	{
		
		$query = $this->db->query($sql);
		$result = $query->result();	
		return $result;
	}
	function delete_row($tablename,$id,$value)
	{
						
		$this->db->where($id ,$value);
		$this->db->delete($tablename);
		if($this->db->affected_rows () == 0)
		{
			return false;
		}
		return true;
	}
}