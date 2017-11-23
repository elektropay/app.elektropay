<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/rwd-table.min.js') . '"></script>'));?>
 <style rel="stylesheet" type="text/css">
 
 #content {
    background: #FFF;
    padding-top: 55px!important;
    margin-bottom: 0px!important;
    position: relative;
    min-height: 520px;
 }
 
#PageContentRow{
    padding: 0;
    margin-top: 10px!important;
}

.panel .panel-body {
    padding: 0;
    padding-top: 10px!important;
    color: #979898;
}

.panel-body {
  font-size: 13px;
  text-align: center;
}

.panel-body h3 {
  margin-top: 25px !important;
  margin-top: 10px !important;
  text-align: center;
}

.panel-body p {
  margin-top: 10px !important;
  margin-top: 10px !important;
  text-align: left;
}

.panel-body i {
  margin-top: 10px !important;
  padding: 10px !important;
text-align: center;
}

.panel-body .btn {
text-align: center;
}

pre {
  white-space: pre-wrap;
  font-size: 14px!important;
}

code {
  border: 0px solid #e1e1e1;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0px 4px rgba(0, 0, 0, 0.1);
}

.wrapper h5 {
    text-transform: uppercase;
    border-bottom: 1px solid #d0d2d3;
    padding-bottom: 6px;
    letter-spacing: .5px;
    font-size: 1rem;
}

.content-header {
    margin-bottom: 10px;
    margin-top: -10px;
}

.content-header p {
    margin-top: 0;
    color: #7a7f82;
}

h1, h2, h3, h4, h5, p, pre {
    margin: 20px 0;
}


h4, h5 {
    font-weight: bold;
}

p {
    line-height: 1.8;
	    color: #7a7f82;
		font-size: 14px!important;
}

i, cite, em, var, address, dfn {
    font-style: italic;
}

.CodeMirror {
    font-family: monospace;
    height: 1580px;
    color: black;
    border: dotted 1px #999;
}


.payment-page .nav {
    margin-bottom: 20px;
}
.nav.nav-tabs {
    border-bottom: 1px solid #f1f1f1;
    margin-bottom: 20px;
}

.tab-content>.active {
    display: block;
}

.tab-content>.tab-pane {
    display: ;
}

.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle;
}

.btn-group>.btn:first-child {
    margin-left: 0;
}
.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    pointer-events: none;
    cursor: not-allowed;
    filter: alpha(opacity=65);
    box-shadow: none;
    opacity: .65;
}
.btn-group>.btn, .btn-group-vertical>.btn {
    position: relative;
    float: left;
}
.btn, a.btn {
    font-size: 12px;
}
.btn, a.btn {
    transition: background-color .2s ease;
    text-transform: none;
    letter-spacing: 2px;
    border: 0;
    font-weight: bold;
    border: 1px solid #d0d2d3;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 3px;
}

.btn, a.btn {
    font-size: 12px;
}
.btn {
    padding-top: 8px;
    padding-bottom: 8px;
    background: 0;
}

.btn {
    display: inline-block;
    padding: 6px 12px;
	border-color: #d0d2d3;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
}

.btn .caret {
    margin-left: 0;
}

.btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default, .btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover, .btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus, .btn-default.disabled.focus, .btn-default[disabled].focus, fieldset[disabled] .btn-default.focus, .btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active, .btn-default.disabled.active, .btn-default[disabled].active, fieldset[disabled] .btn-default.active {
    border-color: #ccc;
}
.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    pointer-events: none;
    cursor: not-allowed;
    filter: alpha(opacity=65);
    box-shadow: none;
    opacity: .65;
}
.btn.btn-default, a.btn.btn-default {
    border-color: #d0d2d3;
}
.btn {
    letter-spacing: .08em;
}

.btn-toolbar {
    margin-bottom: 20px;
    margin-left: -5px;
}


.btn-primary {
    color: white;
    background-color: #428bca!important;
    border-color: #357ebd;
}

.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}

