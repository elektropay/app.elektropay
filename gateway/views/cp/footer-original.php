</div><!-- /main-page -->

	<footer id="footer" class="main-footer sticky footer-type-1">
			<div class="col-md-12">
				<div class="footer-inner margin-top-0">
				
					<!-- Add your copyright text here -->
					<div class="footer-text pull-right">
                                          <ul class="list-inline" style="margin-top:8px; margin-bottom:4px;padding-left:10px;text-align: left!important;">
				<li>Copyright &copy; <?=date('Y');?> <strong>Everpay Corporation</strong> </li>|
                        
                    <li><a href="https://everpayinc.com/legal">Legal</a></li>|
                    <li><a href="https://everpayinc.com/terms">Terms</a></li>|
                     <li>Powered by <small><b><a href="http://elektropay.io">Elektropay</a></b></small>  &nbsp; V <?=$this->config->item('opengateway_version');?>. <?
		
			if (defined("_LICENSENUMBER")) {
				echo 'License Number: ' . _LICENSENUMBER;
			}
			
			?></li>
				</ul>		
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up"></div>
					
				</div><!-- /footer-inner -->
</div><!-- /col-md-12 end -->
				
			</footer>


</div><!-- /row end -->
</div>

</div><!-- /container-fluid end -->






<!-- BEGIN MODALS -->


<!-- BEGIN MODAL-UPGRADE -->
<div class="modal fade bootbox-prompt in" id="modal-upgrade" aria-hidden="true" style="display:display: block; padding-right: 16px;"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h1 class="modal-title">Unlock More Features</h1> </div> 
<div class="modal-body"style="padding: 0 20px;"> 

<div class="row"> 
<section id="account-billing-subscription" class="content-page current is-fixed-bar" data-title="Billing" data-route="/account/billing/subscription">

<div class="subscription-container col-md-10 detail-view">

    <fieldset class="billing-container">
    <div class="current-plan details-box">
	<div>
	<div class="row details-field-group">
  <div class="field col-xs-4">
    <div class="field-title">Your Subscription</div>
    <div class="field-value" data-plan="plan_name">
      <span class="plan-icon">
        <i class="icon icon-budicon-774"></i>
      </span>
      <span class="plan-name">
        <span class="plan-title"><?= $this->user->Get('plan_name') ?></span> ()
      </span>
      
    </div>
  </div>

  


  <div class="field col-xs-4 total-price">
    <div class="field-title">Total</div>
    <div class="field-value field-value-total">
      <span class="js-total-price-value price-number animated">$0</span>
	  <span class="js-price-time price-time">/mo</span> 
	  </div>
  </div>


  <div class="field col-xs-4 billing-info">
    <div class="field-title">
      Billed to 
    </div>
    <div class="field-value">
      
      <a class="js-add-billing add-billing" href="#">Add Billing Information</a>
      
    </div>
  </div>
  

</div></div></div>

    <div class="details-box-attachment">
      <div class="bar-content hidden">
        <div class="js-billing-interval billing-interval">
          <button data-interval="month">Monthly</button>

          <div class="switch-component">
            <input type="checkbox" class="js-price-interval">
            <div class="ui-status"></div>
          </div>

          <button data-interval="year">Annually</button>
        </div>

        <button class="js-cancel-edit discard-changes btn btn-default btn-mid">discard changes</button>
      </div>
    </div>

    <div class="hidden text-center interval-toggle">
      <ul class="nav nav-tabs nav-tabs-pills">
        <li class="active"><a data-toggle="tab" href="#packages">Packages</a></li>
        <li><a data-toggle="tab" href="#custom-plan">Custom Plan</a></li>
      </ul>
    </div>

    <div class="tab-content">
	
      <div id="packages" class="tab-pane active plans-container">
	  
	  <div id="pricing-plans" class="pricing-plans-grid">
  
