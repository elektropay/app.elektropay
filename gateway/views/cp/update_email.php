<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>


  <style type="text/css">

a.item {
  color: inherit;
  text-decoration: none;
}

a.button {
  text-decoration: none;
}

.button-discouraged {
  background-color: transparent;
  border: 1px solid #A2A3A7;
  border-radius: 2px;
}

.button {
  border-color: #b2b2b2;
  background-color: #f8f8f8;
  color: #444;
  position: relative;
  display: inline-block;
  margin: 0;
  padding: 0 12px;
  min-width: 52px;
  min-height: 47px;
  border-width: 0;
  border-style: solid;
  border-radius: 2px;
  vertical-align: top;
  text-align: center;
  text-overflow: ellipsis;
  font-size: 16px;
  line-height: 43px;
  cursor: pointer;
}


.narrow {
  max-width: 800px;
}


.completed {
  border-color: #1E981E;
}

.list:last-child.card {
  margin-bottom: 40px;
}

.card--noedges {
  border: none;
  box-shadow: none;
  margin-top: 0;
}

.card {
  padding-top: 1px;
  padding-bottom: 1px;
  box-shadow: 0 1px 2px rgba(0,0,0,.1);
}

.card, .list-inset {
  overflow: hidden;
  margin: 20px 10px;
  border-radius: 2px;
  background-color: #fff;
}

.card .item:last-child, .list-inset .item:last-child {
  margin-bottom: -1px;
}

.card .item:last-child, .card .item:last-child .item-content, .list-inset .item:last-child, .list-inset .item:last-child .item-content, .padding>.list .item:last-child, .padding>.list .item:last-child .item-content {
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}

.card .item, .list-inset .item, .padding-horizontal>.list .item, .padding>.list .item {
  margin-right: 0;
  margin-left: 0;
}

.getstarted__list__item {
  opacity: .6;
  border: none;
}

.list {
  position: relative;
  padding-top: 1px;
  padding-bottom: 1px;
  padding-left: 0;
  margin-bottom: 20px;
}

.list__padded {
  padding-left: 16px;
  padding-right: 16px;
}

.getstarted .list__item--highlight {
  z-index: 100;
  border-radius: 2px;
  border: 1px solid #92D6F4;
  opacity: 1;
}

.item-thumbnail-left, .item-thumbnail-left .item-content {
  padding-left: 106px;
  min-height: 100px;
}

.card .item, .list-inset .item, .padding-horizontal>.list .item, .padding>.list .item {
  margin-right: 0;
  margin-left: 0;
}

.item-body h1, .item-body h2, .item-body h3, .item-body h4, .item-body h5, .item-body h6, .item-body p, .item-complex.item-text-wrap, .item-complex.item-text-wrap .item-content, .item-complex.item-text-wrap h1, .item-complex.item-text-wrap h2, .item-complex.item-text-wrap h3, .item-complex.item-text-wrap h4, .item-complex.item-text-wrap h5, .item-complex.item-text-wrap h6, .item-complex.item-text-wrap p, .item-text-wrap, .item-text-wrap .item, .item-text-wrap .item-content, .item-text-wrap h1, .item-text-wrap h2, .item-text-wrap h3, .item-text-wrap h4, .item-text-wrap h5, .item-text-wrap h6, .item-text-wrap p {
  overflow: visible;
  white-space: normal;
}
.item, .item h1, .item h2, .item h3, .item h4, .item h5, .item h6, .item p, .item-content, .item-content h1, .item-content h2, .item-content h3, .item-content h4, .item-content h5, .item-content h6, .item-content p {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.item {
  border-color: rgba(0,0,0,.07);
  background-color: #FFF;
  color: #444;
  position: relative;
  z-index: 2;
  display: block;
  margin: -1px;
  padding: 12px;
  border-width: 1px;
  border-style: solid;
  font-size: 16px;
}

.item p {
  color: #666;
  font-size: 14px;
}

.item-text-wrap p {
  overflow: visible;
  white-space: normal;
}

p {
  font-family: inherit;
  margin: 10px 0 0 4px;
  line-height: 1.8;
}

.item-thumbnail-left .item-image, .item-thumbnail-left>img:first-child {
  position: absolute;
  top: 10px;
  left: 10px;
  max-width: 80px;
  max-height: 80px;
  width: 100%;
}


.ng-hide {
  display: none !important;
}

.getstarted i {
  color: #51656F;
}

i {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
  font: inherit;
  font-size: 100%;
}

.icon--item-thumbnail {
  font-size: 65px;
  padding-top: 5px;
  border: 1px solid #51656F;
border-radius: 25px;
}

.item-thumbnail-left .item-image {
  position: relative;
  top: 10px;
  left: 10px;
  right: 30px;
  max-width: 60px;
  max-height: 100px;
  width: 50%;
  border: 1px solid #51656F;
  border-radius: 25px;
  line-height: 2.9em;
  margin-right: 30px;
  float: left;
  display: inline-block;
}

.item-image {
  padding: 0;
  text-align: center;
  border: 1px solid #51656F;
border-radius: 25px;
}

.getstarted .alert{margin:0}
@media only screen and (min-width:602px){.center-content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}

.getstarted h2{font-size:1.2em}

.getstarted .welcome-help{font-size:1.1em}}

