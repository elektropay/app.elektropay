<?=
	$this->load->view(branded_view('cp/header'));
	error_reporting(0);
	?>
<style type="text/css">
a.item {
color:inherit;
text-decoration:none;
}

a.button {
text-decoration:none;
}

.button-discouraged {
background-color:transparent;
border:1px solid #a2a3a7;
border-radius:2px;
}

.button {
background-color:#f8f8f8;
color:#444;
position:relative;
display:inline-block;
min-width:52px;
min-height:47px;
border-radius:2px;
vertical-align:top;
text-align:center;
text-overflow:ellipsis;
font-size:16px;
line-height:43px;
cursor:pointer;
border-color:#b2b2b2;
border-style:solid;
border-width:0;
margin:0;
padding:0 12px;
}

.narrow {
max-width:800px;
margin-top:-20px;
}

.completed {
border-color:#1e981e;
}

.list:last-child.card {
margin-bottom:40px;
}

.card--noedges {
border:0;
box-shadow:none;
margin-top:0;
}

.card {
padding-top:1px;
padding-bottom:1px;
box-shadow:0 1px 2px rgba(0,0,0,.1);
}

.card,.list-inset {
overflow:hidden;
border-radius:2px;
background-color:#fff;
margin:20px 10px;
}

.card .item:last-child,.list-inset .item:last-child {
margin-bottom:-1px;
}

.card .item:last-child,.card .item:last-child .item-content,.list-inset .item:last-child,.list-inset .item:last-child .item-content,.padding>.list .item:last-child,.padding>.list .item:last-child .item-content {
border-bottom-right-radius:2px;
border-bottom-left-radius:2px;
}

.card .item,.list-inset .item,.padding-horizontal>.list .item,.padding>.list .item {
margin-right:0;
margin-left:0;
}

.getstarted__list__item {
opacity:.6;
border:0;
}

.list {
position:relative;
padding-top:1px;
padding-bottom:1px;
padding-left:0;
margin-bottom:20px;
}

.list__padded {
padding-left:16px;
padding-right:16px;
}

.getstarted .list__item--highlight {
z-index:100;
border-radius:2px;
border:1px solid #92d6f4;
opacity:1;
}

.item-thumbnail-left,.item-thumbnail-left .item-content {
padding-left:106px;
min-height:100px;
}

.item,.item h1,.item h2,.item h3,.item h4,.item h5,.item h6,.item p,.item-content,.item-content h1,.item-content h2,.item-content h3,.item-content h4,.item-content h5,.item-content h6,.item-content p {
overflow:hidden;
text-overflow:ellipsis;
white-space:nowrap;
}

.item {
background-color:#FFF;
color:#444;
position:relative;
z-index:2;
display:block;
font-size:16px;
border-color:rgba(0,0,0,.07);
border-style:solid;
border-width:1px;
margin:-1px;
padding:12px;
}

.item p {
color:#666;
font-size:14px;
}

p {
font-family:inherit;
line-height:1.8;
display:block;
-webkit-margin-before:1em;
-webkit-margin-after:1em;
-webkit-margin-start:0;
-webkit-margin-end:0;
margin:10px 0 0 4px;
}

.item-thumbnail-left .item-image,.item-thumbnail-left>img:first-child {
position:absolute;
top:10px;
left:10px;
max-width:80px;
max-height:80px;
width:100%;
}

.ng-hide {
display:none!important;
}

.getstarted i {
color:#51656f;
}

.icon--item-thumbnail {
font-size:65px;
padding-top:5px;
border:1px solid #51656f;
border-radius:25px;
}

.item-thumbnail-left .item-image {
position:relative;
top:10px;
left:10px;
right:30px;
max-width:60px;
max-height:100px;
width:50%;
border:1px solid #51656f;
border-radius:25px;
line-height:2.9em;
margin-right:30px;
float:left;
display:inline-block;
}

.item-image {
text-align:center;
border:1px solid #51656f;
border-radius:25px;
padding:0;
}

.button.button--item-bottom {
margin-top:0;
}

a.getstarted__list__item:hover {
background-color:rgba(146,214,244,.1);
}

.verified__success {
margin:30px 0;
}

.getstarted .completed h2,.getstarted .completed i,.getstarted .completed p {
color:#258425;
}

.bp-button-bar:after,.bp-button-bar:before {
display:table;
content:"";
line-height:0;
}

.bp-button-bar:after {
clear:both;
}

.bp-button-bar>div.left-buttons {
float:left;
}