<div data-plan="social-starter" class="plan">
  <div class="card">
    <div class="plan-header">
      <i class="icon icon-budicon-300"></i>
      <h4>StartUp</h4>
    </div>

    <div class="price animated">
	<span class="price-number">$15</span>
	<span class="price-time monthly ">/mo</span>
	<span class="price-time yearly hide">/yr</span>
	</div>

    <div class="plan-description">

      
      Send Payments to any <a href="https://docs.everpayinc.com/identityproviders#2" data-toggle="tooltip" title="" class="package-plan-tip" data-original-title="See our list of supported <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>social identity providers</a>.">social identity provider</a>.
      

    </div>

    <div class="plan-items">
      <ul>
        
        <li data-toggle="tooltip" title="" data-original-title="An active user is one that's authenticated in the last 30 days, counted per application.">1000 active users</li>
        

        

        
        <li data-toggle="tooltip" title="" data-original-title="See supported social providers <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>here</a>. If you need a payment provider not on this list, please contact us.">Any Social Provider</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="Rules implement arbitrarily powerful customization of the authentication and authorization pipeline. They are written in ordinary JavaScript. Use cases include easing integration into complex identity environments, easy integration into 3rd party analytics tools, and fully custom multifactor auth. See documentation <a href='https://docs.everpayinc.com/rules' target='_blank'>here</a> and examples in Everpay's OSS rules repository <a href='https://github.com/everpay/rules' target='_blank'>here</a>.">Rules</li>
        

        

        

        
      </ul>
    </div>

    <button class="js-checkout btn btn-success btn-mid" data-loading-text="saving...">Checkout</button>
  </div>
</div>

    

  

    
      

<div data-plan="business-plus-starter" class="plan">
  <div class="card">
    <div class="plan-header">
      <i class="icon icon-budicon-299"></i>
      <h4>SMB</h4>
    </div>

    <div class="price animated"><span class="price-number">$49</span><span class="price-time monthly ">/mo</span><span class="price-time yearly hide">/yr</span></div>

    <div class="plan-description">

      

      
      Authenticate to any <a href="https://docs.everpayinc.com/identityproviders#2" data-toggle="tooltip" title="" class="package-plan-tip" data-original-title="See our list of supported <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>social identity providers</a>.">social identity provider</a><br> and to a <a target="_blank" href="https://docs.everpayinc.com/mysql-connection-tutorial" title="" data-toggle="tooltip" class="package-plan-tip" data-original-title="User database hosted by Everpay.">user database</a>.
      

      
    </div>

    <div class="plan-items">
      <ul>
        
        <li data-toggle="tooltip" title="" data-original-title="An active user is one that's authenticated in the last 30 days, counted per application.">1000 active users</li>
        

        

        
        <li data-toggle="tooltip" title="" data-original-title="See supported social providers <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>here</a>. If you need an identity provider not on this list, please contact us.">Any Social Provider</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="Rules implement arbitrarily powerful customization of the authentication and authorization pipeline. They are written in ordinary JavaScript. Use cases include easing integration into complex identity environments, easy integration into 3rd party analytics tools, and fully custom multifactor auth. See documentation <a href='https://docs.everpayinc.com/rules' target='_blank'>here</a> and examples in Everpay's OSS rules repository <a href='https://github.com/everpay/rules' target='_blank'>here</a>.">Rules</li>
        

        

        

        
      </ul>
    </div>

    <button class="js-checkout btn btn-success btn-mid" data-loading-text="saving...">Checkout</button>
  </div>
</div>

    

  

    
      

