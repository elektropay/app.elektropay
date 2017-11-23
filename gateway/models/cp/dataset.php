<?php
/**
* Dataset Model
*
* Creates dataset tables for the control panel, including jQuery-powered filtering
*
* Table data should be sorted through manually in the view by accessing the public $data array.
* Use TableHead and TableClose to output the surrounding HTML.
* Requires jQuery and appropriate CSS.
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway

*/
class Dataset extends Model {
	var $columns;
	var $base_url;
	var $filters;
	var $filter_values;
	var $rows_per_page;
	var $offset;
	var $data;
	var $actions;
	var $params;
	var $total_rows;
	var $use_total_rows;

    function __construct() {
        parent::__construct();

        $this->rows_per_page = 50;
        $this->use_total_rows = FALSE;
    }

    /**
    * Set Total Rows Manually
    *
    * @param int $total_rows
    *
    * @return void
    */
    function total_rows ($total_rows) {
    	$this->total_rows = $total_rows;

    	return;
    }

    /**
    * Use Total Rows
    *
    * Even when filtering, just use total rows
    *
    */
    function use_total_rows () {
    	$this->use_total_rows = TRUE;
    }

    /**
    * Initialize Dataset
    *
    * Initializes the dataset with data configuration, column specs
    *
    * @param string $data_model The model to load which contains the GetData method
    * @param string $data_function The method in the model to call, should return an associative array
    * @param array $columns Array with each column as an array of settings within it.  Requires "name", "width".  Optional: "sort_column", "type", "filter_name", "field_start_date" and "field_end_date" (for date type), and "options" (for select type).
    * @param string $base_url The URL to use for pagination base.  Optional.
    *
    * @return bool True upon successful initialization
    */
    function Initialize ($data_model, $data_function, $columns, $base_url = false) {
    	$CI =& get_instance();

    	$CI->load->library('asciihex');

    	// prep columns
    	// possible types: "id", "date", "select", "text"
	    foreach ($columns as $column) {
	    	$this->columns[] = array(
	    					'name' => $column['name'],
	    					'sort_column' => isset($column['sort_column']) ? $column['sort_column'] : false,
	    					'width' => isset($column['width']) ? $column['width'] : false,
	    					'type' => isset($column['type']) ? $column['type'] : false,
	    					'filters' => (!isset($column['filter'])) ? false : true,
	    					'filter_name' => (!isset($column['filter'])) ? false : $column['filter'],
	    					'field_start_date' => isset($column['field_start_date']) ? $column['field_start_date'] : '',
	    					'field_end_date' => isset($column['field_end_date']) ? $column['field_end_date'] : '',
	    					'options' => isset($column['options']) ? $column['options'] : array(),
	    				);

	    	// error checking
	    	if (isset($column['type']) and $column['type'] == 'date' and isset($column['filter']) and (!isset($column['field_start_date']) or !isset($column['field_end_date']))) {
	    		die(show_error('Unable to create a "date" filter without field_start_date and field_end_date.'));
	    	}
	    	elseif (isset($column['type']) and $column['type'] == 'select' and !isset($column['options'])) {
	    		die(show_error('Unable to create a "select" filter without options.'));
	    	}

	    	// so do we have filters?
	    	if (isset($column['filter'])) {
	    		$this->filters = true;
	    	}
    	}
    	reset($this->columns);

    	$has_filters = ($CI->uri->segment(4) != '' or (strlen($CI->uri->segment(3)) > 10)) ? '1' : '0';

    	// get filter values
		$this->filter_values = ($has_filters) ? unserialize(base64_decode($CI->asciihex->HexToAscii($CI->uri->segment(3)))) : false;

    	// get data
    	$params = array();

    	$params['limit'] = $this->rows_per_page;
    	$this->offset = ($has_filters) ? $CI->uri->segment(4) : $CI->uri->segment(3);
    	$this->offset = (empty($this->offset)) ? '0' : $this->offset;

    	$params['offset'] = $this->offset;

    	if ($this->filters == true) {
    		foreach ($this->columns as $column) {
    			if ($column['filters'] == true) {
    				if (($column['type'] == 'select' or $column['type'] == 'text' or $column['type'] == 'id') and isset($this->filter_values[$column['filter_name']])) {
    					$filter_params[$column['filter_name']] = $this->filter_values[$column['filter_name']];
    				}
    				elseif ($column['type'] == 'date' and (isset($this->filter_values[$column['filter_name'] . '_start']) or isset($this->filter_values[$column['filter_name'] . '_end']))) {
    					$filter_params[$column['field_start_date']] = (empty($this->filter_values[$column['filter_name'] . '_start'])) ? '2009-01-01' : $this->filter_values[$column['filter_name'] . '_start'];
    					$filter_params[$column['field_end_date']] = (empty($this->filter_values[$column['filter_name'] . '_end'])) ? '2020-12-31' : $this->filter_values[$column['filter_name'] . '_end'];
    				}
    			}
    		}
    		reset($this->columns);
    	}

    	$params = (!empty($filter_params)) ? array_merge($params, $filter_params) : $params;

    	// do an XML export?
    	if ($CI->uri->segment(5) == 'export') {
    		$xml_params = '';
			while (list($name,$value) = each($params)) {
				// commented out - do we want to keep offset/limit?
				if ($name != 'limit' and $name !='offset') {
					$xml_params .= "<$name>$value</$name>";
				}
			}
			reset($params);

			$postfields = '<?xml version="1.0" encoding="UTF-8"?>
<request>
	<authentication>
		<api_id>' . $CI->user->Get('api_id') . '</api_id>
		<secret_key>' . $CI->user->Get('secret_key') . '</secret_key>
	</authentication>
	<type>' . $data_function . '</type>
' . $xml_params . '
</request>';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_URL,base_url() . 'api');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

			$result = curl_exec($ch);
			curl_close($ch);

			header("Content-type: text/xml");
			header("Content-length: " . strlen($result));
			header('Content-Disposition: attachment;filename="export.xml"');
			echo $result;
			die();
    	}

    	$CI->load->model($data_model,'data_model');

    	$this->data = $CI->data_model->$data_function($CI->user->Get('client_id'),$params);

    	if ((empty($this->total_rows) or !empty($filter_params)) and $this->use_total_rows != TRUE) {
	    	unset($params);
	    	$params = array();

			$params = (!empty($filter_params)) ? array_merge($params, $filter_params) : $params;

			// store in a public variable
			$this->params = $params;

	    	$total_rows = count($CI->data_model->$data_function($CI->user->Get('client_id'),$params));

	    	$this->total_rows = $total_rows;
	    }
	    else {
	    	unset($params);
	    	$params = array();

			$params = (!empty($filter_params)) ? array_merge($params, $filter_params) : $params;

			// store in a public variable
			$this->params = $params;
	    }

    	// set $url_filters if they exist
    	$url_filters = (!empty($this->filter_values)) ? '/' . $CI->asciihex->AsciiToHex(base64_encode(serialize($this->filter_values))) . '/' : '';
		$this->base_url = ($base_url == false) ? site_url($CI->router->fetch_class() . '/' . $CI->router->fetch_method() . $url_filters) : $base_url;

		$config['base_url'] = $this->base_url;
		$config['total_rows'] = $this->total_rows;
		$config['per_page'] = $this->rows_per_page;
		$config['uri_segment'] = ($has_filters) ? 4 : 3;
		$config['num_links'] = '10';

		$CI->load->library('pagination');
		$CI->pagination->initialize($config);

		return true;
    }