.bp-button-bar>div.right-buttons {
float:right;
}

.alert-btn {
margin-top:-5px;
}

.bp-list-item-icon {
position:absolute;
top:10px;
left:10px;
max-width:80px;
max-height:80px;
width:100px;
height:100px;
}

.card--getstarted {
max-width:600px;
margin:auto;
}

.landing {
background-color:#002855;
}

.landing__button {
text-transform:uppercase;
border-width:1px;
}

.currencyFlag {
display:inline;
margin-left:1em;
vertical-align:bottom;
}

.bank-account-card {
font-size:1.25em;
border:1px solid #cacaca;
border-radius:.25em;
max-width:500px;
margin:2em 0 1.5em;
padding:1em 2em 1em 1em;
}

.bank-account-card .bank-label {
color:#64acff;
font-weight:600;
}

.bank-account-card .active {
color:#25b246;
float:right;
}

.bank-account-card .not-active {
float:right;
color:#ff5460;
}

.bank-account-card p {
font-size:1.5em;
color:#7b7b7b;
margin:0 0 15px;
}

.bank-account-card h3 {
font-weight:400;
}

.bank-account-card .btc-address {
font-size:1em;
}

.bank-account-card .bank-address {
font-size:1em;
margin:1em 0 .5em;
}

.settlement-helptext {
margin:15px 0 25px;
}

.right-text {
text-align:right;
}

html input.bp-slider {
background:0;
border:0;
}

html input.bp-slider[disabled] {
opacity:.3;
}

.bank-fields>div {
margin-bottom:1.2em;
}

.bank-fields>div>:first-child {
font-size:.8em;
margin-bottom:.2em;
}

.bank-fields>div>:nth-child(2) {
font-weight:700;
}

.button-link {
background:none!important;
border:0;
border-bottom:1px solid #64acff;
cursor:pointer;
color:#64acff;
-webkit-align-self:center;
-ms-flex-item-align:center;
align-self:center;
margin-left:30px;
font-family:inherit;
font-size:1.15em;
padding:0!important;
}

.bar.bar-bitpay {
color:#3c4a52;
border-color:rgba(0,0,0,.07);
}

.has-footer {
bottom:100px;
}

.alert {
max-width:800px;
border-radius:4px;
font-size:1.1em;
line-height:1.6em;
margin:1em 2em .5em 1.5em;
padding:1.3em 2em;
}

.alert>.button-clear.button-clear {
float:right;
line-height:1;
color:#656262;
}

.alert a {
color:inherit;
}

.alert-error .button {
color:#735930;
background-color:transparent;
border:1px solid currentcolor;
margin:1em 0 .5em;
}

.alert-success {
color:#154c15;
background-color:#e9f4e9;
border-bottom:3px solid #ccf0cc;
margin:2em 2em 0 48px;
}

.dropdown-menu {
position:absolute;
top:100%;
left:0;
z-index:1000;
display:none;
float:left;
min-width:160px;
list-style:none;
font-size:14px;
background-color:#fff;
border:1px solid rgba(0,0,0,.15);
border-radius:4px;
box-shadow:0 6px 12px rgba(0,0,0,.175);
background-clip:padding-box;
margin:2px 0 0;
padding:5px 0;
}

.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover {
color:#fff;
text-decoration:none;
outline:0;
background-color:#428bca;
}

.dropdown-menu>li>a {
display:block;
clear:both;
font-weight:400;
line-height:1.42857;
color:#333;
white-space:nowrap;
padding:3px 20px;
}

.bp-typeahead-popup {
position:relative;
}

.gravatar-round {
border-radius:50%;
-moz-border-radius:50%;
-webkit-border-radius:50%;
}

.verif .item {
padding:2em 3em;
}

.verif h2 {
font-size:1.2em;
margin-bottom:1em;
font-family:inherit;
}

.tier-limit {
margin-right:1em;
}

.verif-0 .pane .view {
background-color:#fff;
}

.verif-helptext {
margin:2em 0;
}

.verification-status {
color:green;
}

.verif h2.page-heading {
font-size:1.4em;
font-family:inherit;
margin:15px 48px;
}

.verif .heading-paragraph {
font-size:1em;
font-family:inherit;
margin:15px 48px;
}

.verif .button.disabled,.verif .button[disabled] {
opacity:1;
background-color:#f4f5fa;
color:#d1cee5;
}

.bar .button.bp-back-button:before {
font-size:20px;
width:20px;
}