<div data-plan="social-premium" class="plan">
  <div class="card">
    <div class="plan-header">
      <i class="icon icon-social-premium"></i>
      <h4>Premium</h4>
    </div>

    <div class="price animated"><span class="price-number">$107</span><span class="price-time monthly ">/mo</span><span class="price-time yearly hide">/yr</span></div>

    <div class="plan-description">

      

      
      Authenticate to any <a href="https://docs.everpayinc.com/identityproviders#2" data-toggle="tooltip" title="" class="package-plan-tip" data-original-title="See our list of supported <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>social identity providers</a>.">social identity provider</a><br> and to a <a target="_blank" href="https://docs.everpayinc.com/mysql-connection-tutorial" title="" data-toggle="tooltip" class="package-plan-tip" data-original-title="User database hosted by Everpay.">user database</a>.
      

      
    </div>

    <div class="plan-items">
      <ul>
        
        <li data-toggle="tooltip" title="" data-original-title="An active user is one that's authenticated in the last 30 days, counted per application.">1000 active users</li>
        

        

        
        <li data-toggle="tooltip" title="" data-original-title="See supported social providers <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>here</a>. If you need an identity provider not on this list, please contact us.">Any Social Provider</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="Rules implement arbitrarily powerful customization of the authentication and authorization pipeline. They are written in ordinary JavaScript. Use cases include easing integration into complex identity environments, easy integration into 3rd party analytics tools, and fully custom multifactor auth. See documentation <a href='https://docs.everpayinc.com/rules' target='_blank'>here</a> and examples in Everpay's OSS rules repository <a href='https://github.com/everpayinc/rules' target='_blank'>here</a>.">Rules</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="SLA details <a href='https://everpayinc.com/docs/sla' target='_blank'>here</a>.">Guaranteed SLA</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="Authenticate to your own credential database instead of one hosted by Everpay. Or easily migrate from your legacy credential database over to one hosted by Everpay.">Premium DB Features</li>
        

        
      </ul>
    </div>

    <button class="js-checkout btn btn-success btn-mid" data-loading-text="saving...">Checkout</button>
  </div>
</div>

    

  

    
      

<div data-plan="enterprise-server" class="plan">
  <div class="card">
    <div class="plan-header">
      <i class="icon icon-budicon-608"></i>
      <h4>Enterprise</h4>
    </div>

    <div class="price animated"><span class="price-number">$70</span><span class="price-time monthly ">/mo</span><span class="price-time yearly hide">/yr</span></div>

    <div class="plan-description">

      

      

      
      Authenticate to any <a target="_blank" href="https://docs.everpayinc.com/identityproviders#1" data-toggle="tooltip" title="" class="package-plan-tip" data-original-title="See our list of supported <a href='https://docs.everpayinc.com/identityproviders#1' target='_blank'>enterprise identity providers</a>.">enterprise</a><br> and <a target="_blank" href="https://docs.everpayinc.com/identityproviders#2" title="" class="package-plan-tip">social identity provider</a>,<br> and to a <a target="_blank" href="https://docs.everpayinc.com/mysql-connection-tutorial" data-toggle="tooltip" title="" class="package-plan-tip" data-original-title="User database hosted by Everpay.">user database</a>.
      
    </div>

    <div class="plan-items">
      <ul>
        

        
        <li>200 enterprise users</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="See supported social providers <a href='https://docs.everpayinc.com/identityproviders#2' target='_blank'>here</a>. If you need an identity provider not on this list, please contact us.">Any Social Provider</li>
        

        
        <li data-toggle="tooltip" title="" data-original-title="Rules implement arbitrarily powerful customization of the authentication and authorization pipeline. They are written in ordinary JavaScript. Use cases include easing integration into complex identity environments, easy integration into 3rd party analytics tools, and fully custom multifactor auth. See documentation <a href='https://docs.everpayinc.com/rules' target='_blank'>here</a> and examples in Everpay's OSS rules repository <a href='https://github.com/everpay/rules' target='_blank'>here</a>.">Rules</li>
        

        

        

        
      </ul>
    </div>

    <button class="js-checkout btn btn-success btn-mid" data-loading-text="saving...">Checkout</button>
  </div>
</div>

    

  
 </div>
 </div>  
      
 
      <div id="custom-plan" class="tab-pane tab-pane-custom-hide widget-box">
        <div id="billing-subscription" class="widget-content">