.dropdown-menu {
    min-width: 100%;
    overflow: hidden;
    padding: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

ul, ol {
    margin-top: 0;
    margin-bottom: 10px;

.browser {
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 10px 0 0 0;
}


.browser-content {
    background: #fff;
    border-radius: 0 0 5px 5px;
}

.browser-toolbar {
    border-bottom: 1px solid #ddd;
    padding: 6px;
}

.browser-icons {
    float: left;
    padding: 7px 0 0 0;
    margin-left: 4px;
}

.payment-page #try-paymentpage-preview {
    width: 100%;
}
.browser iframe {
    border-radius: 0 0 5px 5px;
    border: 0;
    width: 100%;
    height: 600px;
    display: block;
}
.tab-content>.tab-pane {
    display: none;
}

.custom-payment-page .loading-spin {
    position: absolute;
    right: 45px;
    top: 90px;
}


.loading-spin {
    margin-left: auto;
    margin-right: auto;
    width: 0;
    -webkit-perspective: 1000000;
    transition: opacity 2s ease-in;
    -webkit-animation: fadein 2s;
    animation: fadein 2s;
    -webkit-animation-delay: .7s;
}


.spinner-css.small {
    font-size: 20px;
    color: #9585bf!important;
}

.spinner-css {
    display: block;
    margin: -2.5em;
    display: block;
    width: 5em;
    border-radius: 2.5em 0 2.5em 2.5em;
    -webkit-animation: spinner 2s ease-in-out 0s infinite;
    animation: spinner 2s ease-in-out 0s infinite;
}


input[type=checkbox], input[type=radio] {
box-sizing: border-box;
padding-right: 10px;
margin-top: 4px!important;
position: relative !important;
}

#dataset_form .pagination {
	overflow: visible !important;
}

.metrics {
  margin-top: 10px;
  font-family: "Helvetica Neue", Arial;
  border: 1px solid #eee;
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3);
  background-color: #4c87b9!important;
  border-radius: 5px;
}

.metrics .metric {
  float: left;
  width: 29%;
  margin-top: 0px;
  padding: 10px 0;
  padding-top: 15px;
  text-align: center;
  background-color: #4c87b9!important;
  border-right: 1px solid #eee;
}

.metric {
  width: 29%!important;
)

.data >h3 {
  font-size: 28px!important;
  margin-bottom: 10px!important;
  font-weight: 600;
  margin-top: 0px;
}

.data > fa {
  font-size: 28px!important;
  margin-bottom: 10px!important;
  font-weight: 600;
  margin-top: 0px;
font-color: #FFF;
}

#dashboard .chart .ace-icon {
 font-size: 28px!important;
font-color: #FFF;
}


div#section {
    border: 1px solid #eee;
    margin-left: 20px;
    margin-right: 40px;
    padding: 20px;
    min-height: 600px;
    position: relative;
    border-radius: 10px;
    width: 95%!important;
    z-index: 20;
    -moz-border-bottom-right-radius: 10px;
    border-bottom-right-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    -webkit-font-smoothing: subpixel-antialiased;
}

b, strong {
    font-weight: bold;
}

fieldset:disabled {
    opacity: .3;
}
.custom-payment-page {
    position: relative;
}
fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

.box-highlight {
    padding: 30px;
    margin-top: 20px;
    background: #f9f9f9;
}

.box-highlight h3:first-child, .box-highlight h5:first-child {
    margin-top: 0;
}

h5 {
    text-transform: uppercase;
    border-bottom: 1px solid #d0d2d3;
    padding-bottom: 6px;
    letter-spacing: .5px;
    font-size: 1.1rem;
}


</style>
 
<div id="status">

<div id="update">

<div class="content-wrapper">


	<div class="row">

		<div class="col-xs-12 content-header" >


			<h1 class="pull-left">Hosted Payment Page</h1>
			
			<a href="#" class="hidden btn btn-success pull-right new"><i class="icon-budicon-473"></i>New Gateway</a>
			
		</div>

</div><!-- END/.row-->


<div class="row">
	
<div class="stats clearfix">
	
<div class="col-xs-12" id="PageContentRow">