.bp-notransition {
-webkit-transition:none!important;
transition:none!important;
}

.button.button-positive:hover {
background-color:#435979;
-webkit-transition:.4s;
transition:.4s;
}

.bp-big-action {
text-decoration:none;
text-transform:uppercase;
background-color:#4a81c2;
position:relative;
display:inline-block;
min-width:10em;
min-height:40px;
vertical-align:top;
text-align:center;
text-overflow:ellipsis;
font-size:16px;
cursor:pointer;
border-radius:4px;
font-family:inherit;
color:#FFF;
line-height:40px;
letter-spacing:1px;
border-style:solid;
border-width:0;
margin:0;
padding:.25em 1.5em;
}

.bp-icon.content {
font-size:4em;
display:inline;
top:15px;
left:18px;
position:absolute;
}

.bp-icon.add {
font-size:1.2em;
vertical-align:sub;
}

.caption-subject {
font-size:18px;
font-weight:700;
border-bottom:1px solid #eee;
margin:10px 20px 10px 10px;
}

.item h2 {
color:#51656f;
line-height:1.6;
display:block;
font-size:1.4em!important;
-webkit-margin-before:.83em;
-webkit-margin-after:.83em;
-webkit-margin-start:0;
-webkit-margin-end:0;
font-weight:700;
margin:0 0 4px;
}

.bp-icon {
border-radius:25px;
border:1px solid #eee;
padding:16px;
}

.getstarted>h2 {
font-size:1.6em!important;
margin-bottom:5px;
}

.getstarted>.welcome-help {
font-size:1.1em;
line-height:1.1em;
}

.fa-1,.fa-2,.fa-3,.fa-4,.fa-5,.fa-6 {
margin-right:.07142857em;
}

.fa-2 {
font-size:1em!important;
}

.fa-3 {
font-size:.4em!important;
}

.item--borderless {
border:0;
}

.panel {
position:relative;
background:#fff;
border:0;
margin-bottom:30px;
-webkit-box-shadow:none;
-moz-box-shadow:none;
box-shadow:none;
padding:1px 3px;
}

// Sujith .cbp-spmenu {
background:#47a3da;
position:fixed;
}

.cbp-spmenu a:hover {
background:#258ecd;
}

.cbp-spmenu a:active {
background:#afdefa;
color:#47a3da;
}

.cbp-spmenu-vertical {
width:0;
height:100%;
top:0;
z-index:1000;
}

.cbp-spmenu-horizontal {
width:100%;
height:150px;
left:0;
z-index:1000;
overflow:hidden;
}

.cbp-spmenu-horizontal h3 {
height:100%;
width:20%;
float:left;
}

.cbp-spmenu-horizontal a {
float:left;
width:20%;
border-left:1px solid #258ecd;
padding:.8em;
}

.cbp-spmenu-right {
float:right;
position:absolute;
right:60px;
z-index:-999!important;
}

.cbp-spmenu-left.cbp-spmenu-open {
left:0;
}

.cbp-spmenu-right.cbp-spmenu-open {
right:0;
width:90%;
z-index:99999!important;
}

.cbp-spmenu-top {
top:-150px;
}

.cbp-spmenu-bottom {
bottom:-150px;
}

.cbp-spmenu-top.cbp-spmenu-open {
top:0;
}

.cbp-spmenu-bottom.cbp-spmenu-open {
bottom:0;
}

.cbp-spmenu {
background:#fff;
}

.bp-section .bp-inside,section .bp-inside {
max-width:950px;
padding:2em 2em 2em 48px;
}

.bp-section,section {
border-bottom:1px solid rgba(0,0,0,0.07);
}

.cbp-spmenu-push {
overflow-x:hidden;
position:relative;
left:0;
}

.cbp-spmenu-push-toright {
left:240px;
}

.cbp-spmenu,.cbp-spmenu-push {
-webkit-transition:all .3s ease;
-moz-transition:all .3s ease;
transition:all .3s ease;
}

textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"],.uneditable-input {
background-color:#fff;
border:1px solid #ccc;
box-shadow:0 1px 1px rgba(0,0,0,0.075) inset;
transition:border .2s linear 0 .2s linear 0;
}

select,textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"],.uneditable-input {
border-radius:4px;
color:#555;
display:inline-block;
font-size:14px;
height:40px!important;
line-height:18px;
margin-bottom:8px;
vertical-align:middle;
padding:8px 10px!important;
}

ion-side-menu-content.pane {
left:275px;
transform:translate3d(0px,0px,0px)!important;
width:calc(100%-275px);
}