<form id="subscription-plan-form">
    <div class="form-group">
        <div id="pricing-widget-container"><div id="pricing-widget" class="pricing-boxes container"><div class="row"><div class="col-sm-4"><div class="box-step"><div class="box-step-header"><h5><div class="number">1</div>Choose Identity Provider Type</h5></div><div class="box-step-content"><div class="idp-type"><label class="radio"><div class="radio-left"><input id="radio1" type="radio" name="radios" data-target="social" data-trigger="pricing-plan"><span class="outer"><span class="inner"></span></span></div><div class="radio-right"><strong>Social</strong><span>Authenticate to Facebook, Twitter and Google.</span></div></label><label class="radio"><div class="radio-left"><input id="radio1" type="radio" name="radios" data-target="social+" data-trigger="pricing-plan"><span class="outer"><span class="inner"></span></span></div><div class="radio-right"><strong>Social+</strong><span>Authenticate to any <a href="https://docs.everpayinc.com/identityproviders#2" title="" class="tip-item" style="display: inline-block;">social identity provider</a>, and to a <a target="_blank" href="https://docs.everpayinc.com/mysql-connection-tutorial" title="" class="tip-item" style="display: inline-block;">user database</a>.</span></div></label><label class="radio"><div class="radio-left"><input id="radio1" type="radio" name="radios" data-target="enterprise" data-trigger="pricing-plan"><span class="outer"><span class="inner"></span></span></div><div class="radio-right"><strong>Enterprise</strong><span>Authenticate to any <a target="_blank" href="https://docs.everpayinc.com/identityproviders#1" title="" class="tip-item" style="display: inline-block;">enterprise</a> and <a target="_blank" href="https://docs.everpayinc.com/identityproviders#2" title="" class="tip-item" style="display: inline-block;">social identity provider</a>, and to a <a target="_blank" href="https://docs.everpayinc.com/mysql-connection-tutorial" title="" class="tip-item" style="display: inline-block;">user database</a>.</span></div></label></div></div></div></div><div class="col-sm-4"><div class="box-step"><div class="box-step-header"><h5><div class="number">2</div>How Many Active Users?</h5></div><fieldset data-plan="none" class="box-step-content no-plan"><p class="no-plan-label">Select an identity provider to add users.</p></fieldset><fieldset data-plan="social" class="box-step-content social-only hide" disabled=""><p data-trigger="pricing-slider" data-min="1" data-max="6" data-start="1" data-step="1" class="plan-unit"><strong>Active Social Users</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><input name="social" class="js-range hidden" style="display: none;"><span class="range-bar"><span class="range-handle" style="left: 0px;"></span><span class="range-min"></span><span class="range-max"></span><span class="range-quantity" style="width: 0px;"></span></span><span class="range-value">1,000</span><span class="users">Users</span></p></fieldset><fieldset data-plan="social+" class="box-step-content social-database hide" disabled=""><p data-trigger="pricing-slider" data-min="1" data-max="6" data-start="1" data-step="1" class="plan-unit"><strong>Active Social+ Users</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><input name="social+" class="js-range hidden" style="display: none;"><span class="range-bar"><span class="range-handle" style="left: 0px;"></span><span class="range-min"></span><span class="range-max"></span><span class="range-quantity" style="width: 0px;"></span></span><span class="range-value">1,000</span><span class="users">Users</span></p></fieldset><fieldset data-plan="enterprise" class="box-step-content social-username-enterprise hide" disabled=""><p data-trigger="pricing-slider" data-min="0" data-max="6" data-start="1" data-step="1" class="plan-unit"><strong>Active Social+ Users</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><input name="social+" class="js-range hidden" style="display: none;"><span class="range-bar"><span class="range-handle" style="left: 33.6666666666667px;"></span><span class="range-min"></span><span class="range-max"></span><span class="range-quantity" style="width: 33.6666666666667px;"></span></span><span class="range-value">1,000</span><span class="users">Users</span></p><p data-trigger="pricing-slider" data-min="1" data-max="5" data-start="1" data-step="1" class="plan-unit"><strong>Active Enterprise Users</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><input name="enterprise" class="js-range hidden" style="display: none;"><span class="range-bar"><span class="range-handle" style="left: 0px;"></span><span class="range-min"></span><span class="range-max"></span><span class="range-quantity" style="width: 0px;"></span></span><span class="range-value">200</span><span class="users">Users</span></p></fieldset><span class="sales-warning hide">Need more users? <a href="mailto:sales@everpayinc.com">Talk to sales</a></span></div></div><div class="col-sm-4"><div class="box-step additional-features"><div class="box-step-header"><h5><div class="number">3</div>Additional Features</h5></div><div class="box-step-content"><fieldset data-plan="none"><p class="no-plan-label">Select an identity provider to add features.</p></fieldset><fieldset data-plan="social" disabled="" class="hide"><div class="feature-item"><strong>Rules</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><b class="icon-budicon-470"></b><input type="checkbox" name="rules" checked="checked" class="hidden"></div><div class="feature-item"><strong>Any Social Provider</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="all-social" class="uiswitch"><span class="checkbox-fallback"></span></label></div><div class="feature-item"><strong>Guaranteed SLA</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="guaranteed-sla" class="uiswitch"><span class="checkbox-fallback"></span></label></div></fieldset><fieldset data-plan="social+" disabled="" class="hide"><div class="feature-item"><strong>Rules</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><b class="icon-budicon-470"></b><input type="checkbox" name="rules" checked="checked" class="hidden"></div><div class="feature-item"><strong>Any Social Provider</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><b class="icon-budicon-470"></b><input type="checkbox" name="all-social" checked="checked" class="hidden"></div><div class="feature-item"><strong>Guaranteed SLA</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="guaranteed-sla" class="uiswitch"><span class="checkbox-fallback"></span></label></div><div class="feature-item"><strong>Premium Support</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="premium-support" class="uiswitch"><span class="checkbox-fallback"></span></label></div><div class="feature-item"><strong>Premium DB Features</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="extended-db" class="uiswitch"><span class="checkbox-fallback"></span></label></div></fieldset><fieldset data-plan="enterprise" disabled="" class="hide"><div class="feature-item"><strong>Rules</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><b class="icon-budicon-470"></b><input type="checkbox" name="rules" checked="checked" class="hidden"></div><div class="feature-item"><strong>Any Social Provider</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><b class="icon-budicon-470"></b><input type="checkbox" name="all-social" checked="checked" class="hidden"></div><div class="feature-item"><strong>Guaranteed SLA</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="guaranteed-sla" class="uiswitch"><span class="checkbox-fallback"></span></label></div><div class="feature-item"><strong>Premium Support</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="premium-support" class="uiswitch"><span class="checkbox-fallback"></span></label></div><div class="feature-item"><strong>Premium DB Features</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="extended-db" class="uiswitch"><span class="checkbox-fallback"></span></label></div><div class="feature-item"><strong>3rd Party App SSO</strong><span title="" class="help-circle tip-item" style="display: inline-block;"></span><label class="checkbox-wrapper"><input type="checkbox" name="3rd-party-sso" class="uiswitch"><span class="checkbox-fallback"></span></label></div></fieldset></div></div><div class="total clearfix"><div class="inner-wrapper"><span>Total</span><div class="price-container animated"><strong class="full-price-text">$0</strong><strong class="partial-price-text hide">.00</strong><small class="interval-price-text monthly hide">/mo</small><small class="interval-price-text yearly hide">/yr</small></div><span title="" data-plan="-developer" class="help-circle tip-item" style="display: inline-block;"></span><span title="" data-plan="developer" class="help-circle tip-item hide" style="display: inline-block;"></span><div data-toggle="buttons" data-plan="-developer" class="btn-group"><label aria-pressed="true" class="btn btn-primary btn-xs active"><input type="radio" name="interval" value="month" autocomplete="off" checked="checked">Monthly</label><label aria-pressed="true" class="btn btn-primary btn-xs"><input type="radio" name="interval" value="year" autocomplete="off">Yearly</label></div><div data-plan="developer" class="btn-group hide"><label aria-pressed="true" class="btn btn-primary btn-xs active">up to 20 users</label></div></div></div></div></div></div></div>
    </div>
    <fieldset disabled="" class="form-actions form-group js-billing-actions hide">
      <input id="submit-custom-plan" data-loading-text="saving..." type="submit" class="btn btn-success" value="Checkout">		
    </fieldset>