    /**
    * Add Action
    *
    * Adds an action button the dataset
    * When clicked, it creates an ASCII'd, base64_encoded, serialized array of all ID's in the checkboxes of the dataset
    *
    * @param string $name The name of the action for the button
    * @param string $link The link (e.g. /customers/delete) to pass the variable to (e.g. /customers/delete/39f32432849340923849234)
    * @return bool True upon success
    */
    function Action ($name, $link) {
    	$this->actions[] = array(
    							'name' => $name,
    							'link' => $link
    						);

    	return true;
    }

    /**
    * Output Table Head
    *
    * Returns the header of the table, including pagination/buttons bar, and form beginning
    *
    * @return string HTML output
    */
    function TableHead () {
    	$CI =& get_instance();

    	$output = '';

    	$output .= '<form id="dataset_form" method="get" action="' . $this->base_url . '">';
    	$output .= '<div class="hidden paginate">';
    	$output .= $CI->pagination->create_links();
        $output .= '</div>';
    	$actions = '';
    	$i = 1;

    	if ($this->filters == true) {
                $output .= '<div class="filter hidden">';
                $output .= '<div class="right"><div class="item"><div class="control" id="dataset_export_button"><span class="btn btn-sm btn-circle filter-label" type="submit" name="" dropdown-toggle" data-toggle="dropdown" value="Export" /><i class="fa fa-reply"></i> Export</span></div></div>';
	        $output .= '<div class="item separator"></div>'; 
                $output .= '<div class="item">'; 
                $output .= '<div class="control" id="create">'; 
                $output .= '<span class="btn btn-sm btn-circle filter-label"><i class="fa fa-print"></i> Print</span>'; 
                $output .= '</div></div>'; 
                $output .= '</div><!--right-->'; 
    		$output .= '<div class="left">';
                $output .= '<div class="item">';
                $output .= '<div class="control filter-button">' . $actions . '<span class="btn btn-sm btn-circle filter-label"  data-container="body" data-toggle="popover" data-placement="bottom" id="popover-view" name="" value="Filters" /><span class="fa fa-cog"></span> Filters</span><a href="#" id="reset_filters" class="remove" type="reset" name="Remove" value="Remove" /> Remove</a></div></div></div>';        	 
	        $output .= '</div><!--filter-->';
	        $output .= '<div id="popover-view" class="popover-view" style="display:none; left: 190px; top: 97px;">
<div class="arrow below"></div>

<div class="inner">
    <div class="gradient"></div>

    <div class="col-lg-12 clearfix"><div class="filter-view"><div class="header">
        <h2>Filters</h2>
        
        <div class="buttons">
            <a href="#" class="left grey clear"><span>Clear</span></a>
            <a href="#" class="right blue filter"><span>Done</span></a>
        </div>
    </div>
    
    <div class="inner-box">

        <div class="filters"><div class="row" name="captured">
  
    <label>
        <input class="enabled" type="checkbox">
        <span>Created date</span>
    </label>
  
    <div class="row-content disabled" style="display: none;">
    <span class="date-filter"><!--Date created-->
<select class="multi-field-select">
  <option value="last">is in the last</option>
  <option value="bt">is between</option>
  <option value="eq">is equal to</option>
  <option value="gt">is after</option>
  <option value="lt">is before</option>
</select>

<span class="single">
  <input type="text" name="single" class="units"> 
  <select class="last">
    <option value="days">days</option>
    <option value="months">months</option>
  </select>
  <span class="single_error filter_error error">&nbsp;</span>
</span>

<span class="double" style="display: none;">
  <input type="text" name="double1" class="timestamp hasDatepicker" id="dp1437702424850"><span class="double1_error filter_error error"></span>
  <span class="and">and</span>
  <input type="text" name="double2" class="timestamp hasDatepicker" id="dp1437702424851"><span class="double2_error filter_error error"></span>
</span>
</span></div>
</div><div class="row" name="captured">
  
    <label>
        <input class="enabled" type="checkbox">
        <span>Subscription</span>
    </label>
  
    <div class="row-content disabled" style="display: none;">
    <span class="boolean-or-collection-filter"><!--Customer-->
<select class="multi-field-select">
  <option value="true">has a subscription</option>
  <option value="false">does not have a subscription</option>
  <option value="plan">currently subscribed to plan: </option>
</select>

<span class="loading" style="display: none;">
Loading plans...
</span>
<span class="plans-select" style="display: none;">
  <select class="plans" style=""></select>
</span>
</span></div>
</div><div class="row" name="captured">
  
    <label>
        <input class="enabled" type="checkbox">
        <span>Card</span>
    </label>
  
    <div class="row-content disabled" style="display: none;">
    <span class="singular-filter"><div class="dropdown-widget-view singular_filter_item"><select name="singular_filter_item" class="field">
  

  
  	
  	  <option value="true">has an active card</option>
  	
  	  <option value="false">does not have an active card</option>
  	
  
</select></div></span></div>
</div><div class="row" name="captured">
  
    <label>
        <input class="enabled" type="checkbox">
        <span>Discount</span>
    </label>
  
    <div class="row-content disabled" style="display: none;">
    <span class="boolean-or-collection-filter"><!--Customer-->
<select class="multi-field-select">
  <option value="true">has a discount</option>
  <option value="false">does not have a discount</option>
  <option value="coupon">has redeemed coupon: </option>
</select>

<span class="loading" style="display: none;">
Loading coupons...
</span>
<span class="coupons-select" style="display: none;">
  <select class="coupons" style=""></select>
</span>
</span></div>
</div><div class="row" name="captured">
  
    <label>
        <input class="enabled" type="checkbox">
        <span>Delinquent</span>
    </label>
  
    <div class="row-content disabled" style="display: none;">
    <span class="singular-filter"><div class="dropdown-widget-view singular_filter_item"><select name="singular_filter_item" class="field">
  

  
  	
  	  <option value="true">is delinquent</option>
  	
  	  <option value="false">is paid up</option>
  </select></div></span></div>
</div></div></div></div></div></div></div>';
         }

    	// build action buttons
    	if (!empty($this->actions)) {
    		$actions .= 'With selected: ';
    		while (list(,$action) = each($this->actions)) {
    			$actions .= '<button type="submit" class="action action_button" rel="' . site_url($action['link']) . '" name="action_' . $i . '" value="' . $action['name'] . '" /></button>&nbsp;';
    			$i++;
    		}
    	}


    	$output .= '<div class="dataTable">
    				<table id="example" class="dataTable table table-reponsive focus-on display no-footer" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
    				
<thead>
<tr>';

    	// add empty header cell if we have checkboxes
    	if (!empty($this->actions)) {
    		$output .= '<th style="width:5%">&nbsp;</th>';
    	}

    	// add column headers
    	while (list($key,$column) = each($this->columns)) {
   			$output .= '<th class="" style="width:' . $column['width'] . '">' . $column['name'] . '<i class="icon-budicon-462 sort-arrow hidden"></i></th>';
    	}
    	reset($this->columns);

    	$output .= '</tr></thead>';//<tbody>  by comment hemal

    	if ($this->filters == true) {

    		$output .= '<div class="hidden" style="display:none;">';

    		// add check_all/uncheck_all checkbox
	    	if (!empty($this->actions)) {
	    		$output .= '<div class="hidden" style="width:5%"><input type="checkbox" name="check_all" id="check_all" value="check_all" /></div>';
	    	}

    		while (list(,$column) = each($this->columns)) {
				if ($column['filters'] == false) {

					$output .= '<ul class="dropdown-menu" role="menu">';

					if ($column['type'] == 'text') {
						$value = (isset($this->filter_values[$column['filter_name']])) ? $this->filter_values[$column['filter_name']] : '';
						$output .= '<li><input type="checkbox" class="text" name="' . $column['filter_name'] . '" value="' . $value . '" /></li>';
					}
					elseif ($column['type'] == 'id') {
						$value = (isset($this->filter_values[$column['filter_name']])) ? $this->filter_values[$column['filter_name']] : '';
						$output .= '<li><input type="checkbox" class="text id" name="' . $column['filter_name'] . '" value="' . $value . '" /></li>';
					}
					elseif ($column['type'] == 'date') {
						$value = (isset($this->filter_values[$column['filter_name'] . '_start'])) ? $this->filter_values[$column['filter_name'] . '_start'] : '';
						$output .= '<li><input type="checkbox" class="text date_start datepick" name="' . $column['filter_name'] . '_start" value="' . $value . '" /></li>';

						$value = (isset($this->filter_values[$column['filter_name'] . '_end'])) ? $this->filter_values[$column['filter_name'] . '_end'] : '';
						$output .= '<li><input type="checkbox" class="text date_end datepick" name="' . $column['filter_name'] . '_end" value="' . $value . '" /></li>';
					}
					elseif ($column['type'] == 'select') {
						$output .= '<li><select name="' . $column['filter_name'] . '"><option value=""></option>';

						while (list($value,$name) = each($column['options'])) {
							$selected = (isset($this->filter_values[$column['filter_name']]) and $this->filter_values[$column['filter_name']] == $value) ? ' selected="selected"' : '';
							$output .= '<option value="' . $value . '"' . $selected . '>' . $name . '</option>';
						}

						$output .= '</select></li>';
                                                $output .= '</div>';
					}

					$output .= '</ul>';
                                        
				}
				else {
					$output .= '';
				}
    		}

    		$output .= '</tr>';
    	}

    	return $output;
    }

    /**
    * Output Table Close
    *
    * Returns the HTML for the table closure, including bottom pagination div and form ending
    *
    * @return string HTML output
    */
    function TableClose () {
    	$CI =& get_instance();

    	$output = '</table></div>';
	$output .= '<div class="paginate hidden" id="orders-datatable_paginate">';
    	$output .= $CI->pagination->create_links();
	$output .= '<a tabindex="0" class=""></a></div>';
    	$output .= '</form>
<span class="hidden" style="text-transform:uppercase;font-weight:500;">' . $CI->router->fetch_class() . '</span>
					<div class="hidden" id="method">' . $CI->router->fetch_method() . '</div>
					<div class="hidden" id="page">' . $this->offset . '</div>';

    	return $output;
    }
}