.bp-form .textfield-label {
color:#838388;
font-weight:500;
letter-spacing:.05em;
text-transform:uppercase;
margin:0 2em 10px 0;
}

.ion-chevron-left::before {
content:"";
}

.bp-form input {
background-color:#fff;
border:1px solid #d2dce3;
border-radius:5px;
color:#596a81;
font-size:1.2em;
line-height:2em;
width:400px;
padding:5px 10px;
}

.bar.bar-bitpay .title,.bar.bar-bitpay button,.bar.bar-bitpay button.active {
color:#3c4a52;
}

.bar-bitpay>.title {
font-size:20px;
height:87px;
line-height:87px;
margin:0;
}

.pane,.view {
background-color:#fcfcfd;
bottom:0;
height:100%;
left:0;
overflow:hidden;
right:0;
top:0;
width:100%;
}

.pane {
transform:translate3d(0px,0px,0px);
z-index:1;
}

.button-icon {
background:rgba(0,0,0,0) none repeat scroll 0 0;
min-width:initial;
transition:opacity .1s ease 0;
display:inline-block;
font-family:Ionicons;
font-style:normal;
font-variant:normal;
font-weight:400;
line-height:1;
text-rendering:auto;
text-transform:none;
border-color:transparent;
padding:0 6px;
}

.settlement-settings__current-info .bp-big-action {
background-color:#4a81c2;
border-radius:4px;
color:#fff;
cursor:pointer;
display:inline-block;
font-size:16px;
letter-spacing:1px;
line-height:40px;
min-height:40px;
min-width:10em;
position:relative;
text-align:center;
text-decoration:none;
text-overflow:ellipsis;
text-transform:uppercase;
vertical-align:top;
border-style:solid;
border-width:0;
margin:0;
padding:.25em 1.5em;
}

.bp-form label {
margin-bottom:1.5em;
margin-right:2em;
}

button,input,label,select,textarea {
font-size:14px;
font-weight:400;
line-height:1.42857;
}

#topcontrol {
z-index:99999!important;
}

.overflow-auto {
bottom:0;
left:0;
overflow-x:hidden;
overflow-y:auto;
position:absolute;
right:0;
top:0;
}

.scroll-content {
bottom:0;
height:auto;
left:0;
margin-top:-1px;
overflow:auto;
padding-top:1px;
position:absolute;
right:0;
top:0;
width:auto;
}

#cbp-spmenu-s2 {
position:absolute;
right:10%;
}

#cbp-spmenu-s7 {
position:absolute;
right:112px;
}

.errorClass {
border-color:red!important;
}

.item-body h1,.item-body h2,.item-body h3,.item-body h4,.item-body h5,.item-body h6,.item-body p,.item-complex.item-text-wrap,.item-complex.item-text-wrap .item-content,.item-complex.item-text-wrap h1,.item-complex.item-text-wrap h2,.item-complex.item-text-wrap h3,.item-complex.item-text-wrap h4,.item-complex.item-text-wrap h5,.item-complex.item-text-wrap h6,.item-complex.item-text-wrap p,.item-text-wrap,.item-text-wrap .item,.item-text-wrap .item-content,.item-text-wrap h1,.item-text-wrap h2,.item-text-wrap h3,.item-text-wrap h4,.item-text-wrap h5,.item-text-wrap h6,.item-text-wrap p,.item-text-wrap p {
overflow:visible;
white-space:normal;
}

i,span {
border:0;
vertical-align:baseline;
font:inherit;
font-size:100%;
margin:0;
padding:0;
}

.getstarted .alert,.verif p {
margin:0;
}

.alert-error,.alert-warning {
color:#735930;
background-color:#fffcf7;
border-bottom:3px solid #fff4e2;
}

.sidebar-menu,.sidebar-menu toggle-others collapsed {
visible:hidden;
display:none;
}

.overflow-auto.has-header,.has-header {
top:44px;
}

.cbp-spmenu-left,.cbp-spmenu-push-toleft {
left:-240px;
}

@media only screen and min-width602px{
.center-content {
display:flex;
-webkit-box-align:center;
-webkit-align-items:center;
-ms-flex-align:center;
align-items:center;
-webkit-box-pack:center;
-webkit-justify-content:center;
-ms-flex-pack:center;
justify-content:center;
}

.getstarted h2 {
font-size:1.2em;
}

.getstarted .welcome-help {
font-size:1.1em;
}
}