</form>
</div>
      </div>
    </div>
  </fieldset>
    
  </div>

  
  </section>

</div> 
</div>

<div class="modal-footer"> 
<button type="button" class="btn btn-white" data-dismiss="modal">Close</button> <button type="button" class="btn btn-info">Save changes</button> 
</div> 

</div> 

</div> 
</div>
<!-- END .Modal-upgrade -->

<!-- END MODALS -->


<!-- BEGIN CORE PLUGINS -->


	<!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script type="text/javascript" src="<?=branded_include('js/jquery.ui.touch-punch.min.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/bootbox.min.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/jquery.gritter.min.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/spin.min.js');?>"></script>

	
  <!-- include spec files here... -->
<script type="text/javascript" src="<?=branded_include('js/TweenMax.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/resizeable.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/joinable.js');?>"></script>

<!-- ace scripts -->
<script type="text/javascript" src="<?=branded_include('js/ace-extra.min.js'); ?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ace-elements.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ace.min.js');?>"></script>	


 <!-- Everpay Widget Helper Scripts -->     
<script type="text/javascript" src="<?=branded_include('js/parsley.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/translation.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/BrandDetection.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/Iban.js');?>"></script>  
<script type="text/javascript" src="<?=branded_include('js/jquery.truncate.js');?>"></script>



  
<script>
  $('[data-toggle=confirmation]').confirmation();
  $('[data-toggle=confirmation-singleton]').confirmation({ singleton:true });
  $('[data-toggle=confirmation-popout]').confirmation({ popout: true });
