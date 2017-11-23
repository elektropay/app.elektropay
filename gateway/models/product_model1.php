<?php

class Product_model extends Model {

	function __construct() {

		parent::__construct();
	}

	function GetProducts($client_id, $params) {
		
		if(isset($params['limit'])) unset($params['limit']);
		if(isset($params['offset'])) unset($params['offset']);

		$data = array();
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('manufacturers', 'manufacturers.id = products.manufacturer_id');
		$this->db->where($params);
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			$i=0;
			foreach($query->result() as $row) {

				$data[$i]['id'] = $row->id;
				$data[$i]['description'] = $row->description;
				$data[$i]['stock'] = $row->stock;
				$data[$i]['cost_price'] = $row->cost_price;
				$data[$i]['sell_price'] = $row->sell_price;
				$data[$i]['manufacturer_id'] = $row->manufacturer_id;
				$data[$i]['manufacturer_name'] = $row->name;
				$i++;
			}
		} else {
			return FALSE;
		}

		return $data;
	}

	function GetProduct($client_id, $id) {

		$data = array();
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id', $id);
		$query = $this->db->get();

		if($query->num_rows() > 0) {

			$row = $query->result()[0];
			
			$data['id'] = $row->id;
			$data['description'] = $row->description;
			$data['stock'] = $row->stock;
			$data['cost_price'] = $row->cost_price;
			$data['sell_price'] = $row->sell_price;
			$data['manufacturer_id'] = $row->manufacturer_id;
		} else {
			return FALSE;
		}

		return $data;
	}

	function NewProduct($client_id, $params) {

		$this->db->insert('products', $params);

		$response = array(
			'id' 	=> $this->db->insert_id()
		);

		return $response;
	}

	function UpdateProduct($client_id, $id, $params) {

		if(!isset($params)) {
			die($this->response->Error(6003));
		}
		    
		$this->db->where('id', $id);
		if ($this->db->update('products', $params)) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}