@mediamax-width500px{
.bp-big-action {
width:100%;
}
}

@mediamin-width1200px{
.bp-icon.add {
margin-left:-32px;
}
}

@media screen and max-width551875em{
.cbp-spmenu-horizontal {
font-size:75%;
height:110px;
}

.cbp-spmenu-top {
top:-110px;
}

.cbp-spmenu-bottom {
bottom:-110px;
}
}

@media screen and max-height26375em{
.cbp-spmenu-vertical {
font-size:90%;
width:0;
}

.cbp-spmenu-left,.cbp-spmenu-push-toleft {
left:-190px;
}

.cbp-spmenu-push-toright {
left:190px;
}
}
</style>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
	<ion-side-menu-content drag-content="false" class="menu-content pane">
		<ion-nav-bar class="bar-bitpay bar bar-header nav-bar nav-title-slide-ios7">
			<div class="buttons left-buttons"> <span class="">
				<button on-touch="onBackButtonClicked()" class="close_me button button-icon icon ion-chevron-left bp-back-button bp-notransition"></button>
				<button class="button button-icon icon ion-navicon bp-notransition ng-hide" menu-toggle="left"></button>
				</span>
			</div>
			<h1 class="title ng-binding" style="left:46px;right:46px">Basic Verification</h1>
			<div class="buttons right-buttons"> </div>
		</ion-nav-bar>
		<ion-nav-buttons side="left" style="display:none"></ion-nav-buttons>
		<ion-nav-view name="menuContent" class="">
			<ion-view bp-back-button-sref="menu.getstarted" class="verif-0 pane" lcl-attr="title|page title" style="">
				<ion-content class="scroll-content ionic-scroll overflow-auto has-header">
					<div class="bp-section">
						<div class="bp-inside">
							<p>Basic verification will allow you to process real payments of up to $100 daily and $500 annually.</p>
							<p>We'll send you a confirmation email within a few minutes of submitting your verification.</p>
						</div>
					</div>
					<alert type="alert.type" show="alert.message">
						<div ng-show="show" class="alert alert- ng-hide">
							<span ng-transclude=""><span class="ng-binding"></span></span>
						</div>
					</alert>
					<form action="<?php echo base_url().'get_started/update_business'; ?>" method="post" id="business_details" class="bp-form ng-pristine ng-invalid ng-invalid-required" ng-submit="verifyBusinessInfo(businessInfo)" novalidate="" name="businessInfo">
						<div class="bp-section">
							<div class="bp-inside">
								<div class="row responsive-md">
									<div>
										<div lcl="" class="textfield-label">Address of Business</div>
										<div class="address-container">
											<input type="text" required="" autocomplete="off" ng-pattern="patternAddress" ng-model="verificationData.merchantAddress1" placeholder="Street Address" google-autocomplete="autofillAddress(data)" name="business_address" value="<?=$clients['business_address'];?>" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
											<input type="text" ng-pattern="patternAddress" ng-model="verificationData.merchantAddress2" placeholder="bldg, dept, or unit #" name="business_address2" value="<?=$clients['business_address2'];?>" class="ng-pristine ng-valid ng-valid-pattern">
										</div>
										<div class="address-container">
											<input type="text" required="" ng-pattern="patternAddress" ng-model="verificationData.merchantCity" placeholder="City" name="business_city" value="<?=$clients['business_city'];?>" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
											<input type="text" required="" ng-pattern="patternAddress" ng-model="verificationData.merchantState" placeholder="State/Province/Region" name="business_zip" value="<?=$clients['business_zip'];?>" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
											<input type="text" required="" ng-pattern="patternAddress" ng-model="verificationData.merchantZip" placeholder="ZIP/Postal Code" name="business_state" value="<?=$clients['business_state'];?>" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
										</div>
										<i bp-show="(businessInfo.address.$invalid &amp;&amp; businessInfo.address.hasVisited) || (businessInfo.city.$invalid &amp;&amp; businessInfo.city.hasVisited) || (businessInfo.state.$invalid &amp;&amp; businessInfo.state.hasVisited) || (businessInfo.postal_code.$invalid &amp;&amp; businessInfo.postal_code.hasVisited)" class="generic-form-error icon-left assertive ion-android-close bp-error invisible"><span lcl="" class="dark padding-left">Please enter a valid address.</span></i>
									</div>
								</div>
								<div class="row responsive-md">
									<label class="textfield">
										<div lcl="" class="textfield-label">Country</div>
										<select geoname="country_short" id="country" name="business_country" class="form-control required" required>
											<option value="">Please select country</option>
											<? foreach ($countries as $country) { ?>
											<option <?php if($clients['business_country']==$country['iso2']){?> selected="selected" <?php } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option>
											<? } ?>
										</select>
										<i bp-show="businessInfo.country.$invalid &amp;&amp; businessInfo.country.hasVisited" class="generic-form-error icon-left assertive ion-android-close bp-error invisible"><span lcl="" class="dark padding-left">In what country are you based?</span></i>
									</label>
									<!-- <label>
										<div lcl="" class="textfield-label">Industry</div>
										<input type="text" required="" autocomplete="off" typeahead="industry.name as industry.name for industry in industries | typeaheadFilter:$viewValue" ng-model="verificationData.merchantIndustry" placeholder="Begin typing..." lcl-attr="placeholder" bp-industry-input="" name="business_industry" value="<?=$clients['business_industry'];?>" class="ng-pristine ng-invalid ng-invalid-required" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-026-9358">
										<div typeahead-popup="" id="typeahead-026-9358" matches="matches" active="activeIdx" select="select(activeIdx)" query="query" class="bp-typeahead-popup"></div>
										<i bp-show="businessInfo.industry.$invalid &amp;&amp; businessInfo.industry.hasVisited" class="generic-form-error icon-left assertive ion-android-close bp-error invisible"><span lcl="" class="dark padding-left">In what industry do you operate?</span></i>
									</label> -->
								</div>
								<p>Please ensure that your website or business profile is online and publicly accessible before submitting your verification.</p>
								<div class="row responsive-md">
									<label>
										<div lcl="" class="textfield-label">Website or Business Profile</div>
										<input type="text" required="" ng-model="verificationData.merchantWebsite" name="business_url" value="<?=$clients['business_url'];?>" placeholder="Web address" ng-pattern="/.+\..{2,}/" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
										<i bp-show="businessInfo.website.$invalid &amp;&amp; businessInfo.website.hasVisited" class="generic-form-error icon-left assertive ion-android-close bp-error invisible"><span lcl="" class="dark padding-left">Please enter a valid URL.</span></i>
									</label>
									<label>
										<div lcl="" class="textfield-label">Phone Number</div>
										<input type="text" required="" ng-model="verificationData.merchantPhone" placeholder="" name="business_phone" value="<?=$clients['business_phone'];?>" ng-pattern="/^[^a-zA-Z]+$/" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
										<i bp-show="businessInfo.merchantPhone.$invalid &amp;&amp; businessInfo.merchantPhone.hasVisited" class="generic-form-error icon-left assertive ion-android-close bp-error invisible"><span lcl="" class="dark padding-left">Please enter a valid contact phone number.</span></i>
									</label>
								</div>
								<div class="row responsive-md">
									<button lcl="" class="bp-big-action ladda-button" id="verify_btn" ladda="submitting" ng-disabled="user.appliedTier &gt;= 0" ng-class="{'bp-invalid-submit': businessInfo.submissionAttempted }" data-style="zoom-in"><span class="ladda-label"><span>Verify</span></span><span class="ladda-spinner"></span></button>
									<div class="padding-left">
										<p ng-show="businessInfo.submissionAttempted" class="padding-left padding-top bold ng-hide">Please correct the issues above.</p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</ion-content>
			</ion-view>
		</ion-nav-view>
	</ion-side-menu-content>
