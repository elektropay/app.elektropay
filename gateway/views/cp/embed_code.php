<?=$this->load->view(branded_view('cp/header'));?>
<div class="row">


<div class="row-fluid">

<h1>Embed Code</h1>

<div id="container">

<h1>Buy button <span class="weak">Monthly Gateway Billing</span></h1>

<script type="text/javascript">
    $(function() {
        $('textarea, input').click(function() {
            $(this).select();
        });
    });
</script>

<div class="copy-and-paste">
    <label for="copy">Copy and paste into your site to add a buy button</label>

<textarea id="copy" rows="7">&lt;!-- Only once per page --&gt;
&lt;script src="https://www.forgesimple.com/javascript/boom-goes-the-checkout-v1.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;link href="https://www.forgesimple.com/stylesheets/buttons.css" rel="stylesheet" type="text/css"&gt;

&lt;!-- Anywhere you want to include a buy button --&gt;
&lt;a href="https://www.forgesimple.com/products/122/buy/" class="forge-button activate-forge-checkout" target="_blank"&gt;Buy Monthly Gateway Billing&lt;/a&gt;
</textarea>

<p class="hint">
    <strong>Note:</strong>
    The <code>script</code> tags only need included once on per page, so put them in your main template file if you know how. If you don't, there's no harm in including that line more than once.
</p>


<h2>Hosted checkout form</h2>
<form class="form" id="form_email" method="post" action="">

    <div class="hosted-link field">
        <label for="hosted_link">Share this link anywhere. Email, Facebook, Twitter, you name it!</label>
        <input type="text" id="hosted_link" value="https://apps.everpayinc.com/products/122/buy/" readonly="">
    </div>
</form>

</div>



    </div>
</div>








</div>

</div>
</div>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100761553); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100761553ns.gif" />
</p>
</noscript>
<?=$this->load->view(branded_view('cp/footer'));?>