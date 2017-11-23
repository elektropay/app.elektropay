<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>

		<style>		
			.block-basic {
				margin:			0 auto 20px auto;
				width:			620px;
				color:			#111111;
				padding:		20px;
				overflow:		auto;				
			}
			
			.demo-block {
				border:			3px solid #718DC7;
				background:		#D2D8E8;
			}
			
			.code-block {
				border:			3px solid #FFD324;
				background:		#FFF6BF;	

			}
			
				.code-block pre {
					font-family:    monospace;
				}
			
			.block2 {
				border:			3px solid #C6D880;
				background:		#E6EFC2;			
			}
			
			.text-block {
				width:			670px;
				padding:		0px;	
				font-size:		14px;	
			}	
				
				.text-block p {
					color:			#565656;
				}
			
			.left {
				float:			left;
				display:		inline;
				position:		relative;
				padding-top:	10px;
			}
			
			.right {
				float:			left;
				display:		inline;
				position:		relative;
				width:			300px;
				padding:		10px 10px 10px 30px;
				
			}			
			
			form label {
				display:		inline-block;
				width:			80px;
				text-align:		right;
				padding:		0 0 15px 0;
			}
			
			form input.submit {
				margin:			0 0 0 130px;
			
			}
			
			div.hr {
				border-bottom:	1px solid #111;
			}
			
			.right div.hr {
				border-bottom:	1px solid #718DC7;
				padding:		5px 0 10px 0;
			}
			
			.formatted {
				font-size: 12px;
				overflow:		hidden;
			}

		</style>

	<!-- BEGIN Currency PAGE -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

           <div class="row">

     <div class="container-fluid">
<div class="portlet light">
<div class="portlet-title">
<div class="caption">

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Currency <strong class="text-primary">Settings</strong></h1>
</div>
</div>
             </div>
</header>
  </div>
<div class="actions">
								<a href="<?=site_url('settings/');?>" class="btn btn-default btn-circle">
								<i class="fa fa-cog"></i>
								<span class="hidden-480">
								Settings </span>
								</a>
								<div class="btn-group">
									<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
									<i class="fa fa-share"></i>
									<span class="hidden-480">
									Tools </span>
									<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
									
										<li>
											<a href="javascript:;">
Add A Currency 
											 </a>
										</li>
									
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											Bank Account</a>
										</li>
									</ul>
								</div>
							</div>
  </div>


                                                                <div class="row">

        <!-- BEGIN PANEL-->
        <div class="col-lg-12 col-md-12 col-sm-12">
<!-- <form class="form-horizontal" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>-->
   <div class="panel panel-default panel-border panel-shadow">
        <div class="panel-body">

<div class="row margin-top-20">
	<div class="col-xs-12 col-sm-12 center">
					
		<div class="block-basic demo-block">
			
				<form name="test" action="<?=site_url('settings/currency');?>" method="POST">

					<label>Amount:</label>
					<input type="text" name="amount" value="100" />
					<br/>

					<label>From:</label>
					<select name="convertFrom">
						<option value="USD">United States Dollar (USD)</option>
						<option value="gbp">Great British pounds (GBP)</option>
						<option value="eur">Euro (EUR)</option>
						<option value="aud">Australian Dollar (AUD)</option>
						<option value="nzd">New Zealand Dollar (NZD)</option>
						<option value="cny">China Renminbi (CNY)</option>
					</select>
					<br/>

					<label>To:</label>
					<select name="convertTo">
						<option value="usd">United States Dollar (USD)</option>
						<option value="gbp">Great British pounds (GBP)</option>
						<option value="eur">Euro (EUR)</option>
						<option value="aud">Australian Dollar (AUD)</option>
						<option value="nzd" selected="yes">New Zealand Dollar (NZD)</option>
						<option value="cny">China Yuan (CNY)</option>
					</select>
					<br/>

					<input class="submit" type="submit" value="Convert" name="submit" />
				</form>
				
			</div>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
            
            <?php if (isset($_POST['submit']) && $_POST['submit'] == 'Convert') {
			include("currency_convert_class.php");
			$amount = $_POST['amount'];
			$from = $_POST['convertFrom'];	
			$to = $_POST['convertTo'];
			$convertObj = new CurrencyConvert();
			$result = $convertObj -> currencyConvert($amount, $from, $to);}?>
			
			<div class="right">
				
				<?php
					if ($result != '') {
						
						$formatted1 = $convertObj -> getFullResult(2);
						$formatted2 = $convertObj -> getFullResult(null, true);						
						$formatted3 = $convertObj -> getResult();						
						echo <<<HTML

						<span><strong>Result:</strong></span> $result
						<div class="hr"></div>
						<div class="formatted">						
							<h4>Formatted results:</h4>
							$formatted1 <br />
							$formatted2 <br />
							$formatted3
						</div>
HTML;
					}
					
				?>
				
			</div>			
				
		</div>

<?=$this->load->view(branded_view('cp/footer'));?>
