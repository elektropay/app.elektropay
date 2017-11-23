<?php
/**
* Two Step Verification Model
*
* Contains all the methods used to create, update, and delete two_step_login.
*
* @version 1.0
* @author Jitesh Tukadiya
*/
class Two_step_model extends Model
{
	var $cache;

	function __construct()
	{
		parent::__construct();
	}

	function GetCode($client_id) {

		$this->db->select('*');
		$this->db->where('client_id', $client_id);
		$this->db->limit(1);

		$query = $this->db->get('two_step_login');
		if ($query->num_rows() > 0) {

			return $query->row();
		} else {

			return false;
		}
	}

	function InsertCode($code, $client_id) {
		
		$this->db->insert('two_step_login', array(
			'code' => $code,
			'client_id' => $client_id
		));

		return $this->db->insert_id();
	}

	function UpdateCode($code, $client_id) {
		
		$this->db->update('two_step_login', array(
			'code' => $code
		), array(
			'client_id' => $client_id
		));		
	}

	function DeleteCode($client_id) {
		$this->db->where('client_id', $client_id);
		$this->db->delete('two_step_login');
	}
}