</nav>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s7">
	<ion-side-menu-content drag-content="false" class="menu-content pane">
		<ion-nav-bar class="bar-bitpay bar bar-header nav-bar nav-title-slide-ios7">
			<div class="buttons left-buttons"> <span class="">
				<button on-touch="onBackButtonClicked()" class="close_me button button-icon icon ion-chevron-left bp-back-button bp-notransition"></button>
				<button class="button button-icon icon ion-navicon bp-notransition ng-hide" menu-toggle="left"></button>
				</span>
			</div>
			<h1 class="title ng-binding" style="left:42px;right:42px">Settlement Settings</h1>
			<div class="buttons right-buttons"> </div>
		</ion-nav-bar>
		<ion-nav-buttons side="left" style="display:none"></ion-nav-buttons>
		<ion-nav-view name="menuContent" class="">
			<ion-view bp-disable-back-button="isCompleteMenu" bp-back-button-sref="menu.getstarted" lcl-attr="title|page title" class="pane" style="">
				<ion-content class="settlement-settings scroll-content ionic-scroll overflow-auto has-header">
					<alert lcl="" type="'error'" show="settlementSettings.pendingSettingsChanges" animation="slide-in-up">
						<div ng-show="show" class="alert alert-error ng-hide">
							<span ng-transclude=""><span>There are pending changes to your settlement settings. Please confirm these changes by following the instructions in your email.</span></span>
						</div>
					</alert>
					<div class="bp-container">
						<div class="bp-section">
							<div class="bp-inside">
								<p>How would you like to receive settlement for payments?</p>
							</div>
						</div>
						<ng-include src="'components/settlement-settings/settlement-settings-bank.html'">
							<section>
								<div class="settlement-settings__current-info">
									<div class="bp-section">
										<div class="bp-inside">
											<h3 lcl="">Bank Account</h3>
											<div ng-if="!bankInfo">
												<p lcl="" class="settlement-helptext">Link a bank account to receive daily settlements in your local currency.</p>
												<a lcl="" ui-sref="menu.settlement.settlementSettingsAddBank" class="bp-big-action" href="/dashboard/settings/settlement/bank/">Add Bank Account</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</ng-include>
						<ng-include src="'components/settlement-settings/settlement-settings-bitcoin.html'">
							<section>
								<div class="settlement-settings__current-info">
									<div class="bp-section">
										<div class="bp-inside">
											<h3 lcl="">Bitcoin Address</h3>
											<div ng-show="!btcInfo" class="">
												<p lcl="" class="settlement-helptext">Connect a bitcoin address to receive all or part of your settlement in bitcoin.</p>
												<a lcl="" ui-sref="menu.settlement.settlementSettingsAddBitcoin" class="bp-big-action" href="/dashboard/settings/settlement/bitcoin/">Add Bitcoin Address</a>
											</div>
											<div ng-show="btcInfo" class="ng-hide">
												<div class="bank-account-card card">
													<div class="row">
														<div class="col col-25">
															<img width="75%" src="img/currencies/BTC.png">
														</div>
														<div class="col col-50">
															<h3 class="ng-binding"></h3>
															<div class="ng-binding">0%</div>
														</div>
														<div class="col col-25 right-text">
															<a ui-sref="menu.settlement.settlementSettingsAddBitcoin" href="/dashboard/settings/settlement/bitcoin/">Edit</a>
														</div>
													</div>
													<div class="center-content">
														<p class="btc-address ng-binding"></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</ng-include>
					</div>
				</ion-content>
			</ion-view>
		</ion-nav-view>
	</ion-side-menu-content>
