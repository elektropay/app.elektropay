<?php
/**
* Products Controller
*
* Manage products, manufacturers and QR Codes
*
* @version 1.0
* @author Richard Rowe.
* @package OpenGateway

*/
require_once(APPPATH."libraries/segment/Segment.php");
class Products extends Controller {

	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();

	}

	function index() {
		$this->navigation->PageTitle('Products');

		$this->load->model('cp/dataset','dataset');

		$columns = array(
						array(
							'name' => 'ID #',
							'sort_column' => 'id',
							'type' => 'id',
							'width' => '10%',
							'filter' => 'customer_id'),
						array(
							'name' => 'First Name',
							'sort_column' => 'customers.first_name',
							'type' => 'text',
							'width' => '15%',
							'filter' => 'first_name'),
						array(
							'name' => 'Last Name',
							'sort_column' => 'customers.last_name',
							'type' => 'text',
							'width' => '20%',
							'filter' => 'last_name'),
						array(
							'name' => 'Email Address',
							'sort_column' => 'email',
							'type' => 'text',
							'width' => '25%',
							'filter' => 'email')
					);

		// handle recurring plans if they exist
		$this->load->model('plan_model');
		$plans = $this->plan_model->GetPlans($this->user->Get('client_id'),array());

		if ($plans) {
			// build $options
			$options = array();
			while (list(,$plan) = each($plans)) {
				$options[$plan['id']] = $plan['name'];
			}

			$columns[] = array(
							'name' => 'Active Plans',
							'type' => 'select',
							'options' => $options,
							'filter' => 'plan_id',
							'width' => '20%'
							);
		}
		else {
			$columns[] = array(
				'name' => 'Plan Link',
				'width' => '15%'
				);
		}

		$columns[] = array(
				'name' => '',
				'width' => '10%'
				);

		// set total rows by hand to reduce database load
		$result = $this->db->select('COUNT(customer_id) AS total_rows',FALSE)->where('active','1')->from('customers')->get();
		$this->dataset->total_rows((int)$result->row()->total_rows);

		$this->dataset->Initialize('customer_model','GetCustomers',$columns);

		// add actions
		$this->dataset->Action('Delete','products/delete');

		$this->load->view(branded_view('cp/products.php'));
	}

	/**
	* Manage notifications
	*
	* Lists active products for managing
	*/
	function add_products()
	{
		$this->navigation->PageTitle('Notifications');

		$this->load->model('cp/dataset','dataset');

		$columns = array(
						array(
							'name' => 'ID #',
							'sort_column' => 'id',
							'type' => 'id',
							'width' => '10%',
							'filter' => 'customer_id'),
						array(
							'name' => 'First Name',
							'sort_column' => 'customers.first_name',
							'type' => 'text',
							'width' => '15%',
							'filter' => 'first_name'),
						array(
							'name' => 'Last Name',
							'sort_column' => 'customers.last_name',
							'type' => 'text',
							'width' => '20%',
							'filter' => 'last_name'),
						array(
							'name' => 'Email Address',
							'sort_column' => 'email',
							'type' => 'text',
							'width' => '25%',
							'filter' => 'email')
					);

		// handle recurring plans if they exist
		$this->load->model('plan_model');
		$plans = $this->plan_model->GetPlans($this->user->Get('client_id'),array());

		if ($plans) {
			// build $options
			$options = array();
			while (list(,$plan) = each($plans)) {
				$options[$plan['id']] = $plan['name'];
			}

			$columns[] = array(
							'name' => 'Active Plans',
							'type' => 'select',
							'options' => $options,
							'filter' => 'plan_id',
							'width' => '20%'
							);
		}
		else {
			$columns[] = array(
				'name' => 'Plan Link',
				'width' => '15%'
				);
		}

		$columns[] = array(
				'name' => '',
				'width' => '10%'
				);

		// set total rows by hand to reduce database load
		$result = $this->db->select('COUNT(customer_id) AS total_rows',FALSE)->where('active','1')->from('customers')->get();
		$this->dataset->total_rows((int)$result->row()->total_rows);

		$this->dataset->Initialize('customer_model','GetCustomers',$columns);

		// add actions
		$this->dataset->Action('Delete','notifications/delete');
		
		$this->load->view(branded_view('cp/products_new.php'));
		
		if(($this->input->post('submit')) && ($this->input->post('submit') == 'Save')){
				//echo '<pre>';print_r($this->session->userdata); die;
				//print_r($_POST); echo '<br/>';echo '<br/>';echo '<br/>';
		$data = array(
					 'client_id' => $this->session->userdata('client_id'),
					 'product_name' => $this->input->post('product_name'),
					 'product_desc' => $this->input->post('product_desc'),
					 'product_short_desc' => $this->input->post('product_short_desc'), 
					 'product_quantity' => $this->input->post('product_quantity'),
					 'product_categories' => json_encode($this->input->post('product_categories')),
					 'product_available_start_date' =>date('Y-m-d h:i:s',strtotime($this->input->post('product_available_start_date'))),
					 'product_available_end_date' => date('Y-m-d h:i:s',strtotime($this->input->post('product_available_end_date'))), 
					 'product_sku' => $this->input->post('product_sku'),
					 'product_price' =>$this->input->post('product_price'),
					 'product_tax_class' => $this->input->post('product_tax_class'),
					 'product_status' => $this->input->post('product_status'),
					 'product_meta_title' => $this->input->post('product_meta_title'),
					 'product_meta_keyword' => $this->input->post('product_meta_keyword'),
					 'product_meta_desc' =>$this->input->post('product_meta_desc')
				);
			$sku =  $this->input->post('product_sku');
			$this->db->where("product_sku", $sku);
			$query = $this->db->get("products");
			 if ($query->num_rows() > 0) {
				$this->session->set_flashdata("error","SKU address already exists.");
				return false;
			}
			else {
				
				
				class_alias('Segment', 'Analytics');
				Analytics::init("iiyvmy0pt0");
				
				Analytics::track(array(
				  "userId" => $this->session->userdata('client_id'),
				  "event" => "Product Add",
				  "properties" => array(
					"product_name" => $data['product_name'],
					"product_price" => $data['product_price']
				  )
				));
				
				
				$insert = $this->db->insert('products', $data);
				redirect('products');
			} 
		}
	}
	function edit_products()
	{
		$this->navigation->PageTitle('Edit Product');
		
		$id = $this->uri->segment(3); 
			$this->load->view(branded_view('cp/products_edit.php'));
		
		if(($this->input->post('submit')) && ($this->input->post('submit') == 'Save')){
				//echo '<pre>';print_r($this->session->userdata); die;
				//print_r($_POST); echo '<br/>';echo '<br/>';echo '<br/>';die;
		$data = array(
					 'client_id' => $this->session->userdata('client_id'),
					 'product_name' => $this->input->post('product_name'),
					 'product_desc' => $this->input->post('product_desc'),
					 'product_short_desc' => $this->input->post('product_short_desc'), 
					 'product_quantity' => $this->input->post('product_quantity'),
					 'product_categories' => json_encode($this->input->post('product_categories')),
					 'product_available_start_date' =>date('Y-m-d h:i:s',strtotime($this->input->post('product_available_start_date'))),
					 'product_available_end_date' => date('Y-m-d h:i:s',strtotime($this->input->post('product_available_end_date'))), 
					 'product_sku' => $this->input->post('product_sku'),
					 'product_price' =>$this->input->post('product_price'),
					 'product_tax_class' => $this->input->post('product_tax_class'),
					 'product_status' => $this->input->post('product_status'),
					 'product_meta_title' => $this->input->post('product_meta_title'),
					 'product_meta_keyword' => $this->input->post('product_meta_keyword'),
					 'product_meta_desc' =>$this->input->post('product_meta_desc')
				);
				
			$id =  $this->uri->segment(3);
			$this->db->where('product_id',$id);
			$this->db->update('products',$data);   
			//$insert = $this->db->insert('products', $data);
			//redirect('products');

		}
	}
    function viewdatacenter()
    {

        $this->load->model('global_model');
        $columan_name = array('product_id', 'client_id', 'product_name', 'product_desc', 'product_short_desc', 'product_categories', 'product_available_start_date', 'product_available_end_date', 'product_sku', 'product_price', 'product_tax_class', 'product_status', 'product_meta_title', 'product_meta_keyword', 'product_meta_desc', 'product_deleted', 'product_created');
        if($_REQUEST['draw'] == 1)
        {
            $viewdata = $this->global_model->get_alldata('products');
        }
        else
        {
            $where = '';
            if($_REQUEST['action'] == 'filter')
            {
                $where = ' WHERE ';
                if($_REQUEST['product_id'] != '')
                {
                    $where .= '`product_id` = '.$_REQUEST['product_id'];
                }
                if($_REQUEST['product_code'] != '')
                {
                   if(str_word_count($where) != 1)
                   {
                       $where .= ' AND ';
                   }
                    $where .= '`product_code` = "'.$_REQUEST['product_code'].'"';
                }
                if($_REQUEST['product_name'] != '')
                {
                    if(str_word_count($where) != 1)
                    {
                        $where .= ' AND ';
                    }
                    $where .= '`product_name` = "'.$_REQUEST['product_name'].'"';
                }

            }
            $order = $_REQUEST[order];
            $col_num = $order[0][column] -1;
            $col_typ = $order[0][dir];
            $sql = "SELECT * FROM products".$where." ORDER BY $columan_name[$col_num] $col_typ";
            $viewdata = $this->global_model->result_sql($sql);

        }



        $iTotalRecords = sizeof($viewdata);
        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);

        $records = array();
        $records["data"] = array();

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;



        $status_list = array(
            array("success" => "Publushed"),
            array("info" => "Not Published"),
            array("danger" => "Deleted")
        );

        $activearray = array( array('classname' => 'danger','label' => 'Inactive'),array('classname' => 'success','label' => 'Active'));

        for($i = $iDisplayStart; $i < $end; $i++) {
            //$status = $status_list[rand(0, 2)];

            $records["data"][] = array(
                '<input type="checkbox" name="id[]" value="'.$viewdata[$i]->product_id.'">',
                $viewdata[$i]->product_id,
                $viewdata[$i]->product_name,
                $viewdata[$i]->product_name,
                $viewdata[$i]->product_price.' $',
                $viewdata[$i]->product_quantity,
				date('m/d/Y',strtotime($viewdata[$i]->product_created)),
                ($viewdata[$i]->product_status == '1') ? 'Published' : 'Not Published',
                '<a href="products/edit_products/'.$viewdata[$i]->product_id.'" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>',
            );
        }

        if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        echo json_encode($records);
    }
    //--------------------------------------------------------------------

}