</script>

<script type="text/javascript">
      $(function () { $("[data-toggle='popover']").popover(); });
      $(function () { $('.popover-show').popover('show');});
      $(function () { $('.popover-hide').popover('hide');});
      $(function () { $('.popover-destroy').popover('destroy');});
      $(function () { $('.popover-toggle').popover('toggle');});
     $(function () { $(".popover-options a").popover({html : true });});
   </script>


<script type="text/javascript">
    $(function() {

        // pop up .popover-test
        $('.popover-test').popover();

        // pop up #popover-view,#popover-view1,#popover-view2 with same content
        $('[rel=popover]').popover({
            html: true,
            content: function() {
                return $('#popover-view').html();
            }
        });

    });

</script>


<script>	
$(document).ready(function () {
        $("#formmapper").formmapper({
          map: ".map_canvas",
          details: "form",
          markerOptions: {
            draggable: true
          }
        });
        $("#formmapper").bind("geocode:dragged", function(event, latLng){
		  $("#formmapper").formmapper("find",latLng.lat()+","+latLng.lng());
        });
        $("#find").click(function(){
          	$("#formmapper").trigger("geocode");
        }).click();			
		$('#formmapper').popover({'trigger': 'focus'});
      });
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#business_start').datepicker({
			autoclose:true,
			endDate: 'today',
			todayHighlight: true
		}).on('changeDate', function(e) {
			// console.log(e);
		});
	});
</script>



	<script>
		$(document).ready(function() {
			$("abbr.timeago").timeago();
		});
	</script>

	
<script type="text/javascript">
!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
analytics.load("My7hEmjUg4BKAInGM7QVPGN0Wrv4NX9G");
analytics.page()
}}();
</script>


              <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
          </script>
		  
          <script type="text/javascript">
            try {
              var pageTracker = _gat._getTracker("(UA-36810004-1)");
            pageTracker._trackPageview();
            } catch(err) {}
          </script>

<script> 
(function(a,b,c,d,e){function f(){var a=b.createElement("script");a.async=!0;
a.src="//radar.cedexis.com/1/15103/radar.js";b.body.appendChild(a)}/\bMSIE 6/i
.test(a.navigator.userAgent)||(a[c]?a[c](e,f,!1):a[d]&&a[d]("on"+e,f))})
(window,document,"addEventListener","attachEvent","load");
</script>

<script>
  window.intercomSettings = {
    app_id: "z6ftuy9a",
    name: "Everpay Support", // Full name
    email: "support@everpayinc.com", // Email address
    created_at: 1312182000 // Signup date as a Unix timestamp
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/z6ftuy9a';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>


<!-- END PAGE LEVEL SCRIPTS -->
<div class="hidden" id="base_url"><?=base_url();?></div>
<div class="hidden" id="current_url"><?=current_url();?></div>
</body>
</html>