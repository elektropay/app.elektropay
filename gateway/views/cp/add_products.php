<?=$this->load->view(branded_view('cp/header'));?>

<link href="<?=branded_include('css/select2') ; ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/select2-bootstrap.css') ; ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/datepicker.css') ; ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/jquery.minicolors.css') ; ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/summernote.css') ; ?>" rel="stylesheet" type="text/css" media="screen" />


<div class="content container">
        <h2 class="page-title">Add Product <small> Statistics and more</small></h2>
        <div class="row">
            <div class="col-lg-8">
<body id="form-product">
<div id="content">
			<div class="menubar">
				<div class="sidebar-toggler visible-xs">
					<i class="ion-navicon"></i>
				</div>

				<div class="page-title">
					New product form 
					
					<small class="hidden-xs">
						<strong>Showcase of form elements</strong>
					</small>
				</div>
			</div>

			<div class="content-wrapper">
				<form id="new-product" class="form-horizontal" method="post" action="#" role="form">
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Title</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control" name="product[first_name]" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Price</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control" name="product[last_name]" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Display picture</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="well">
					    		<div class="pic">
					    			<img src="images/product.jpg" class="img-responsive" />
					    		</div>
			                    
			                    <div class="control-group">
				                    <label for="post_featured_image">
				                    	Choose a picture:
				                    </label>
				                    <input id="post_featured_image" name="post[featured_image]" type="file">
				                </div>
			                    <div class="control-group">
		                            <label for="post_images_attributes_0_alt">Alt:</label>
		                            <input class="form-control" name="post[images_attributes][0][alt]" size="30" style="width: 50%;" type="text" />
		                        </div>
		                        <a href="#" class="remove-image">Remove image</a>
				            </div>
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">
					    	SKU
					    	<span class="help" data-toggle="tooltip" title="The Stock Keeping Unit">
					    		<i class="fa fa-question-circle"></i>
					    	</span>
					    </label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control" name="product[email]" />
					    </div>
				  	</div>
				  	<div class="address">
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Product Handle</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control" placeholder="/my-product-handle" name="product[address]" />
						    </div>
						</div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Masked phone</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
								<input type="text" class="form-control mask-phone" name="customer[phone]" />
						      	<i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="Tooltip helper example">
						      	</i>
							</div>
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Masked Credit Card</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
					      		<input type="text" class="form-control mask-cc" name="customer[cc]" />
					      		<i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="Credit card masked input example">
						      	</i>
							</div>
					    </div>
				  	</div>
			  		<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Product rating</label>
					    <div class="col-sm-10 col-md-8">
					      	<div id="raty"></div>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Product Main Color</label>
					    <div class="col-sm-10 col-md-8">
					      	<input type="text" class="form-control minicolors" />
					    </div>
					</div>
				  	<div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Category</label>
					    <div class="col-sm-10 col-md-8">
					    	<select class="form-control" data-smart-select>
					    		<option>Bicycles</option>
					    		<option>Clothes</option>
					    		<option>Gift Cards</option>
					    	</select>
					    </div>
				  	</div>
				  	<div class="form-group">
				  		<label class="col-sm-2 col-md-2 control-label">Product description</label>
				  		<div class="col-sm-10 col-md-8">
				  			<div id="summernote"></div>
				  		</div>
				  	</div>
				  	<div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Product tags</label>
					    <div class="col-sm-10 col-md-8">
					      	<input type="hidden" id="product-tags" style="width:100%" value="ball, toy, clothes" name="product[tags]" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Specific publish date</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="input-group">
							  	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							  	<input type="text" class="form-control datepicker" placeholder="03/05/2014" />
							</div>
					    </div>
				  	</div>
				  	<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-10">
					      	<div class="checkbox">
					        	<label>
					          		<input type="checkbox" name="product[send_marketing]" /> Set product as visible
				        		</label>
					      	</div>
					    </div>
				  	</div>

				  	<div class="form-group form-actions">
				    	<div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-10">
				    		<a href="form.html" class="btn btn-default">Cancel</a>
				      		<button type="submit" class="btn btn-success">Save product</button>
			    		</div>
				  	</div>
				</form>
			</div>
		</div>
	</div>








	<script type="text/javascript">
		$(function () {

			// Form validation
			$('#new-product').validate({
				rules: {
					"product[first_name]": {
						required: true
					},
					"product[email]": {
						required: true,
						email: true
					},
					"product[address]": {
						required: true
					},
					"product[notes]": {
						required: true
					}
				},
				highlight: function (element) {
					$(element).closest('.form-group').removeClass('success').addClass('error');
				},
				success: function (element) {
					element.addClass('valid').closest('.form-group').removeClass('error').addClass('success');
				}
			});

			// Product tags with select2
			$("#product-tags").select2({
				placeholder: 'Select tags or add new ones',
				tags:["shirt", "gloves", "socks", "sweater"],
				tokenSeparators: [",", " "]
			});

			// Bootstrap wysiwyg
			$("#summernote").summernote({
				height: 240,
				toolbar: [
				    ['style', ['style']],
				    ['style', ['bold', 'italic', 'underline', 'clear']],
				    ['fontsize', ['fontsize']],
				    ['para', ['ul', 'ol', 'paragraph']],
				    ['height', ['height']],
				    ['insert', ['picture', 'link', 'video']],
				    ['view', ['fullscreen', 'codeview']],
				    ['table', ['table']],
				]
			});

			// jQuery rating
			$('#raty').raty({
				path: 'images/raty',
				score: 4
			});

			// Datepicker
	        $('.datepicker').datepicker({
	        	autoclose: true,
	        	orientation: 'left bottom',
	        });

	        // Minicolors colorpicker
	        $('input.minicolors').minicolors({
	        	position: 'top left',
	        	defaultValue: '#9b86d1',
	        	theme: 'bootstrap'
	        });

	        // masked input example using phone input
			$(".mask-phone").mask("(999) 999-9999");
			$(".mask-cc").mask("9999 9999 9999 9999");
		});
	</script>

