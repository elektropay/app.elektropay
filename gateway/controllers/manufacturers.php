<?php

class Manufacturers extends Controller {

	function __construct() {

		parent::__construct();
		CPLoader();

		if (!$this->user->LoggedIn() OR ($this->user->Get('client_type_id') != 1 AND $this->user->Get('client_type_id') != 3)) {
			redirect('dashboard');
			die();
		}
	}

	function index() {

		$this->navigation->PageTitle('Manufacturers');

		$this->load->model('cp/dataset','dataset');

		$columns = array(
			array(
				'name' => 'ID #',
				'sort_column' => 'manufacturers.id',
				'type' => 'id',
				'width' => '5%',
				'filter' => 'id'),
			array(
				'name' => 'Name',
				'sort_column' => 'name',
				'type' => 'text',
				'width' => '12%',
				'filter' => 'name'
				)
		);

		$this->dataset->Initialize('manufacturer_model','GetManufacturers',$columns);

		// sidebar
		$this->navigation->SidebarButton('New ManuFacturer','manufacturers/add');

		$this->load->view(branded_view('cp/manufacturers.php'));
	}

	public function add() {
		$this->navigation->PageTitle('New ManuFacturer');

		$data = array(
			'form_title' => 'Add New ManuFacturer',
			'form_action' => 'manufacturers/post/new',
			'action' => 'new'
		);

		$this->load->view(branded_view('cp/manufacturer_form.php'), $data);
	}

	function edit ($id) {
		$this->navigation->PageTitle('Edit ManuFacturer');

		$data = array(
			'form_title' => 'Edit ManuFacturer',
			'form_action' => 'manufacturers/post/edit/'.$id,
			'action' => 'edit'
		);

		$this->load->model('manufacturer_model');
		
		$manufacturer = $this->manufacturer_model->GetManufacturer($this->user->Get('client_id'), $id);

		if($manufacturer) {
			$data['form'] = $manufacturer;
		}

		$this->load->view(branded_view('cp/manufacturer_form.php'), $data);
		
	}

	function post ($action, $id = false) {

		$this->load->library('field_validation');

		if ($this->user->Get('client_type') == '1') {
			$this->notices->SetError('You do not have permission to create a Service Provider account.');
			$error = true;
		}
		elseif ($this->user->Get('client_type') == '3') {
			$this->notices->SetError('You do not have client account creation privileges.');
			$error = true;
		}

		if ($this->input->post('name') == '') {
			$this->notices->SetError('Manufacturer Name is a required field.');
			$error = true;
		}
		
		$this->load->model('manufacturer_model');

		if ($action == 'new') {
			$manufacturers = $this->manufacturer_model->GetManufacturers($this->user->Get('client_id'),array('name' => $this->input->post('name',true)));

			if (is_array($manufacturers)) {
				$this->notices->SetError('ManuFacturer is not unique.');
				$error = true;
			}
		}

		if (isset($error)) {
			if ($action == 'new') {
				redirect('manufacturers/add');
				return false;
			}
			else {
				redirect('manufacturers/edit/' . $id);
				return false;
			}
		}

		$params = array(
			'name' => $this->input->post('name')
		);

		if ($action == 'new') {
			$client = $this->manufacturer_model->NewManufacturer($this->user->Get('client_id'), $params);
			$this->notices->SetNotice('Manufacturer Added');

		} else {
			$this->manufacturer_model->UpdateManufacturer($this->user->Get('client_id'), $id, $params);
			$this->notices->SetNotice('Manufacturer Updated');

		}

		redirect('manufacturers');

		return true;
	}
}