<section id="payment_page" data-route="/payment_pages" data-title="Payment Page" class="content-page current">


  <div class="content-header">
    <div class="explanation" style="padding: 20px;">
      <i class="icon-info-sign"></i>
      <p>Here you can customize a hosted payment page to use with native mobile apps and third party applications (e.g. Salesforce and Dropbox). If you are writing your own application, you will most likely embed the widget and customize it on your own page.</p>
      <p>The default page uses Everpay to display a payment page widget. You can read more about it here: <a target="_blank" href="https://everpayinc.com/docs/everpay">https://everpayinc.com/docs/everpay</a></p>
    </div>
  </div>

  <div class="page-content">
  <div class="payment-page widget-box">
  <div class="widget-title">
    <span class="icon">
      <i class="rule-status icon-pencil" style=""></i>
    </span>
    <div class="row named-switch">
      <div class="col-xs-3" style="width: 180px">
        <strong class="">Customize Payment Page</strong>
      </div>
      <div class="col-xs-4">
        <div class="switch switch-small enable-paymentpage has-switch">
          <div class="switch-animate switch-off"><input type="checkbox" class="uiswitch" name="enable-paymentpage">
		  <span class="switch-left switch-small">ON</span><label class="switch-small">&nbsp;</label>
		  <span class="switch-right switch-small">OFF</span>
		  </div>
        </div>
      </div>
    </div>
  </div>

  <fieldset class="custom-payment-page" disabled="">
    <div class="widget-content box-highlight">
      <h5>Payment page</h5>

      <ul class="nav nav-tabs">
        <li class="active"><a href="#paymentpage-html" class="paymentpage-html" data-toggle="tab">HTML</a></li>
        <li><a href="#paymentpage-preview" class="paymentpage-preview" data-toggle="tab">Preview</a></li>
      </ul>

      <div class="tab-content">
	  
        <div class="tab-pane active" id="paymentpage-html">
     <div>
            <textarea id="custom-payment-editor" style="display: none;"></textarea>
			<div class="CodeMirror cm-s-default CodeMirror-wrap">
			<div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 635px; left: 98px;">
			<textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea></div><div class="CodeMirror-hscrollbar" style="left: 29px;"><div style="height: 100%; min-height: 1px; width: 0px;"></div></div><div class="CodeMirror-vscrollbar" style="bottom: 0px;"><div style="min-width: 1px; height: 0px;"></div></div><div class="CodeMirror-scrollbar-filler"></div><div class="CodeMirror-gutter-filler"></div>
			<div class="CodeMirror-scroll" tabindex="-1">
			<div class="CodeMirror-sizer" style="margin-left: 29px; min-height: 1156px;"><div style="position: relative; top: 0px;"><div class="CodeMirror-lines"><div style="position: relative; outline: none;"><div class="CodeMirror-measure"><div style="width: 50px; height: 50px; overflow-x: scroll;"></div></div><div class="CodeMirror-measure"></div><div style="position: relative; z-index: 1;"></div><div class="CodeMirror-cursors"><div class="CodeMirror-cursor" style="left: 68px; top: 630px; height: 14px;">&nbsp;</div></div><div class="CodeMirror-code"><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">1</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-meta">&lt;!DOCTYPE html&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">2</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">html</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">3</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">head</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">4</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">meta</span> <span class="cm-attribute">charset</span>=<span class="cm-string">"utf-8"</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">5</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">meta</span> <span class="cm-attribute">http-equiv</span>=<span class="cm-string">"X-UA-Compatible"</span> <span class="cm-attribute">content</span>=<span class="cm-string">"IE=edge,chrome=1"</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">6</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">title</span><span class="cm-tag cm-bracket">&gt;</span>Pay with Everpay<span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">title</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">7</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">meta</span> <span class="cm-attribute">name</span>=<span class="cm-string">"viewport"</span> <span class="cm-attribute">content</span>=<span class="cm-string">"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"</span> <span class="cm-tag cm-bracket">/&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">8</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">style</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">9</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-tag">html</span>, <span class="cm-tag">body</span> { <span class="cm-property">padding</span>: <span class="cm-number">0</span>; <span class="cm-property">margin</span>: <span class="cm-number">0</span>; }</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">10</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">11</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-qualifier">.table</span> {</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">12</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">display</span>: <span class="cm-atom">table</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">13</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">position</span>: <span class="cm-atom">absolute</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">14</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">height</span>: <span class="cm-number">100%</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">15</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">width</span>: <span class="cm-number">100%</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">16</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">background</span>: <span class="cm-variable">linear-gradient</span>(<span class="cm-atom">rgba</span>(<span class="cm-number">255</span>, <span class="cm-number">255</span>, <span class="cm-number">255</span>, <span class="cm-number">0.3</span>), <span class="cm-atom">rgba</span>(<span class="cm-number">255</span>, <span class="cm-number">255</span>, <span class="cm-number">255</span>, <span class="cm-number">0</span>));</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">17</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">background-color</span>: <span class="cm-atom">#e8ebef</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">18</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  }</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">19</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">20</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-qualifier">.cell</span> {</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">21</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">display</span>: <span class="cm-atom">table-cell</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">22</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">vertical-align</span>: <span class="cm-atom">middle</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">23</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  }</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">24</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">25</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-qualifier">.content</span> {</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">26</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">padding</span>: <span class="cm-number">25px</span> <span class="cm-number">0px</span> <span class="cm-number">25px</span> <span class="cm-number">0px</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">27</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">margin-left</span>: <span class="cm-atom">auto</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">28</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">margin-right</span>: <span class="cm-atom">auto</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">29</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">width</span>: <span class="cm-number">280px</span>; <span class="cm-comment">/* login widget width */</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">30</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  }</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">31</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">style</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">32</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">head</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">33</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">body</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">34</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">35</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"table"</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">36</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"cell"</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">37</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"content"</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">38</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  <span class="cm-comment">&lt;!-- WIDGET --&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">39</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp; &nbsp;  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">div</span> <span class="cm-attribute">id</span>=<span class="cm-string">"widget-container"</span><span class="cm-tag cm-bracket">&gt;&lt;/</span><span class="cm-tag">div</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">40</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">div</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">41</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">div</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">42</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">div</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">43</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">44</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;!--[if IE 8]&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">45</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;script src="//cdnjs.cloudflare.com/ajax/libs/ie8/0.2.5/ie8.js"&gt;&lt;/script&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">46</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;![endif]--&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">47</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">48</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;!--[if lte IE 9]&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">49</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;script src="http://cdn.everpayinc.com/js/base64.js"&gt;&lt;/script&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">50</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;script src="https://cdn.everpayinc.com/js/es5-shim.min.js"&gt;&lt;/script&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">51</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-comment">&lt;![endif]--&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">52</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">53</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">script</span> <span class="cm-attribute">src</span>=<span class="cm-string">"https://cdn.everpayinc.com/js/elektropay-1.5.js"</span><span class="cm-tag cm-bracket">&gt;&lt;/</span><span class="cm-tag">script</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">54</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">55</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;</span><span class="cm-tag">script</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">56</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-comment">// Decode utf8 characters properly</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">57</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-keyword">var</span> <span class="cm-variable">config</span> <span class="cm-operator">=</span> <span class="cm-variable">JSON</span>.<span class="cm-property">parse</span>(<span class="cm-variable">decodeURIComponent</span>(<span class="cm-variable">escape</span>(<span class="cm-variable">window</span>.<span class="cm-property">atob</span>(<span class="cm-string">'@@config@@'</span>))));</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">58</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">59</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-keyword">var</span> <span class="cm-variable">connection</span> <span class="cm-operator">=</span> <span class="cm-variable">config</span>.<span class="cm-property">connection</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">60</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-keyword">var</span> <span class="cm-variable">prompt</span> <span class="cm-operator">=</span> <span class="cm-variable">config</span>.<span class="cm-property">prompt</span>;</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">61</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">62</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-keyword">var</span> <span class="cm-variable">initializationOptions</span> <span class="cm-operator">=</span> {</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">63</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">assetsUrl</span>:  <span class="cm-variable">config</span>.<span class="cm-property">assetsUrl</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">64</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">cdn</span>: &nbsp; &nbsp; &nbsp;  <span class="cm-variable">config</span>.<span class="cm-property">cdn</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">65</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  };</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">66</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">67</div></div><pre><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-keyword">var</span> <span class="cm-variable">Elektropay</span> <span class="cm-operator">=</span> <span class="cm-keyword">new</span> <span class="cm-variable">Elektropay</span>(<span class="cm-variable">config</span>.<span class="cm-property">clientID</span>, <span class="cm-variable">config</span>.<span class="cm-property">EverpayDomain</span>, <span class="cm-variable">initializationOptions</span>);</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">68</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  <span class="cm-variable">lock</span>.<span class="cm-property">show</span>({</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">69</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-comment">// icon: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  '{YOUR_LOGO_URL}',</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">70</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">callbackURL</span>: &nbsp; &nbsp; &nbsp;  <span class="cm-variable">config</span>.<span class="cm-property">callbackURL</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">71</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">responseType</span>: &nbsp; &nbsp; &nbsp; <span class="cm-variable">config</span>.<span class="cm-property">callbackOnLocationHash</span> <span class="cm-operator">?</span> <span class="cm-string">'token'</span> : <span class="cm-string">'code'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">72</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">dict</span>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="cm-variable">config</span>.<span class="cm-property">dict</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">73</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">connections</span>: &nbsp; &nbsp; &nbsp;  <span class="cm-variable">connection</span> <span class="cm-operator">?</span> [<span class="cm-variable">connection</span>] : <span class="cm-atom">null</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">74</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">rememberLastLogin</span>:  <span class="cm-operator">!</span><span class="cm-variable">prompt</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">75</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">container</span>: &nbsp; &nbsp; &nbsp; &nbsp;  <span class="cm-string">'widget-container'</span>,</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">76</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp; &nbsp;  <span class="cm-property">authParams</span>: &nbsp; &nbsp; &nbsp; &nbsp; <span class="cm-variable">config</span>.<span class="cm-property">internalOptions</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">77</div></div><pre class=""><span style="padding-right: 0.1px;"> &nbsp;  });</span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">78</div></div><pre class=""><span style="padding-right: 0.1px;">  <span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">script</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">79</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">body</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">80</div></div><pre class=""><span style="padding-right: 0.1px;"><span class="cm-tag cm-bracket">&lt;/</span><span class="cm-tag">html</span><span class="cm-tag cm-bracket">&gt;</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="position: absolute; left: -29px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 20px;">81</div></div><pre class=""><span style="padding-right: 0.1px;"><span>?</span></span></pre></div></div></div></div></div></div><div style="position: absolute; height: 30px; width: 1px; top: 1156px;"></div><div class="CodeMirror-gutters" style="height: 1156px;"><div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 28px;"></div></div></div>
			</div>
			
	 
        </div>
		
		
        <div class="tab-pane" id="paymentpage-preview">
          <div class="btn-group">
            <a class="btn dropdown-toggle try-client-paymentpage" data-toggle="dropdown" href="#">
              Application
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              
                  <li>
                    <a data-template="" href="#" class="try-client-preview"><i class="icon icon-budicon-374"></i> Default App</a>
                  </li>
              
            </ul>
          </div>
          <div class="browser">
            <div class="browser-toolbar">
              <div class="browser-icons">
                <a href="javascript:history.back()" target="try-paymentpage-preview">
                  <i class="icon-arrow-left"></i>
                </a>
                <a href="javascript:history.forward()" target="try-paymentpage-preview">
                  <i class="icon-arrow-right"></i></a>
                <a href="javascript:document.getElementById('try-paymentpage-preview').contentWindow.location.reload(true);">
                  <i class="icon-refresh"></i>
                </a>
              </div>

              <p>
                <strong>Payment URL:</strong>
                <input id="browser-address" type="text" readonly="" class="js-browser-address-input form-control">
                <button class="btn copy-btn btn-default" data-clipboard-target="browser-address" data-clipboard-text="">
                  <i class="icon-budicon-669"></i>
                </button>
              </p>

            </div>


            <div class="browser-content payment-widget2">
              <iframe id="try-loginpage-preview" style="height:600px;" src=""></iframe>
            </div>
          </div>

        </div>
      </div>
      <!-- .tab-content -->

      <p class="btn-toolbar" style="">
        <button class="btn btn-primary try-save-paymentpage" data-loading-text="Saving..." disabled="disabled">Save</button>
        <button class="btn btn-default reset-paymentpage">Reset</button>
      </p>

    </div>
  


<div class="spin-container loading-spin  " style="display: none;">


  <div class="spinner-css small">
    <span class="side sp_left">
      <span class="fill"></span>
    </span>
    <span class="side sp_right">
      <span class="fill"></span>
    </span>
  </div>
</div>

<!-- reset value so it does not have to be set everywhere -->



</fieldset>
</div>
</div>


</section>

</div><!-- END/.col-xs-12-->

</div><!-- END/#section stats clearfix -->

</div><!-- END/.row-->



</div><!-- END/. content-wrapper -->

</div><!-- END/. update -->

</div><!-- END/. status-->

<script type="text/javascript" src="https://everpayinc.com/assets/app/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="//everpayinc.com/assets/app/js/tutorial-navigator/latest/standalone.min.js"></script>
<script type="text/javascript" src="//everpayinc.com/assets/app/js/pricing-widget/0.8.0/standalone.min.js"></script>


  <script type="text/javascript" src="//everpayinc.com/assets/app/js/bundle.js"></script>

<?=$this->load->view(branded_view('cp/footer'));?>