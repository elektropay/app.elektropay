<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/jquery.maskedinput.min.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/pwdwidget.css') . '" />
<script type="text/javascript" src="' . branded_include('js/pwdwidget.js') . '"></script>')); ?>



<style type="text/css">


.creds {
    padding: 5px;
}

.api-keys {
  border: 1px solid #d8d8d8;
  padding: 20px;
  margin-bottom: 30px;
  -webkit-border-radius: 16px;
  -moz-border-radius: 16px;
  -ms-border-radius: 16px;
  -o-border-radius: 16px;
  border-radius: 16px;
  background-color: #fcfcfc;
}

.api-keys h3 {
  margin-bottom: 12px;
}


.api-keys-panel:before{content:"";background:url(../assets/app/img/key.svg) 15px 16px no-repeat;background-size:44%;border:1px solid #2ace58;-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;width:50px;height:55px;position:absolute;top:42px;left:10px}

.api-keys-panel:before {
   font-family: FontAwesome;
   content: "\f023";
   display: inline-block;
 color: #2ace58 ;
font-size: 38px;
   padding-right: 3px;
 padding-left: 10px;
   vertical-align: middle;
position:absolute;
top:45px;
left:40px
}

.api-keys-panel {
  position: relative;
  padding: 20px 90px 20px 120px;
  margin-bottom: 17px;
  border: 1px solid #DEDEDE;
  background-image: -webkit-gradient(linear,0,0,color-stop(0%,rgba(255,255,255,.5)),color-stop(80%,#fff));
  background-image: -webkit-linear-gradient(0,rgba(255,255,255,.5) 0,#fff 80%);
  background-image: -moz-linear-gradient(0,rgba(255,255,255,.5) 0,#fff 80%);
  background-image: -o-linear-gradient(0,rgba(255,255,255,.5) 0,#fff 80%);
  background-image: linear-gradient(0,rgba(255,255,255,.5) 0,#fff 80%);
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  -ms-border-radius: 500px;
  -o-border-radius: 500px;
  border-radius: 500px;
}

.api-keys-panel span {
  white-space: nowrap;
  padding: 0!important;
  color: #9D9D9D;
  font-size: 12px;
  line-height: 2.4;
  font-family: Incon,Inconsolata-g,monospace;
  font-weight: 400;
  font-style: normal;
}


.api-keys-panel span {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  font-size: 14px;
}

.api-keys-secret-char {
  padding-left: 0!important;
  color: #9D9D9D!important;
}


.api-keys p {
  padding-left: 7px;
  margin-bottom: 0;
}


.api-keys p {
  font-size: 16px;
  line-height: 21px;
  color: #444;
}


.creds {
    padding: 5px;
}


</style>



<!-- END PAGE HEADER-->

<div id="ui"> 
<!-- BEGIN ADD ON APPS -->
<div class="content-wrapper">

<div class="chart clearfix" style="height:auto;">

<div id="section">



<section class="tour">


<div class="row-fluid">

<div class="widget-main">

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12">

<div class="chart creds">
  <p>
    These credentials give you access to the Everpay API. For more information check the documentation on <a href="//everpayinc.com/docs/ "/>how to use these.</a>
  </p>

</div>

       <div class="api-keys has-public-key">
          <h4 class="center"><strong></strong></h4>
          <div class="api-keys-panel">
            <div class="row">
              <span class="col-sm-3"><b><i class="ion-person"></i> Client_Id</b></span>
              <span class="col-sm-9"><?=$this->user->Get('client_id')?></span>
            </div>
            <div class="row">
              <span class="col-sm-3"><b><i class="ion-location"></i> API_Id</b></span>
              <span class="col-sm-9">
                <span class="api-key-secret-char key_value"><?=$api_id;?></span>
               <i class="fa fa-eye"></i>
              </span>
            </div>
            
            <div class="row">
            <span class="col-sm-3"><b><i class="ion-key"></i> Secret_Key</b></span>
              <span class="col-sm-9">
                <span class="api-key-secret-char key_value"><?=$secret_key;?></span>
              </span>
            </div>
            
          </div>
          <p><span>If your keys have been compromised, we suggest that you <a id="generate_new_api" class="btn-link" data-method="post" rel="nofollow" href="<?=site_url('settings/regenerate_api');?>">roll a new key <i class="fa fa-refresh"></i> .</a></span> </p>
        </div>
    


<em></strong>Keep Your <strong class="text-primary">API ID</strong> and Secret Key Private</strong></em>  
</div>


</div><!-- END WIDGET MAIN -->
</div><!-- END ROW -->
</div><!-- END ROW-FLUID -->

</section>

  </div><!-- END/ #section-->

  </div><!-- END/ .chart-->
   </div><!-- END/ .content-wrapper-->
   </div><!-- END/ #ui-->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- richard -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('repeatpwddiv','repeatpwd');
    pwdwidget.enableGenerate = false;
    pwdwidget.enableShowStrength=false;
    pwdwidget.enableShowStrengthStr =false;
    pwdwidget.MakePWDWidget(false);
    
    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
    pwdwidget.MakePWDWidget();
        
    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("newpwd","req","Please provide a new password");
    

// ]]>
</script>


<!-- END JAVASCRIPTS -->

<?=$this->load->view(branded_view('cp/footer'));?>