.button.button--item-bottom{margin-top:0}

.getstarted .list__item--highlight{z-index:100;border-radius:2px;border:1px solid #92D6F4;opacity:1}
a.getstarted__list__item:hover{background-color:rgba(146,214,244,.1)}.getstarted__list__item{opacity:.6;border:none}

.verified__success{margin:30px 0}.completed{border-color:#1E981E}
.getstarted .completed h2,.getstarted .completed i,.getstarted .completed p{color:#258425}

.bp-button-bar:after,.bp-button-bar:before{display:table;content:"";line-height:0}
.bp-button-bar:after{clear:both}.bp-button-bar>div.left-buttons{float:left}
.bp-button-bar>div.right-buttons{float:right}.alert-btn{margin-top:-5px}
.bp-list-item-icon{position:absolute;top:10px;left:10px;max-width:80px;max-height:80px;width:100%;width:100px;height:100px}

.card--getstarted{max-width:600px;margin:auto}.landing{background-color:#002855}
.landing__button{text-transform:uppercase;border-width:1px}

.currencyFlag{display:inline;margin-left:1em;vertical-align:bottom}

.bank-account-card{padding:1em 2em 1em 1em;margin:2em 0 1.5em;font-size:1.25em;border:1px solid #CACACA;border-radius:.25em;max-width:500px}.bank-account-card .bank-label{color:#64ACFF;font-weight:600}.bank-account-card .active{color:#25B246;float:right}.bank-account-card .not-active{float:right;color:#FF5460}
.bank-account-card p{font-size:1.5em;color:#7B7B7B;margin:0 0 15px}.bank-account-card h3{font-weight:400}.bank-account-card .btc-address{font-size:1em}.bank-account-card .bank-address{margin:1em 0 .5em;font-size:1em}
.settlement-helptext{margin:15px 0 25px}.right-text{text-align:right}html input.bp-slider{background:0 0;border:0}html input.bp-slider[disabled]{opacity:.3}.bank-fields>div{margin-bottom:1.2em}
.bank-fields>div>:first-child{font-size:.8em;margin-bottom:.2em}.bank-fields>div>:nth-child(2){font-weight:700}.button-link{background:none!important;border:none;padding:0!important;border-bottom:1px solid #64ACFF;cursor:pointer;color:#64ACFF;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center;margin-left:30px;font-family:inherit;font-size:1.15em}.bar.bar-bitpay{border-color:rgba(0,0,0,.07);color:#3c4a52}


.has-footer{bottom:100px}.alert{max-width:800px;border-radius:4px;padding:1.3em 2em;margin:1em 2em .5em 1.5em;font-size:1.1em;line-height:1.6em}
.alert>.button-clear.button-clear{float:right;line-height:1;color:#656262}
.alert a{color:inherit}
.alert-error{color:#735930;background-color:#FFFCF7;border-bottom:3px solid #FFF4E2}
.alert-error .button{color:#735930;background-color:transparent;border:1px solid currentcolor;margin:1em 0 .5em}
.alert-success{color:#154c15;background-color:#E9F4E9;border-bottom:3px solid #CCF0CC;margin:2em 2em 0 48px}
.alert-warning{color:#735930;background-color:#FFFCF7;border-bottom:3px solid #FFF4E2}

.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;list-style:none;font-size:14px;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;box-shadow:0 6px 12px rgba(0,0,0,.175);background-clip:padding-box}
.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;outline:0;background-color:#428bca}
.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857;color:#333;white-space:nowrap}

.bp-typeahead-popup{position:relative}
.gravatar-round{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%}
.verif .item{padding:2em 3em}
.verif h2{font-size:1.2em;margin-bottom:1em;font-family:inherit}
.verif p{margin:0}
.tier-limit{margin-right:1em}
.verif-0 .pane .view{background-color:#fff}
.verif-helptext{margin:2em 0}.verification-status{color:green}.verif h2.page-heading{margin:15px 48px;font-size:1.4em;font-family:inherit;}.verif .heading-paragraph{margin:15px 48px;font-size:1em;font-family:inherit}.verif .button.disabled,.verif .button[disabled]{opacity:1;background-color:#F4F5FA;color:#D1CEE5}
.list__padded{padding-left:16px;padding-right:16px}

.bar .button.bp-back-button:before{font-size:20px;width:20px}.bp-notransition{-webkit-transition:none!important;transition:none!important}

@media only screen and (min-width:602px){.center-content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}

.button.button-positive:hover{background-color:#435979;-webkit-transition:.4s;transition:.4s}
.button-discouraged{background-color:transparent;border:1px solid #A2A3A7;border-radius:2px}
.bp-big-action{text-decoration:none;text-transform:uppercase;background-color:#4A81C2;position:relative;display:inline-block;margin:0;padding:.25em 1.5em;min-width:10em;min-height:40px;border-width:0;border-style:solid;vertical-align:top;text-align:center;text-overflow:ellipsis;font-size:16px;cursor:pointer;border-radius:4px;font-family:inherit;color:#FFF;line-height:40px;letter-spacing:1px}

@media (max-width:500px){.bp-big-action{width:100%}}
.bp-icon.content{font-size:4em;display:inline;top:15px;left:18px;position:absolute}
.bp-icon.add{font-size:1.2em;vertical-align:sub}
@media (min-width:1200px){.bp-icon.add{margin-left:-32px}}

    .caption-subject {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 20px 10px 10px;
        border-bottom: 1px solid #eee;
    }

span {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
  font: inherit;
  font-size: 100%;
}

p {
  display: block;
  -webkit-margin-before: 1em;
  -webkit-margin-after: 1em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
}

.item h2 {
  margin: 0 0 4px;
  color: #51656f;
line-height: 1.6;
display: block;
  font-size: 1.4em!important;
  -webkit-margin-before: 0.83em;
  -webkit-margin-after: 0.83em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  font-weight: bold;
}

.bp-button-bar:after {
  clear: both;
}

.bp-button-bar:after, .bp-button-bar:before {
  display: table;
  content: "";
  line-height: 0;
}

.bp-icon {
padding: 12px;
border-radius: 25px;
  border: 1px solid #eee;
}

.getstarted > h2 {
  font-size: 1.6em!important;
margin-bottom: 4px;
}

.getstarted > .welcome-help {
  font-size: 1.1em;
}

.fa-1, .fa-2, .fa-3, .fa-4, .fa-5, .fa-6 {
  margin-right: 0.07142857em;
}


.fa-2 {
  font-size: 2em!important;
}


.fa-3 {
  font-size: 4em!important;
}



.sidebar-menu {
visible: hidden;
display: none;
}

.sidebar-menu toggle-others collapsed {
visible: hidden;
display: none;
}

.overflow-auto.has-header {
  top: 70px;
}

.item--borderless {
  border: none;
}

.panel {
  position: relative;
  background: #fff;
  padding: 1px 3px;
  border: 0;
  margin-bottom: 30px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
</style>

<!-- END PAGE HEADER-->

<div class="row margin-top-0">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="panel panel-default panel-border panel-shadow">

 <div class="container-fluid">
  <!-- BEGIN GETTING STARTED -->
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">    

    <div class="getstarted narrow">
      <div class="list card card--noedges">



        <div class="item item-text-wrap item--borderless">
<h2 class="welcome-message ng-binding" ng-hide="remainingCount == 0"><span lcl=""><b><strong>Welcome to EverPay,&nbsp;</strong></b></span><?= $this->user->Get('first_name') ?>&nbsp;<?= $this->user->Get('last_name') ?>!</h2>

          <p class="welcome-help ng-binding" ng-show="remainingCount &gt; 1" lcl="">You are 3 steps away from accepting payments.</p>
          <p class="welcome-help ng-hide" ng-show="remainingCount == 1" lcl="">You are 1 step away from accepting orders.</p>
          <div ng-show="remainingCount == 0" class="ng-hide">

            <div class="bp-button-bar" style="margin-bottom: 11px" ng-show="user.requiredTier == 0">
              <p class="welcome-help" lcl="">You are ready to accept payments!</p>
              <a href="<?= site_url('dashboard/'); ?>" ng-click="refreshMenu()" class="button button-discouraged" lcl="">Start Accepting Payments</a>
            </div>

            <alert show="user.requiredTier &gt; 0" type="&#39;error&#39;"><div class="alert alert-error ng-hide" ng-show="show">
  <span ng-transclude=""><span>
              Your account requires additional verification before you can process payments.</span><br>
              <a ui-sref="menu.verification" ng-click="refreshMenu()" class="button" href="<?= site_url('verification'); ?>">
                Complete verification ›
              </a>
            </span>
</div></alert>

          </div>

        </div>

        <div class="list list__padded">

          <div class="getstarted__list__item item item-thumbnail-left item-text-wrap list__item--highlight" ng-hide="user.verified">
<div class="bp-icon item-image icon--item-thumbnail">
            <i class="fa fa-envelope fa-2"></i>
</div>
            <h2 lcl="">Confirm your Email</h2>
            <p><span lcl="">To receive payment notifications, please confirm your address by clicking the link sent to <strong class="ng-binding"><?= $this->user->Get('email') ?></strong>.</span></p>
            <small ng-hide="user.verified" class="">
              <a class="small" ui-sref="menu.updateEmailAddress" lcl="" href="<?= site_url('settings/update-email-address'); ?>">Resend email or change address</a>
            </small>
          </div>
          <div class="getstarted__list__item item item-thumbnail-left item-text-wrap completed ng-hide" ng-show="user.verified">
<div class="bp-icon item-image icon--item-thumbnail">
            <i class="fa fa-envelope fa-2"></i>
</div>
            <h2 lcl="">Email Confirmed</h2>
            <p lcl="">Nice! your email address has been confirmed.</p>
          </div>


          <a ng-hide="!user.appliedTier || user.appliedTier &gt; -1" class="getstarted__list__item item item-thumbnail-left item-text-wrap" ng-class="{&#39;list__item--highlight&#39;: user.verified }" ui-sref="menu.verification0" href="<?= site_url('verification/0'); ?>">

<div class="bp-icon item-image icon--item-thumbnail">
             <i class="fa fa-user-secret fa-2"></i>
</div>
            <h2><span lcl="">Get Verified</span>&nbsp;›</h2>
            <p><span lcl="">Verify your business for basic payment processing.</span></p>
          </a>
          <div ng-show="!user.appliedTier || user.appliedTier &gt; -1" class="getstarted__list__item item item-thumbnail-left item-text-wrap completed ng-hide">
<div class="bp-icon item-image icon--item-thumbnail">
            <i class="fa fa-user-secret fa-2"></i>
</div>
            <h2><span lcl="">Get Verified</span></h2>
            <p><span lcl="">Great! We're reviewing your verification information and will get back to you shortly.</span></p>
          </div>


          <a class="getstarted__list__item item item-thumbnail-left item-text-wrap" ng-class="{&#39;list__item--highlight&#39;: user.appliedTier &gt; -1}" ng-hide="user.payoutInfo" ui-sref="menu.settlement.settlementSettings" href="<?= site_url('/settings/settlement'); ?>">

<div class="bp-icon item-image icon--item-thumbnail">
            <i class="fa fa-university fa-2"></i>
</div>
            <h2><span lcl="">Add a Bank Account</span>&nbsp;›</h2>
            <p lcl="">Add a bank account or bitcoin address to receive settlement for payments.</p>
          </a>
          <div class="getstarted__list__item item item-thumbnail-left item-text-wrap completed ng-hide" ng-show="user.payoutInfo" ui-sref="menu.settlement.settlementSettings">
<div class="bp-icon item-image icon--item-thumbnail">
            <i class="fa fa-university fa-2"></i>
</div>
            <h2 lcl="">Add a Bank Account</h2>
            <p lcl="">Add a bank account or bitcoin address to receive settlement for payments.</p>
          </div>

        </div>

      </div>

</div><!-- /.row -->


<div class="clearfix"></div>
    </div><!-- END/ . col-lg-6-->

   <div class="col-lg-6 col-md-6 col-sm-6">   
<div class="clearfix"></div> 

    </div><!-- END/ . col-lg-6-->
</div><!-- /.row -->

</div><!-- END panel-body-->
</div><!-- /.panel -->


</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<?= $this->load->view(branded_view('cp/footer')); ?>