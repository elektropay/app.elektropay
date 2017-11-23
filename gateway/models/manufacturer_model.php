<?php

class Manufacturer_model extends Model {

	function __construct() {

		parent::__construct();
	}

	function GetManufacturers($client_id, $params) {
		
		if(isset($params['limit'])) unset($params['limit']);
		if(isset($params['offset'])) unset($params['offset']);

		$data = array();
		$this->db->select('*');
		$this->db->from('manufacturers');
		$this->db->where($params);
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			$i=0;
			foreach($query->result() as $row) {

				$data[$i]['id'] = $row->id;
				$data[$i]['name'] = $row->name;
				$i++;
			}
		} else {
			return FALSE;
		}

		return $data;
	}

	function GetManufacturer($client_id, $id) {

		$data = array();
		$this->db->select('*');
		$this->db->from('manufacturers');
		$this->db->where('id', $id);
		$query = $this->db->get();

		if($query->num_rows() > 0) {

			$row = $query->result()[0];
			
			$data['id'] = $row->id;
			$data['name'] = $row->name;
		} else {
			return FALSE;
		}

		return $data;
	}

	function NewManufacturer($client_id, $params) {

		$this->db->insert('manufacturers', $params);

		$response = array(
			'id' 	=> $this->db->insert_id()
		);

		return $response;
	}

	function UpdateManufacturer($client_id, $id, $params) {

		if(!isset($params)) {
			die($this->response->Error(6003));
		}
		    
		$this->db->where('id', $id);
		if ($this->db->update('manufacturers', $params)) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}