</body>
 </div>
 </div>
 </div>




    <div class="row">
    <div class="col-md-12">
    <form class="form-horizontal form-row-seperated" action="" method="post">
    <div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-shopping-cart"></i>Add A Product
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
                    <input type="text" class="form-control" name="product_name" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Description: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <textarea class="form-control" name="product_desc"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Short Description: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <textarea class="form-control" name="product_short_desc"></textarea>
														<span class="help-block">
														shown in product listing </span>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-2 control-label">Quantity: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
					<input type="text" class="form-control" name="product_quantity" placeholder="">
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
                                    <label><input type="checkbox" name="product_categories[]" value="1">Mens</label>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens]" value="1">Footwear</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens]" value="2">Clothing</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens]" value="3">Accessories</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[mens]" value="4">Fashion Outlet</label>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <label><input type="checkbox" name="product_categories[]" value="1">Football Shirts</label>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label><input type="checkbox" name="product_categories[]" value="1">Premier League</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[]" value="1">Football League</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[]" value="1">Serie A</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[]" value="1">Bundesliga</label>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <label><input type="checkbox" name="product_categories[]" value="1">Brands</label>
                                    <ul class="list-unstyled">
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brand]" value="1">Adidas</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brand]" value="2">Nike</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brand]" value="3">Airwalk</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="product_categories[brand]" value="4">Kangol</label>
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
                        <input type="text" class="form-control" name="product_available_start_date">
															<span class="input-group-addon">
															to </span>
                        <input type="text" class="form-control" name="product_available_end_date">
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
                    <input type="text" class="form-control" name="product_sku" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Price: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="product_price" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tax Class: <span class="required">
													* </span>
                </label>
                <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="product_tax_class">
                        <option value="">Select...</option>
                        <option value="1">None</option>
                        <option value="0">Taxable Goods</option>
                        <option value="0">Shipping</option>
                        <option value="0">USA</option>
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
                        <option value="1">Published</option>
                        <option value="0">Not Published</option>
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
                    <input type="text" class="form-control maxlength-handler" name="product_meta_title" maxlength="100" placeholder="">
														<span class="help-block">
														max 100 chars </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Meta Keywords:</label>
                <div class="col-md-10">
                    <textarea class="form-control maxlength-handler" rows="8" name="product_meta_keyword" maxlength="1000"></textarea>
														<span class="help-block">
														max 1000 chars </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Meta Description:</label>
                <div class="col-md-10">
                    <textarea class="form-control maxlength-handler" rows="8" name="product_meta_description" maxlength="255"></textarea>
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

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="<?=branded_include('js/select2.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.dataTables.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/data-tables/DT_bootstrap.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js');?>">
<script type="text/javascript" src="<?=branded_include('js/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/summernote.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.raty.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.minicolors.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.maskedinput.js');?>"></script>
<script src="<?=branded_include('js/bootstrap-maxlength/bootstrap-maxlength.min.js');?>" type="text/javascript"></script>
<script src="<?=branded_include('js/bootstrap-touchspin/bootstrap.touchspin.js');?>" type="text/javascript"></script>
<script src="<?=branded_include('js/fancybox/source/jquery.fancybox.pack.js');?>" type="text/javascript"></script>
<script src="<?=branded_include('js/plupload.full.min.js');?>" type="text/javascript"></script>

<script type="text/javascript" src="<?=branded_include('js/datatable.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ecommerce-products-edit.js');?>"></script>
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