</nav>
<div class="clearfix"></div>
<div class="row margin-top-0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default panel-border panel-shadow">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="getstarted narrow">
							<div class="list card card--noedges">
								<div class="item item-text-wrap item--borderless">
									<h2 class="welcome-message ng-binding" ng-hide="remainingCount == 0"><span lcl=""><b><strong>Welcome to EverPay,&nbsp;</strong></b></span><?= $this->user->Get('first_name') ?>&nbsp;<?= $this->user->Get('last_name') ?>!</h2>
									<p class="welcome-help ng-binding" ng-show="remainingCount &gt; 1" lcl="">You are <?php echo 3 - $verified_count; ?> step(s) away from accepting payments.</p>
									<p class="welcome-help ng-hide" ng-show="remainingCount == 1" lcl="">You are 1 step away from accepting orders.</p>
									<div ng-show="remainingCount == 0" class="ng-hide">
										<div class="bp-button-bar" style="margin-bottom:11px" ng-show="user.requiredTier == 0">
											<p class="welcome-help" lcl="">You are ready to accept payments!</p>
											<a href="<?= site_url('dashboard/'); ?>" ng-click="refreshMenu()" class="button button-discouraged" lcl="">Start Accepting Payments</a>
										</div>
										<alert show="user.requiredTier &gt; 0" type="&#39;error&#39;">
											<div class="alert alert-error ng-hide" ng-show="show">
												<span ng-transclude=""><span>
												Your account requires additional verification before you can process payments.</span><br>
												<a ui-sref="menu.verification" ng-click="refreshMenu()" class="button" href="<?= site_url('verification'); ?>">
												Complete verification ›
												</a>
												</span>
											</div>
										</alert>
									</div>
								</div>
								<div class="list list__padded">
								<?php if(!$verified['email']) { ?>
									<a id="showRight0" class="getstarted__list__item item item-thumbnail-left item-text-wrap" href="<?php echo base_url().'get_started/resend_email_link';?>">
										<div class="bp-icon item-image icon--item-thumbnail">
											<i class="fa fa-envelope fa-3"></i>
										</div>
										<h2 lcl="">Confirm your Email</h2>
										<p><span lcl="">To receive payment notifications, please confirm your address by clicking the link sent to <strong class="ng-binding"><?= $this->user->Get('email') ?></strong>.</span></p>
										<small ng-hide="user.verified" class="">
										<a class="small" ui-sref="menu.updateEmailAddress" lcl="" href="<?= site_url('settings/update-email-address'); ?>">Resend email or change address</a>
										</small>
									</a>
								<?php } else { ?>
									<div class="getstarted__list__item item item-thumbnail-left item-text-wrap completed" ng-show="user.verified">
										<div class="bp-icon item-image icon--item-thumbnail">
											<i class="fa fa-envelope fa-3"></i>
										</div>
										<h2 lcl="">Email Confirmed</h2>
										<p lcl="">Nice! your email address has been confirmed.</p>
									</div>
								<?php }
								if(!$verified['business']) { ?>
									<a id="showRight" class="getstarted__list__item item item-thumbnail-left item-text-wrap">
										<div class="bp-icon item-image icon--item-thumbnail">
											<i class="fa fa-user-secret fa-3"></i>
										</div>
										<h2><span lcl="">Get Verified</span>&nbsp;›</h2>
										<p><span lcl="">Verify your business for basic payment processing.</span></p>
									</a>
								<?php } else { ?>
									<div class="getstarted__list__item item item-thumbnail-left item-text-wrap completed">
										<div class="bp-icon item-image icon--item-thumbnail">
											<i class="fa fa-user-secret fa-3"></i>
										</div>
										<h2><span lcl="">Get Verified</span></h2>
										<p><span lcl="">Great! We're reviewing your verification information and will get back to you shortly.</span></p>
									</div>
								<?php }
								if(!$verified['bank']) { ?>
									<a id="showRight1" class="getstarted__list__item item item-thumbnail-left item-text-wrap">
										<div class="bp-icon item-image icon--item-thumbnail">
											<i class="fa fa-university fa-3"></i>
										</div>
										<h2><span lcl="">Add a Bank Account</span>&nbsp;›</h2>
										<p lcl="">Add a bank account or bitcoin address to receive settlement for payments.</p>
									</a>
								<?php } else { ?>
									<div class="getstarted__list__item item item-thumbnail-left item-text-wrap completed">
										<div class="bp-icon item-image icon--item-thumbnail">
											<i class="fa fa-university fa-3"></i>
										</div>
										<h2 lcl="">Add a Bank Account</h2>
										<p lcl="">Add a bank account or bitcoin address to receive settlement for payments.</p>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
/*<![CDATA[*/
jQuery(document).ready(function() {
	jQuery(".close_me").on("click", function() {
		jQuery(".cbp-spmenu-right").css("position", "absolute");
		jQuery(".cbp-spmenu-right").css("right", "2px !important");
		jQuery("#cbp-spmenu-s2").removeClass("cbp-spmenu-open");
		jQuery("#cbp-spmenu-s7").removeClass("cbp-spmenu-open")
	});
	jQuery("#showRight").on("click", function() {
		jQuery("#cbp-spmenu-s2").addClass("cbp-spmenu-open");
		return false
	});
	jQuery("#showRight1").on("click", function() {
		jQuery("#cbp-spmenu-s7").addClass("cbp-spmenu-open");
		return false
	});
	$("#business_details").submit(function(e) {
		e.preventDefault();
		e;
		var a = 0;
		$("#business_details input").each(function() {
			if (this.value == "") {
				a = 1;
				$(this).addClass("errorClass")
			} else {
				$(this).removeClass("errorClass")
			}
		});
		if (a == 1) {
			return false
		}
		$("#verify_btn").html('<span class="ladda-label"><span>Saving...</span></span><span class="ladda-spinner"></span>');
		$(this)[0].submit();
		// $.ajax({
		// 	type: "POST",
		// 	url: "https://everpayinc.com/get_started/update_business",
		// 	data: $(this).serialize(),
		// 	success: function() {
		// 		$("#verify_btn").html('<span class="ladda-label"><span>Saved</span></span><span class="ladda-spinner"></span>')
		// 	}
		// });
	})
}); /*]]>*/
</script>
<script type="text/javascript">$(window).load(function(){});</script>
<?= $this->load->view(branded_view('cp/footer')); ?>