<?php

class Products extends Controller {

	function __construct() {

		parent::__construct();
		CPLoader();

		if (!$this->user->LoggedIn() OR ($this->user->Get('client_type_id') != 1 AND $this->user->Get('client_type_id') != 3)) {
			redirect('dashboard');
			die();
		}
	}

	function index() {

		$this->navigation->PageTitle('Products');

		$this->load->model('cp/dataset','dataset');

		$columns = array(
			array(
				'name' => 'ID #',
				'sort_column' => 'product.id',
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

		$this->dataset->Initialize('product_model','GetProducts',$columns);

		// sidebar
		$this->navigation->SidebarButton('New Product','products/add');

		$this->load->view(branded_view('cp/products.php'));
	}

	public function add() {
		$this->navigation->PageTitle('New Product');

		$data = array(
			'form_title' => 'Add New Product',
			'form_action' => 'products/post/new',
			'action' => 'new'
		);

		$this->load->view(branded_view('cp/product_form.php'), $data);
	}

	function edit ($id) {
		$this->navigation->PageTitle('Edit Product');

		$data = array(
			'form_title' => 'Edit Product',
			'form_action' => 'products/post/edit/'.$id,
			'action' => 'edit'
		);

		$this->load->model('product_model');
		
		$product = $this->product_model->GetProducts($this->user->Get('client_id'), $id);

		if($product) {
			$data['form'] = $product;
		}

		$this->load->view(branded_view('cp/product_form.php'), $data);
		
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
			$this->notices->SetError('A Product Name is a required field.');
			$error = true;
		}
		
		$this->load->model('product_model');

		if ($action == 'new') {
			$manufacturers = $this->product_model->GetProducts($this->user->Get('client_id'),array('name' => $this->input->post('name',true)));

			if (is_array($products)) {
				$this->notices->SetError('Your Product is not unique.');
				$error = true;
			}
		}

		if (isset($error)) {
			if ($action == 'new') {
				redirect('products/add');
				return false;
			}
			else {
				redirect('products/edit/' . $id);
				return false;
			}
		}

		$params = array(
			'name' => $this->input->post('name')
		);

		if ($action == 'new') {
			$client = $this->product_model->NewProduct($this->user->Get('client_id'), $params);
			$this->notices->SetNotice('Product Has Been Added');

		} else {
			$this->product_model->UpdateProduct($this->user->Get('client_id'), $id, $params);
			$this->notices->SetNotice('Your Product has Been Updated');

		}

		redirect('products');

		return true;
	}
}