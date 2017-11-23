<?=$this->load->view(branded_view('cp/header'));?>
<link href="<?=branded_include('css/global/plugins/uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css" media="screen" />
<?php //print_r($product_data); die; 

		$id = $this->uri->segment(3);

		$this->db->select('*');     
		$this->db->from('products');  
		$this->db->where('product_id',$id); 
		 //$this->db->where('bStatus','1'); 
		$product_data = $this->db->get()->row();
		$product_name = $product_data->product_name; 
		$product_desc = $product_data->product_desc; 
		$product_short_desc = $product_data->product_short_desc; 
		$product_quantity = $product_data->product_quantity; 
		$product_available_start_date = date('m/d/Y',strtotime($product_data->product_available_start_date)); 
		$product_available_end_date = date('m/d/Y',strtotime($product_data->product_available_end_date)); 
		$product_sku = $product_data->product_sku; 
		$product_price = $product_data->product_price; 
		$product_tax_class = $product_data->product_tax_class;
		$product_status = $product_data->product_status;
		$product_meta_title = $product_data->product_meta_title;
		$product_meta_keyword = $product_data->product_meta_keyword;
		$product_meta_desc  = $product_data->product_meta_desc;
		$res = json_decode($product_data->product_categories,true);
		
		$mens = $res['mens'];
		$sports = $res['fb_shirts'];
		$brands = $res['brands'];
		$checked = '';
		if(!empty($mens) && is_array($mens)){ 
			 $checked1 = 'checked="checked"';
		}
		if(!empty($sports) && is_array($sports)){ 
			 $checked2 = 'checked="checked"';
		}
		if(!empty($brands) && is_array($brands)){ 
			 $checked3 = 'checked="checked"';
		}
?>	
    <div class="row">
    <div class="col-md-12">
    <form class="form-horizontal form-row-seperated" action="" method="post">
    <div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-shopping-cart"></i>Test Product
        </div>
        <div class="actions btn-set">
            <a type="button" name="back" class="btn default"><i class="fa fa-angle-left"></i> Back</a>
            <button class="btn default"><i class="fa fa-reply"></i> Reset</button>
            <!--<button class="btn green"><i class="fa fa-check"></i> Save</button>-->
			<input type="submit" class="btn green" name="submit"  value="Save" />
            <button class="btn green"><i class="fa fa-check-circle"></i> Save & Continue Edit</button>
            <div class="btn-group">
                <a class="btn yellow" href="#" data-toggle="dropdown">
                    <i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#">
                            Duplicate </a>
                    </li>
                    <li>
                        <a href="#">
                            Delete </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#">
                            Print </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
    <div class="tabbable">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_general" data-toggle="tab">
                General </a>
        </li>
        <li>
            <a href="#tab_meta" data-toggle="tab">
                Meta </a>
        </li>
        <li>
            <a href="#tab_images" data-toggle="tab">
                Images </a>
        </li>
        <li>
            <a href="#tab_reviews" data-toggle="tab">
                Reviews <span class="badge badge-success">
											3 </span>
            </a>
        </li>
        <li>
            <a href="#tab_history" data-toggle="tab">
                History </a>
        </li>
    </ul>
    <div class="tab-content no-space">
    <div class="tab-pane active" id="tab_general">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Name: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="product_name" placeholder="" value="<?php echo $product_name; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Description: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <textarea class="form-control" name="product_desc"><?php echo $product_desc; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Short Description: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <textarea class="form-control" name="product_short_desc"><?php echo $product_short_desc; ?></textarea>
														<span class="help-block">
														shown in product listing </span>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-2 control-label">Quantity: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
					<input type="text" class="form-control" name="product_quantity" placeholder="" value="<?php echo $product_quantity; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Categories: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <div class="form-control height-auto">
                        <div class="scroller" style="height:275px;" data-always-visible="1">
                            <ul class="list-unstyled">
                                <li>
                                    <label><input type="checkbox" name="product_categories[mens]" value="1" <?php echo $checked1; ?>>Mens</label>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens][1]" value="1" <?php if(($mens[1] == '1') && isset($mens[1])) { echo 'checked="checked"';} ?>>Footwear</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens][2]" value="2" <?php if(($mens[2] == '2') && isset($mens[2])) { echo 'checked="checked"';} ?>>Clothing</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens][3]" value="3" <?php if(($mens[3] == '3') && isset($mens[3])) { echo 'checked="checked"';} ?>>Accessories</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens][4]" value="4" <?php if(($mens[4] == '4') && isset($mens[4])) { echo 'checked="checked"';} ?>>Fashion Outlet</label>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <label><input type="checkbox" name="product_categories[fb_shirts]" value="1" <?php echo $checked2; ?>>Football Shirts</label>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label><input type="checkbox" name="product_categories[fb_shirts][1]" value="1" <?php if(($sports[1] == '1') && isset($sports[1])) { echo 'checked="checked"';} ?>>Premier League</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[fb_shirts][2]" value="2" <?php if(($sports[2] == '2') && isset($sports[2])) { echo 'checked="checked"';} ?>>Football League</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[fb_shirts][3]" value="3" <?php if(($sports[3] == '3') && isset($sports[3])) { echo 'checked="checked"';} ?>>Serie A</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[fb_shirts][4]" value="4" <?php if(($sports[4] == '4') && isset($sports[4])) { echo 'checked="checked"';} ?>>Bundesliga</label>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <label><input type="checkbox" name="product_categories[brands]" value="1" <?php echo $checked3; ?>>Brands</label>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brands][1]" value="1" <?php if(($brands[1] == '1') && isset($brands[1])) { echo 'checked="checked"';} ?>>Adidas</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brands][2]" value="2" <?php if(($brands[2] == '2') && isset($brands[2])) { echo 'checked="checked"';} ?>>Nike</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brands][3]" value="3" <?php if(($brands[3] == '3') && isset($brands[3])) { echo 'checked="checked"';} ?>>Airwalk</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brands][4]" value="4" <?php if(($brands[4] == '4') && isset($brands[4])) { echo 'checked="checked"';} ?>>Kangol</label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
														<span class="help-block">
														select one or more categories </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Available Date: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                        <input type="text" class="form-control" name="product_available_start_date" value="<?php echo $product_available_start_date; ?>">
															<span class="input-group-addon">
															to </span>
                        <input type="text" class="form-control" name="product_available_end_date"  value="<?php echo $product_available_end_date; ?>">
                    </div>
														<span class="help-block">
														availability daterange. </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">SKU: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="product_sku" placeholder="" value="<?php echo $product_sku; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Price: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $product_price; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tax Class: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="product_tax_class">
                        <option value="">Select...</option>
                        <option value="1" <?php if($product_tax_class == '1') { echo 'selected = "selected"'; } ?>>None</option>
                        <option value="2" <?php if($product_tax_class == '2') { echo 'selected = "selected"'; } ?>>Taxable Goods</option>
                        <option value="3" <?php if($product_tax_class == '3') { echo 'selected = "selected"'; } ?>>Shipping</option>
                        <option value="4" <?php if($product_tax_class == '4') { echo 'selected = "selected"'; } ?>>USA</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Status: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="product_status">
                        <option value="">Select...</option>
                        <option value="1" <?php if($product_status == '1') { echo 'selected = "selected"'; } ?>>Published</option>
                        <option value="0" <?php if($product_status == '0') { echo 'selected = "selected"'; } ?>>Not Published</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab_meta">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Meta Title:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control maxlength-handler" name="product_meta_title" maxlength="100" placeholder="" value="<?php echo $product_meta_title; ?>">
														<span class="help-block">
														max 100 chars </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Meta Keywords:</label>
                <div class="col-md-10">
                    <textarea class="form-control maxlength-handler" rows="8" name="product_meta_keyword" maxlength="1000"><?php echo $product_meta_keyword; ?></textarea>
														<span class="help-block">
														max 1000 chars </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Meta Description:</label>
                <div class="col-md-10">
                    <textarea class="form-control maxlength-handler" rows="8" name="product_meta_description" maxlength="255"><?php echo $product_meta_desc; ?></textarea>
														<span class="help-block">
														max 255 chars </span>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab_images">
        <div class="alert alert-success margin-bottom-10">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
        </div>
        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
            <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
                <i class="fa fa-plus"></i> Select Files </a>
            <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
                <i class="fa fa-share"></i> Upload Files </a>
        </div>
        <div class="row">
            <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
            <tr role="row" class="heading">
                <th width="8%">
                    Image
                </th>
                <th width="25%">
                    Label
                </th>
                <th width="8%">
                    Sort Order
                </th>
                <th width="10%">
                    Base Image
                </th>
                <th width="10%">
                    Small Image
                </th>
                <th width="10%">
                    Thumbnail
                </th>
                <th width="10%">
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="../../assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                        <img class="img-responsive" src="../../assets/admin/pages/media/works/img1.jpg" alt="">
                    </a>
                </td>
                <td>
                    <input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
                </td>
                <td>
                    <input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][1][image_type]" value="1">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][1][image_type]" value="2">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][1][image_type]" value="3" checked>
                    </label>
                </td>
                <td>
                    <a href="javascript:;" class="btn default btn-sm">
                        <i class="fa fa-times"></i> Remove </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../../assets/admin/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
                        <img class="img-responsive" src="../../assets/admin/pages/media/works/img2.jpg" alt="">
                    </a>
                </td>
                <td>
                    <input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
                </td>
                <td>
                    <input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][2][image_type]" value="1">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][2][image_type]" value="2" checked>
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][2][image_type]" value="3">
                    </label>
                </td>
                <td>
                    <a href="javascript:;" class="btn default btn-sm">
                        <i class="fa fa-times"></i> Remove </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../../assets/admin/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
                        <img class="img-responsive" src="../../assets/admin/pages/media/works/img3.jpg" alt="">
                    </a>
                </td>
                <td>
                    <input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
                </td>
                <td>
                    <input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][3][image_type]" value="1" checked>
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][3][image_type]" value="2">
                    </label>
                </td>
                <td>
                    <label>
                        <input type="radio" name="product[images][3][image_type]" value="3">
                    </label>
                </td>
                <td>
                    <a href="javascript:;" class="btn default btn-sm">
                        <i class="fa fa-times"></i> Remove </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane" id="tab_reviews">
        <div class="table-container">
            <table class="table table-striped table-bordered table-hover" id="datatable_reviews">
                <thead>
                <tr role="row" class="heading">
                    <th width="5%">
                        Review&nbsp;#
                    </th>
                    <th width="10%">
                        Review&nbsp;Date
                    </th>
                    <th width="10%">
                        Customer
                    </th>
                    <th width="20%">
                        Review&nbsp;Content
                    </th>
                    <th width="10%">
                        Status
                    </th>
                    <th width="10%">
                        Actions
                    </th>
                </tr>
                <tr role="row" class="filter">
                    <td>
                        <input type="text" class="form-control form-filter input-sm" name="product_review_no">
                    </td>
                    <td>
                        <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                            <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
															<span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                        </div>
                        <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                            <input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
															<span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control form-filter input-sm" name="product_review_customer">
                    </td>
                    <td>
                        <input type="text" class="form-control form-filter input-sm" name="product_review_content">
                    </td>
                    <td>
                        <select name="product_review_status" class="form-control form-filter input-sm">
                            <option value="">Select...</option>
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </td>
                    <td>
                        <div class="margin-bottom-5">
                            <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                        </div>
                        <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                    </td>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane" id="tab_history">
        <div class="table-container">
            <table class="table table-striped table-bordered table-hover" id="datatable_history">
                <thead>
                <tr role="row" class="heading">
                    <th width="25%">
                        Datetime
                    </th>
                    <th width="55%">
                        Description
                    </th>
                    <th width="10%">
                        Notification
                    </th>
                    <th width="10%">
                        Actions
                    </th>
                </tr>
                <tr role="row" class="filter">
                    <td>
                        <div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
                            <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
															<span class="input-group-btn">
															<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                        </div>
                        <div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
                            <input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
															<span class="input-group-btn">
															<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
															</span>
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To"/>
                    </td>
                    <td>
                        <select name="product_history_notification" class="form-control form-filter input-sm">
                            <option value="">Select...</option>
                            <option value="pending">Pending</option>
                            <option value="notified">Notified</option>
                            <option value="failed">Failed</option>
                        </select>
                    </td>
                    <td>
                        <div class="margin-bottom-5">
                            <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
                        </div>
                        <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
                    </td>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>

<!-- BEGIN FOOTER -->
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/respond.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/excanvas.min.js');?>"></script> 
<![endif]-->
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-1.11.0.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-migrate-1.2.1.min.js');?>"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery.blockui.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery.cokie.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/uniform/jquery.uniform.min.js');?>"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/select2/select2.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/data-tables/jquery.dataTables.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/data-tables/DT_bootstrap.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="<?=branded_include('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js');?>" type="text/javascript"></script>
<script src="<?=branded_include('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js');?>" type="text/javascript"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js');?>"></script>
<script src="<?=branded_include('assets/global/plugins/plupload/js/plupload.full.min.js');?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=branded_include('assets/global/scripts/app.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/scripts/datatable.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/admin/pages/scripts/ecommerce-products-edit.js');?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           App.init();
           EcommerceProductsEdit.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
<?=$this->load->view(branded_view('cp/footer'));?>