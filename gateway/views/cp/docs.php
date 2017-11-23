<?=$this->load->view(branded_view('cp/header'));?>

<body id="docs" data-spy="scroll" data-target="#guide">
	<div id="guide">
		<h1 class="logo">
  <a href="https://everpayinc.com/"><img src="../../assets/img/logo/white.png" alt="Everpay"></a
		</h1>
		<ul class="menu nav">
            <li>
			  	<a href="#intro">Getting Started</a>
			</li>
			<li>
			  	<a href="#auth">Authentication</a>
			</li>
			<li>
				<a href="#charges">Transactions</a>
				<ul class="nav">
				    <li><a href="#charges-create">Create a Transaction</a></li>
				    <li><a href="#charges-edit">Edit a Transaction</a></li>
				    <li><a href="#charges-authorize">Authorize a Transaction</a></li>
				    <li><a href="#charges-verify">Verify a Transaction</a></li>
			  	</ul>
			</li>
			
						<li>
			  	<a href="#recurring">Recurring</a>
			  	<ul class="nav">
			    	<li><a href="#get-recurring">Get Recurring Charges</a></li>
			    	<li><a href="#put-recurring">Create a Recurring Charge</a></li>
			    	<li><a href="#delete-recurring">Cancel a Recurring Charge</a></li>
			  	</ul>
			</li>
						<li>
			  	<a href="#customers">Customers</a>
			  	<ul class="nav">
			    	<li><a href="#customers-create">Create a Customer</a></li>
			    	<li><a href="#customers-edit">Create a Customer</a></li>
			    	<li><a href="#customers-put">Delete a Customer</a></li>
			  	</ul>
			</li>
			
				<li>
			  	<a href="#plans">Plans</a>
			</li>
			
			<li>
			  	<a href="#users">Users</a>
			  	<ul class="nav">
			    	<li><a href="#users-create">Create User</a></li>
			    	<li><a href="#users-edit">Edit User</a></li>
			    	<li><a href="#users-delete">Delete User</a></li>
			  	</ul>
			</li>
				<li>
			  	<a href="#coupons">Coupons</a>
				<ul class="nav">
			    	<li><a href="#coupons-create">Create Coupon></li>
			    	<li><a href="#coupons-edit">Edit Coupon</a></li>
			    	<li><a href="#coupons-delete">Delete Coupon</a></li>
			  	</ul>
			</li>
						
				<li>
			  	<a href="#invoices">Invoices</a>
			</li>
			
			<li>
			  	<a href="#products">Products</a>
			</li>
			
				<li>
			  	<a href="#gateways">Gateways</a>
				<ul class="nav">
			    	<li><a href="#gateways-create">Create Gateway</a></li>
			    	<li><a href="#gateways-edit">Edit a User</a></li>
			    	<li><a href="#gateways-delete">Delete a User</a></li>
			  	</ul>
			</li>
			<li>
			  	<a href="#errors">Errors</a>
			</li>
			<li>
			  	<a href="#glossary">Glossary</a>
			</li>
		</ul>
	</div>

	<div id="api-docs">
	
		<div id="methods">
			<div class="languages">
				<a class="language selected" data-lang="php" href="#">PHP</a>
				<a class="language" data-lang="js" href="#">JS</a>				
				<a class="language" data-lang="ruby" href="#">Ruby</a>
				<a class="language" data-lang="python" href="#">Python</a>
			</div>
			
			<div class="method" id="intro">
				<div class="method-section clearfix">
					<div class="method-description">
						<h1>Getting Started</h1>
			<p>The <a href="https://everpayinc.com/">Everpay Commerce Engine</a> is multi-gateway, bank neutral, single payment
			and recurring billing payment engine built for easy integration. The platform handles every aspect of accepting
			payments on line from subscription plans to medical billing records.</p>
			<h2>Intended Audience</h2>
			<p>This API documentation is intended for web developers who have access to
			thier <a href="#glossary-api-identifier">API Identifier</a> and <a href="#glossary-api-secret-key">API Secret Key</a>,
			you have permission to submit requests.</p>
			<p>Developers should have knowledge in a programming language such as PHP, .NET, Python, Perl, or Ruby and
			have knowledge of web service usage and how to create simple XML requests.</p>
			<h2>What is the API for?</h2>
			<p>With the API, you can access every functional aspect of the billing platform.  For those who want to use only
			certain elements of the API (e.g., to <a href="#payments">charge</a> credit cards, setup
			<a href="recurring.html">recurring charges</a>, or <a href="#customers">create new customer records</a>),
			can handle the less common administrative aspects of your account setup such as payment gateways, email triggers,
			and recurring plans.</p>
			<p>An example usage of the API would be to:</p>
			<ul>
				<li>Create a new <a href="#customers">customer record</a>.</li>
				<li>Setup a <a href="#recurring">recurring payment</a> for that customer.</li>
				<li>When that customer attempts to access a subscribers-only area of your website, <a href="customers.html">check to see
				if that customer has an active subscription to that plan</a>.</li>
			</ul>
			<h2>Documentation Legend</h2>
			<p>All request parameters will be highlighted like this: <span class="request">request_parameter</span>.</p>
			<p>All response variables will be highlighted like this: <span class="response">response_variable</span>.</p>
			<p>Example code will appear in similar boxes colour-coded as either requests or responses.</p>
		
			<h2>Response Format</h2>
			<p>Responses can be in XML, JSON, or serialized PHP format.  The default response format is XML.  To request another
			format, send a <span class="request">format</span> parameter with a value of either "json" or "php".</p>
			<p>Example response in XML format (for a <b>GetCustomer</b> call):</p>
			<pre class="response">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;response&gt;
  &lt;customer&gt;
    &lt;id&gt;140&lt;/id&gt;
    &lt;internal_id/&gt;
    &lt;first_name&gt;Joe&lt;/first_name&gt;
    &lt;last_name&gt;Customer&lt;/last_name&gt;
    &lt;company/&gt;
    &lt;address_1&gt;12345 Ontario St.&lt;/address_1&gt;
    &lt;address_2/&gt;
    &lt;city&gt;Toronto&lt;/city&gt;
    &lt;state&gt;ON&lt;/state&gt;
    &lt;postal_code&gt;A1B2C3&lt;/postal_code&gt;
    &lt;country&gt;CA&lt;/country&gt;
    &lt;email&gt;joe@example.com&lt;/email&gt;
    &lt;phone/&gt;
    &lt;plans&gt;
      &lt;plan&gt;
        &lt;id&gt;123456789&lt;/id&gt;
        &lt;type&gt;paid&lt;/type&gt;
        &lt;name&gt;Fake Plan&lt;/name&gt;
        &lt;amount&gt;14.95&lt;/amount&gt;
        &lt;interval&gt;30&lt;/interval&gt;
        &lt;notification_url&gt;http://www.example.com/post.php&lt;/notification_url&gt;
        &lt;status&gt;active&lt;/status&gt;
      &lt;/plan&gt;
    &lt;/plans&gt;
  &lt;/customer&gt;
&lt;/response&gt;</pre>
		</div>
		<p></p>
<div class="method-example">
<pre>


<code class="js"># All this code is just for demonstration purposes

React.api_key = "In here goes your api key!"</code>

<code class="php"># All this code is just for demonstration purposes

React::setApiKey("In here goes your api key!");</code>

<code class="ruby"># All this code is just for demonstration purposes

React.api_key = "In here goes your api key!"</code>

<code class="python"># All this code is just for demonstration purposes

react.api_key = "In here goes your api key!"</code>


</pre>
</div>
					
			
				</div>
			</div>
			<div class="method" id="auth">
				<div class="method-section clearfix">
					<div class="method-description">
							<h2>Authentication</h2>
			<p>All API requests are authenticated with an <a href="glossary.html#api-identifier">API Identifier</a> and
			<a href="glossary.html#api-secret-key">API Secret Key</a> passed in the request.</p>
			<p>Example Request:</p>
			<pre class="request" style="padding:6px;">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;request&gt;
	&lt;authentication&gt;
&lt;api_id&gt;FAKE000API000ID&lt;/api_id&gt;
&lt;secret_key&gt;FAKE000API000SECRET000KEY&lt;/secret_key&gt;
	&lt;/authentication&gt;
	&lt;type&gt;GetCustomers&lt;/type&gt;
	&lt;limit&gt;50&lt;/limit&gt;
&lt;/request&gt;</pre>
			<h2>Request Format</h2>
			<p>Requests must be made in XML format and sent via an HTTP POST call to the OpenGateway platform server.  A secure (https://)
			connection is required (as per the recommended configuration) for requests that contain credit card information.  Requests should be
			posted to the API URL.  This located at the following URL:
			<pre>https://everpayinc.com/api // URL for credit card and non credit card requests</pre>
			<p>Each request must be accompanied by an <span class="request">authentication</span> node with an <span class="request">api_id</span>
			and <span class="request">secret_key</span> as well as a <span class="request">type</span> value which specifies the API
			method to be called (e.g. "NewCustomer", "Charge", or "GetPlan").  All other request parameters vary depending on the API method.</p>
			<p>In the "Method Reference" section of this documentation, you will find an example of each type of API request, required
			and optional parameters, as well as the response format with examples.</p>
			<p>Using PHP, an API request might look like this:</p>
			<pre class="request">&lt;?php

$post_url = 'https://everpayinc/api';

$poststring = '&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;request&gt;
	&lt;authentication&gt;
		&lt;api_id&gt;FAKE000API000ID&lt;/api_id&gt;
		&lt;secret_key&gt;FAKE000API000SECRET000KEY&lt;/secret_key&gt;
	&lt;/authentication&gt;
	&lt;type&gt;Charge&lt;/type&gt;
	&lt;gateway_id&gt;594082&lt;/gateway_id&gt;
	&lt;credit_card&gt;
		&lt;card_num&gt;0000123412341234&lt;/card_num&gt;
		&lt;exp_month&gt;12&lt;/exp_month&gt;
		&lt;exp_year&gt;2015&lt;/exp_year&gt;
		&lt;cvv&gt;123&lt;/cvv&gt;
	&lt;/credit_card&gt;
	&lt;amount&gt;95.00&lt;/amount&gt;
&lt;/request&gt;';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$post_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $poststring); 

$response = curl_exec($ch); 

if(curl_errno($ch))
{
    echo curl_error($ch);
    curl_close($ch);
    die();
} else {
    curl_close($ch);

    /**
    * deal with the $response
    * because this was a charge, we'll look for &quot;response_code&quot; == 1
    * to indicate success
    */
}
</pre>
						
						
					</div>
					
<div class="method-example">
<pre>
<code class="php">
<pre class="request">
&lt;?php

$post_url = 'https://everpayinc/api';

$poststring = '&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;request&gt;
	&lt;authentication&gt;
		&lt;api_id&gt;FAKE000API000ID&lt;/api_id&gt;
		&lt;secret_key&gt;FAKE000API000SECRET000KEY&lt;/secret_key&gt;
	&lt;/authentication&gt;
	&lt;type&gt;Charge&lt;/type&gt;
	&lt;gateway_id&gt;594082&lt;/gateway_id&gt;
	&lt;credit_card&gt;
		&lt;card_num&gt;0000123412341234&lt;/card_num&gt;
		&lt;exp_month&gt;12&lt;/exp_month&gt;
		&lt;exp_year&gt;2015&lt;/exp_year&gt;
		&lt;cvv&gt;123&lt;/cvv&gt;
	&lt;/credit_card&gt;
	&lt;amount&gt;95.00&lt;/amount&gt;
&lt;/request&gt;';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$post_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $poststring); 

$response = curl_exec($ch); 

if(curl_errno($ch))
{
    echo curl_error($ch);
    curl_close($ch);
    die();
} else {
    curl_close($ch);

    /**
    * deal with the $response
    * because this was a charge, we'll look for &quot;response_code&quot; == 1
    * to indicate success
    */
}
</pre>
</code>
<code class="js">class myClass {
	var $input;
	var $output;

	function myClass($input) {
		$output = 'You entered: ' . $input;
		return $output;
	}
}
</code>
<code class="ruby"><?php

$post_url = 'https://everpayinc/api';

$poststring = '<?xml version="1.0" encoding="UTF-8"?>
<request>
	<authentication>
		<api_id>FAKE000API000ID</api_id>
		<secret_key>FAKE000API000SECRET000KEY</secret_key>
	</authentication>
	<type>Charge</type>
	<gateway_id>594082</gateway_id>
	<credit_card>
		<card_num>0000123412341234</card_num>
		<exp_month>12</exp_month>
		<exp_year>2015</exp_year>
		<cvv>123</cvv>
	</credit_card>
	<amount>95.00</amount>
</request>';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$post_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $poststring); 

$response = curl_exec($ch); 

if(curl_errno($ch))
{
    echo curl_error($ch);
    curl_close($ch);
    die();
} else {
    curl_close($ch);

    /**
    * deal with the $response
    * because this was a charge, we'll look for "response_code" == 1
    * to indicate success
    */
}
</code>
<code class="python">class Mapping:
	def __init__(self, iterable):
		self.items_list = []
		self.__update(iterable)

	def update(self, iterable):
		for item in iterable:
			self.items_list.append(item)
</code>

</pre>
					</div>
				</div>
			</div>
			
			<div class="method" id="charges">
				<div class="method-section clearfix">
					<div class="method-description">
						<h1>Charges</h1>
			<p>Charges are individual payments made with a credit card.  Charges can be linked to
			<a href="#recurring">recurring charges</a> and/or <a href="#customers">customers</a>.  However,
			charges can also exist without a link to either a customer or a recurring charge.</p>
			<p>Charges are processed immediately via the <a href="#gateways">gateway</a> specified by the <span class="request">gateway_id</span> in
			the request or by the default gateway associated with the API client.  If there is only one gateway associated with the
			API account, this gateway will be for the charge.</p>
			<p>Charges can be created and records of charges can be retrieved.  However, charges cannot be updated and/or deleted
			because the records serve as receipts for payments made via external payment gateways.  To refund or void charges,
			one should access their specific payment gateway's control panel.</p>			
			<h2>Method: <a name="charge">Charge</a></h2>
			<p>This method is the heart of the billing engine.  A Charge request represents a payment made via a <a href="gateways.html">payment gateway</a>.
			One makes a request of this type to charge a credit card.</p>
			<p>To create subscription charges, you will not use this method.  You will use the <a href="#recurring-recur">Recur</a> method.  However,
			all individual charges for a recurring subscription are stored in the charges database and returned in <a href="#getcharge">GetCharge</a>
			and <a href="#getcharges">GetCharges</a> requests.</p>
			<p>Charge requests can be linked to customers via either a <span class="request">customer_id</span> or an embedded <span class="request">customer</span>
			node embedded within this request to the API.  For more information on embedding customer data in a Charge request, see the <a href="#customers">customers</a>
			page.</p>
			<p><b>How to add a free charge to a customer (e.g., for records purposes):</b><br />
			Pass <span class="request">amount</span> as "0".  Complete dummy credit card
			information with "0000000000000000" as the credit card number and any future expire date.  Your gateway will not be passed
			this charge.</p>
			<p>Request data:</p>
			<table class="data" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>Variable</td>
						<td>Type</td>
						<td>Required</td>
						<td>Format/Example</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span class="request">amount</span></td>
						<td><a href="#datatypes-money">money</a></td>
						<td class="yes">yes</td>
						<td>e.g. "45.67"</td>
					</tr>
					<tr>
						<td><span class="request">coupon</span></td>
						<td><a href="#datatypes-string">string</a></td>
						<td></td>
						<td>A coupon code that relates to a coupon in the database (e.g., "TEST123").  If the coupon code is invalid, it will be ignored.</td>
					</tr>
					<tr>
						<td><span class="request">credit_card</span></td>
						<td>node</td>
						<td class="yes">yes</td>
						<td>All credit card sub-nodes must be included with accurate credit card information regarding the purchaser.</td>
					</tr>
					<tr>
						<td class="subnode"><span class="request">card_num</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td class="yes">yes</td>
						<td>The purchaser's credit card number, e.g. "1234567809876543".</td>
					</tr>
					<tr>
						<td class="subnode"><span class="request">name</span></td>
						<td><a href="#datatypes-int">string</a></td>
						<td class="yes">yes</td>
						<td>The purchaser's name.  This must match the name on the credit card.</td>
					</tr>
					<tr>
						<td class="subnode"><span class="request">exp_month</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td class="yes">yes</td>
						<td>The purchaser's credit card expiry month with 2-digit representation, e.g. "10".</td>
					</tr>
					<tr>
						<td class="subnode"><span class="request">exp_year</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td class="yes">yes</td>
						<td>The purchaser's credit card expiry year with 2-digit representation, e.g. "14".</td>
					</tr>
					<tr>
						<td class="subnode"><span class="request">cvv</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td class="yes">yes</td>
						<td>The customer's credit card CVV2/security number.  It's required for any card where it is available.  If not available on the card, send this parameter as empty.</td>
					</tr>
					<tr>
						<td><span class="request">gateway_id</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td></td>
						<td>The system ID for the payment gateway used for the charge.  If left empty, the default/only gateway will be used.</td>
					</tr>
					<tr>
						<td><span class="request">customer_id</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td></td>
						<td>The ID of the customer to link the charge to, e.g. "4".  Only include this parameter if you are not embedding customer information below.  Charges do not need
						to be linked to a customer.</td>
					</tr>
					<tr>
						<td><span class="request">customer</span></td>
						<td>node</td>
						<td></td>
						<td>Include sub-nodes with any/all available customer data.  For more information, see the "Embedding customer data in Charge/Recur requests"
						on the <a href="#customers">customers</a> page.  Only include this parameter if you are not including a <span class="request">customer_id</span>.  Charges
						do not need to be linked to a customer.</td>
					</tr>
					<tr>
						<td><span class="request">customer_ip_address</span></td>
						<td><a href="#datatypes-string">string</a></td>
						<td></td>
						<td>You can optionally send the purchaser's IP address.</td>
					</tr>		
					</tbody>
			</table>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> - "1" upon success, "2" upon failure.</li>
				<li><span class="response">response_text</span> - A verbose description of the response_code.</li>
				<li><span class="response">charge_id</span> - The ID of the charge record.</li>
				<li><span class="response">customer_id</span> - The ID of the new customer, if a <span class="request">customer</span> node was embedded
				in the request.</li>
				<li><span class="response">amount</span> - The amount of the charge, useful for coupon-adjusted requests.</li>
			</ul>
			<h2>Method: <a name="refund">Refund</a></h2>
			<p>Refunds a successful charge.</p>
			<p><b>Note:</b> Not all our gateways or bank connections allow refunds via API.  This method will return an error (code = 5020) if this is the case.  It will also return an error if the charging gateway was disabled/deleted, or if the charge cannot be found in the database.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">charge_id</span>- The ID of the charge to refund.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> - "50" upon success, "51" upon failure.</li>
				<li><span class="response">response_text</span> - A verbose description of the response_code.</li>
			</ul>
			<h2>Method: <a name="getcharge">GetCharge</a></h2>
			<p>Retrieves available information about a previous charge.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">charge_id</span> - The ID of the charge record.</li>
			</ul>
			<p>Response data:</p>
			<table class="data" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>Variable</td>
						<td>Type</td>
						<td>Required</td>
						<td>Format/Example</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span class="response">id</span></td>
						<td><a href="#datatypes-automatic">automatic</a></td>
						<td></td>
						<td>123456789</td>
					</tr>
					<tr>
						<td><span class="response">gateway_id</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td></td>
						<td>The system ID for the payment gateway used for the charge.</td>
					</tr>
					<tr>
						<td><span class="response">date</span></td>
						<td><a href="#datatypes-date">date</a></td>
						<td></td>
						<td>The date of the charge.</td>
					</tr>
					<tr>
						<td><span class="response">amount</span></td>
						<td><a href="#datatypes-money">money</a></td>
						<td class="yes">yes</td>
						<td>e.g. "45.67"</td>
					</tr>
					<tr>
						<td><span class="response">card_last_four</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td></td>
						<td>The last four digits of the charged credit card.</td>
					</tr>
					<tr>
						<td><span class="response">recurring_id</span></td>
						<td><a href="#datatypes-int">int</a></td>
						<td></td>
						<td>The ID of the recurring charge related to this individual charge.  Only returned if a recurring charge is available.</td>
					</tr>
					<tr>
						<td><span class="response">status</span></td>
						<td><a href="#datatypes-string">string</a> (<a href="#datatypes_automatic">automatic</a>)</td>
						<td></td>
						<td>"ok" if the charge was successful, "failed" if the charge was unsuccessful.</td>
					</tr>
					<tr>
						<td colspan="4">If a <span class="request">customer_id</span> is passed in a <a href="#charge">Charge</a> request, a
						<span class="response">customer</span> node is returned with all available data in the format of a <a href="#customers-getcustomer">GetCustomer</a>
						request.</td>	
					</tr>			
					</tbody>
			</table>
			<p>Example simple response:</p>
			<pre class="response">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;response&gt;
  &lt;charge&gt;
    &lt;id&gt;140&lt;/id&gt;
    &lt;gateway_id&gt;12345&lt;/gateway_id&gt;
    &lt;amount&gt;24.95&lt;/amount&gt;
    &lt;date&gt;2009-05-29 22:11:44&lt;/date&gt;
    &lt;card_last_four&gt;9876&lt;/card_last_four&gt;
    &lt;status&gt;ok&lt;/status&gt;
  &lt;/charge&gt;
&lt;/response&gt;</pre>
			<p>Example response with customer information and linked to a recurring charge:</p>
			<pre class="response">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;response&gt;
  &lt;charge&gt;
    &lt;id&gt;140&lt;/id&gt;
    &lt;gateway_id&gt;12346&lt;/gateway_id&gt;
    &lt;amount&gt;15.35&lt;/amount&gt;
    &lt;date&gt;2009-05-14 11:25:14&lt;/date&gt;
    &lt;card_last_four&gt;5467&lt;/card_last_four&gt;
    &lt;recurring_id&gt;192824&lt;/recurring_id&gt;
    &lt;status&gt;ok&lt;/status&gt;
    &lt;refunded&gt;0&lt;/refunded&gt;
    &lt;customer&gt;
	    &lt;id&gt;140&lt;/id&gt;
	    &lt;internal_id/&gt;
	    &lt;first_name&gt;Joe&lt;/first_name&gt;
	    &lt;last_name&gt;Customer&lt;/last_name&gt;
	    &lt;company/&gt;
	    &lt;address_1&gt;12345 Ontario St.&lt;/address_1&gt;
	    &lt;address_2/&gt;
	    &lt;city&gt;Toronto&lt;/city&gt;
	    &lt;state&gt;ON&lt;/state&gt;
	    &lt;postal_code&gt;A1B2C3&lt;/postal_code&gt;
	    &lt;country&gt;CA&lt;/country&gt;
	    &lt;email&gt;joe@example.com&lt;/email&gt;
	    &lt;phone/&gt;
  	&lt;/customer&gt;
  &lt;/charge&gt;
&lt;/response&gt;</pre>
			<h2>Method: <a name="getcharges">GetCharges</a></h2>
			<p>Returns records of charges, with optional filters.  If a request is made without any filters, the latest 100 active customer records are
			returned.</p>
			<p>Optional filters:</p>
			<ul>
				<li><span class="request">id</span></li>
				<li><span class="request">recurring_id</span> - Get all charges linked to a recurring charge.</li>
				<li><span class="request">gateway_id</span></li>
				<li><span class="request">customer_id</span></li>
				<li><span class="request">customer_last_name</span></li>
				<li><span class="request">customer_internal_id</span></li>
				<li><span class="request">recurring_only</span> - Set to "1" to only retrieve charges linked to recurring charges.</li>
				<li><span class="request">status</span> - Values: "ok", "refunded", or "failed".  If not present in the request, all transactions are returned regardless of status.</li>
				<li><span class="request">offset</span> - Retrieval will begin after <i>offset</i> # of records.  Useful for pagination.  Default: 0.</li>
				<li><span class="request">limit</span> - The total number of records to retrieve, beginning at the offset.  Maximum: 100.  Default: 100.</li>
				<li><span class="request">sort</span> - The field on which to sort retrieved records.  Default: "date".  Available values:
					<ul>
						<li>customer_first_name</li>
						<li>customer_last_name</li>
						<li>date</li>
						<li>amount</li>
					</ul>
				</li>
				<li><span class="request">sort_dir</span> - The direction in which to sort retrieved records.  Default: "desc".  Can also be "asc".</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">results</span> - Number of records in this response</li>
				<li><span class="response">total_results</span> - Total # of records to retrieve.  Use <span class="request">offset</span> to gather all records over multiple iterated requests.</li>
				<li><span class="response">charges</span>
				<ul>
					<li>A <span class="response">charge</span> node for each returned charge
					<ul>
						<li>All data available for the charge, in the format of <a name="#getcharge">GetCharge</a>.</li>
					</ul>
					</li>
				</ul></li>
			</ul>
			<p>Example response:</p>
			<pre class="response">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;response&gt;
  &lt;results&gt;2&lt;/results&gt;
  &lt;total_results&gt;2&lt;/total_results&gt;
  &lt;charges&gt;
     &lt;charge&gt;
       &lt;id&gt;140&lt;/id&gt;
       &lt;gateway_id&gt;12345&lt;/gateway_id&gt;
       &lt;amount&gt;24.95&lt;/amount&gt;
       &lt;date&gt;2009-05-29 22:11:44&lt;/date&gt;
       &lt;card_last_four&gt;9876&lt;/card_last_four&gt;
       &lt;status&gt;ok&lt;/status&gt;
       &lt;refunded&gt;1&lt;/refunded&gt;
       &lt;refund_date&gt;2009-06-14 12:11:09&lt;/refund_date&gt;
     &lt;/charge&gt;
     &lt;charge&gt;
       &lt;id&gt;140&lt;/id&gt;
       &lt;gateway_id&gt;12346&lt;/gateway_id&gt;
       &lt;amount&gt;15.35&lt;/amount&gt;
       &lt;date&gt;2009-05-14 11:25:14&lt;/date&gt;
       &lt;card_last_four&gt;5467&lt;/card_last_four&gt;
       &lt;recurring_id&gt;192824&lt;/recurring_id&gt;
       &lt;status&gt;ok&lt;/status&gt;
       &lt;customer&gt;
	      &lt;id&gt;140&lt;/id&gt;
	      &lt;internal_id/&gt;
	      &lt;first_name&gt;Joe&lt;/first_name&gt;
	      &lt;last_name&gt;Customer&lt;/last_name&gt;
	      &lt;company/&gt;
	      &lt;address_1&gt;12345 Ontario St.&lt;/address_1&gt;
	      &lt;address_2/&gt;
	      &lt;city&gt;Toronto&lt;/city&gt;
	      &lt;state&gt;ON&lt;/state&gt;
	      &lt;postal_code&gt;A1B2C3&lt;/postal_code&gt;
	      &lt;country&gt;CA&lt;/country&gt;
	      &lt;email&gt;joe@example.com&lt;/email&gt;
	      &lt;phone/&gt;
       &lt;/customer&gt;
     &lt;/charge&gt;
  &lt;/charges&gt;
&lt;/response&gt;</pre>
		    <h2>Method: <a name="getlatestcharge">GetLatestCharge</a></h2>
			<p>Retrieves available information about a previous charge <i>for a customer</i>.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">customer_id</span> - The ID of the customer.</li>
			</ul>
			<p>Optional data:</p>
			<ul>
				<li><span class="request">gateway_id</span> - Only retrieve data for this gateway ID.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li>All charge data (in the format of <a href="#getcharge">GetCharge</a>).</li>
			</ul>
		</div>
						
						</div>
					</div>
					
<div class="method-example">
<pre>
<code class="php">React_Charge::create(array(
  "name" => "Super Mario Bros",
  "company" => "Nintendo",
  "some_key" => "yey_JA390094AWPIWWN435"
  "rating" => 100
));
</code>

<code class="js">React_Charge::create(array(
  "name" => "Super Mario Bros",
  "company" => "Nintendo",
  "some_key" => "yey_JA390094AWPIWWN435"
  "rating" => 100
));
</code>

<code class="ruby">React::Game.create(
  :name => "Super Mario Bros",
  :company => "Nintendo",
  :some_key => "yey_JA390094AWPIWWN435",
  :rating => 100
)
</code><code class="python">react.Game.create(
  name="Super Mario Bros",
  company="Nintendo",
  some_key="yey_JA390094AWPIWWN435"
  rating=100
)
</code>
<code class="ruby always-visible"># Object Response
{
  "object": "Game",
  "name": "Super Mario Bros",
  "company": "Nintendo",
  "some_key": "yey_JA390094AWPIWWN435",
  "rating": 100
  "description": {
    "some_desc1": null,
    "some_desc2": null,
    "some_desc3": null,
    "some_desc4": null,
  }
  "valid": true,
  "other_field": null
}	
</code>
</pre>
</div>


			
			<div class="method" id="coupons">
				<div class="method-section clearfix">
					<div class="method-description">

<h1>Coupons</h1>
			<p>Coupons are codes included in either a <span class="request">Charge</span> or <span class="request">Recur</span> request that
			do one of the following:</p>
			<ul>
				<li>Reduce the payment amount (for single charges)</li>
				<li>Reduce the initial payment amount (for recurring charges)</li>
				<li>Reduce the recurring payment amount (for recurring charges)</li>
				<li>Reduce both the initial/recurring charge amounts (for recurring charges)</li>
				<li>Add/modify the free trial (in days) (for recurring charges)</li>
			</ul>
			<p>Coupon values can be either a percentage of the current amount being charged or a set dollar amount.</p>
			<p>They can also be limited specific plans.</p>
			<h2>Using Coupons</h2>
			<p>To use coupons, you must first define coupons in your control panel.</p>
			<p>After that, simply send a <span class="request">coupon</span> node in your XML Charge or Recur request.  It will automatically be validated
			and modify the payment accordingly.</p>
			<h2>Charge/Recur Responses</h2>
			<p>When a coupon code is used, Everpay will adjust the amount, recurring amount, free trial, etc. on its end.  However,
			some applications may require that these adjusted values be stored locally.  For this reason, the following additional parameters
			will be now returned in a <b>Charge</b> and <b>Recur</b> API requests:</p>
			<ul>
				<li>Charge
					<ul>
						<li><span class="response">amount</span> - The (possibly adjusted) amount of the payment.</li>
					</ul>
				</li>
				<li>
					Recur
					<ul>
						<li><span class="response">amount</span> - The (possibly adjusted) amount of the initial charge.</li>
						<li><span class="response">recur_amount</span> - The (possibly adjusted) amount of the recurring charge.</li>
						<li><span class="response">free_trial</span> - The (possibly adjusted) number of days before the first charge.</li>
						<li><span class="response">start_date</span> - The (possibly adjusted) start date for the subscription.</li>
					</ul>
				</li>
			</ul>
			
			</div>
			</div>
			</div>
			<div class="method-example">
<pre>
<code class="ruby">React::User.create(
  :name => "John McClane",
  :email => "john_mcclane@awesome.com",
  :country => "US",
  :some_key => "yey_JA390094AWPIWWN435",
  :age => 53
)
</code><code class="python">react.User.create(
  name="John McClane",
  email="john_mcclane@awesome.com",
  country="US",
  some_key="yey_JA390094AWPIWWN435",
  age=53
)
</code><code class="php">React_User::create(array(
  "name" => "John McClane",
  "email" => "john_mcclane@awesome.com",
  "country" => "US",
  "some_key" => "yey_JA390094AWPIWWN435",
  "age" => 53
));
</code>
<code class="ruby always-visible"># Object Response
{
  "object": "User",
  "name": "John McClane",
  "email": "john_mcclane@awesome.com",
  "country": "US",
  "some_key": "yey_JA390094AWPIWWN435",
  "age": 53
  "address": {
    "address_line1": null,
    "address_line2": null,
    "address_city": null,
    "address_state": null,
    "address_zip": null,
    "address_country": null
  }
  "valid": true,
  "description": null
}
</code>
</pre>
					</div>
					
					
						
			
			<div class="method" id="users">
				<div class="method-section clearfix">
					<div class="method-description">
					
					<h1>Users</h1>
			<p>Users are the accounts which have access via the API and control panel to the OpenGateway
			billing engine.  There are three types of clients:</p>
			<ul>
				<li><b>Enterprise Accounts</b> - Can create end user accounts, and edit/suspend/delete accounts which they have created.</li>
				<li><b>End User Account</b> - Can only edit their own account.</li>
			</ul>
			<h2>Object Data</h2>
			
						<div class="info">
			<table class="data" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>Variable</td>
						<td>Type</td>
						<td>Required</td>
						<td>Format/Example</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>id</td>
						<td><a href="datatypes.html#automatic">automatic</a></td>
						<td></td>
						<td>123456789</td>
					</tr>
					<tr>
						<td>client_type</td>
						<td><a href="datatypes.html#int">int</a></td>
						<td></td>
						<td>"3" = Administrator, "1" = Service Provider, "0" = End User</td>
					</tr>
					<tr>
						<td>parent_id</td>
						<td><a href="datatypes.html#int">int</a></td>
						<td></td>
						<td>The client ID of the parent account, if available.</td>
					</tr>
					<tr>
						<td>api_id</td>
						<td><a href="datatypes.html#string">api_id</a></td>
						<td></td>
						<td>The client's API Identifier string.</td>
					</tr>
					<tr>
						<td>secret_key</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>The secret key used in API requests.</td>
					</tr>
					<tr>
						<td>username</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>The username of the client account.</td>
					</tr>
					<tr>
						<td>first_name</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td class="yes">yes</td>
						<td>Joe</td>
					</tr>
					<tr>
						<td>last_name</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td class="yes">yes</td>
						<td>Smith</td>
					</tr>
					<tr>
						<td>address_1</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>12345 Fake St.</td>
					</tr>
					<tr>
						<td>address_2</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>For apartment/unit/suite #'s, eg. "Unit 2".</td>
					</tr>
					<tr>
						<td>city</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>Toronto</td>
					</tr>
					<tr>
						<td>state</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>The state/province/region of the customer.  For the US and Canada, this must be supplied as the two letter abbreviation, eg. "ON"</td>
					</tr>
					<tr>
						<td>country</td>
						<td><a href="datatypes.html#country">country</a></td>
						<td></td>
						<td>The ISO 3166-1 alpha-2 code of the customer's country, e.g. "CA", "US".</td>
					</tr>
					<tr>
						<td>postal_code</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>The zip or postal code of the user, e.g. "A1B2C3", "90210".</td>
					</tr>
					<tr>
						<td>email</td>
						<td><a href="datatypes.html#email">email</a></td>
						<td></td>
						<td>A valid email address for the customer.</td>
					</tr>
					<tr>
						<td>phone</td>
						<td><a href="datatypes.html#string">string</a></td>
						<td></td>
						<td>1-555-555-0000</td>
					</tr>
					<tr>
						<td>timezone</td>
						<td><a href="#datatypes-string">string</a></td>
						<td></td>
						<td>The timezone offset of the user (e.g., "UM12").  Available options: UM12 (-12 GMT) to UM1, UTC (GMT), and UP1 to UP12 (+12 GMT).</td>
					</tr>
				</tbody>
			</table>
			<h2>Method: <a name="newclient">NewUser</a></h2>
			<p>Create a new user.  Only available to Administrators and Service Providers.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">first_name</span></li>
				<li><span class="request">last_name</span></li>
				<li><span class="request">company</span></li>
				<li><span class="request">email</span></li>
				<li><span class="request">username</span></li>
				<li><span class="request">password</span></li>
			</ul>
			<p>Optional data:</p>
			<ul>
				<li>Any/all of the object data above, except <span class="response">id</span>, <span class="response">secret_key</span>, <span class="response">api_id</span>.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> of "300", upon success.</li>
				<li><span class="response">client_id</span> - The ID of the new client.</li>
				<li><span class="response">api_id</span> - The auto-generated API Identifier of the client.</li>
				<li><span class="response">secret_key</span> - The auto-generated Secret Key of the client.</li>
			</ul>
			<h2>Method: <a name="updateclient">UpdateClient</a></h2>
			<p>Update an existing client.  You must have ownership of this account.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">client_id</span></li>
			</ul>
			<p>Optional data:</p>
			<ul>
				<li>Any/all of the object data above, except <span class="response">id</span>, <span class="response">secret_key</span>, <span class="response">api_id</span>.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> of "301", upon success.</li>
			</ul>
			<h2>Method: <a name="updateaccount">UpdateAccount</a></h2>
			<p>Update your own client account.</p>
			<p>Required data:</p>
			<ul>
				<li>n/a</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> of "301", upon success.</li>
			</ul>
			<h2>Method: <a name="suspendclient">SuspendClient</a></h2>
			<p>Suspend API and Control Panel access for a client.  You must have ownership of this account.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">client_id</span> - The ID of the client.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> of "302", upon success.</li>
			</ul>
			<h2>Method: <a name="unsuspendclient">UnsuspendClient</a></h2>
			<p>Re-instate API and Control Panel access for a client.  You must have ownership of this account.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">client_id</span> - The ID of the client.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> of "303", upon success.</li>
			</ul>
			<h2>Method: <a name="deleteclient">DeleteClient</a></h2>
			<p>Delete a client account.  You must have ownership of this account.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">client_id</span> - The ID of the client.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">response_code</span> of "304", upon success.</li>
			</ul>
			<h2>Method: <a name="getclient">GetClient</a></h2>
			<p>Get data for a client account.</p>
			<p>Required data:</p>
			<ul>
				<li><span class="request">client_id</span> - The ID of the client.</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li>A <span class="response">client</span> node with all data in Object Data.</li>
			</ul>
			<h2>Method: <a name="getclients">GetClients</a></h2>
			<p>Searches all clients.  If a request is made without any filters all clients under your authenticated account are returned.</p>
			<p>Optional filters:</p>
			<ul>
				<li><span class="request">suspended</span> - Set to "1" to retrieve only suspended accounts, "0" to receive only non-suspended accounts.  Default: All accounts.</li>
				<li><span class="request">username</span> - The client's username.</li>
				<li><span class="request">email</span> - The client's email.</li>
				<li><span class="request">sort</span> - The field on which to sort retrieved records.  Default: "id".  Available values:
					<ul>
						<li>id</li>
						<li>username</li>
						<li>email</li>
						<li>first_name</li>
						<li>last_name</li>
					</ul>
				</li>
				<li><span class="request">sort_dir</span> - The direction in which to sort retrieved records.  Default: "asc".  Can also be "desc".</li>
			</ul>
			<p>Response data:</p>
			<ul>
				<li><span class="response">results</span> - Number of records in this response</li>
				<li><span class="response">total_results</span> - Total # of records to retrieve.  Use <span class="request">offset</span> to gather all records over multiple iterated requests.</li>
				<li><span class="response">clients</span>
					<ul>
						<li>A <span class="response">client</span> node for each returned client.
							<ul>
								<li>All data available for the client, in the format of GetClient.</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			
						
							<h4>The User Object</h4>
							<div class="field clearfix">
								<div class="key">name:</div>
								<div class="desc">
									<strong>string</strong>
									The name of the user
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">email:</div>
								<div class="desc">
									<strong>string</strong>
									The email of the user
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">country:</div>
								<div class="desc">
									<strong>string</strong>
									2 letter code for the country
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">age:</div>
								<div class="desc">
									<strong>integer</strong>
									Age of the user
								</div>
							</div>
							
							<div class="field clearfix">
								<div class="key">description:</div>
								<div class="desc">
									<strong>hash</strong>
									key/value pairs with fields that describe the user.
								</div>
							</div>
							
						</div>
						
					</div>
					</div>
					
					<div class="method-example">
<pre>
<code class="ruby">React::User.create(
  :name => "John McClane",
  :email => "john_mcclane@awesome.com",
  :country => "US",
  :some_key => "yey_JA390094AWPIWWN435",
  :age => 53
)
</code><code class="python">react.User.create(
  name="John McClane",
  email="john_mcclane@awesome.com",
  country="US",
  some_key="yey_JA390094AWPIWWN435",
  age=53
)
</code><code class="php">React_User::create(array(
  "name" => "John McClane",
  "email" => "john_mcclane@awesome.com",
  "country" => "US",
  "some_key" => "yey_JA390094AWPIWWN435",
  "age" => 53
));
</code>
<code class="ruby always-visible"># Object Response
{
  "object": "User",
  "name": "John McClane",
  "email": "john_mcclane@awesome.com",
  "country": "US",
  "some_key": "yey_JA390094AWPIWWN435",
  "age": 53
  "address": {
    "address_line1": null,
    "address_line2": null,
    "address_city": null,
    "address_state": null,
    "address_zip": null,
    "address_country": null
  }
  "valid": true,
  "description": null
}
</code>
</pre>
					</div>
					
			
			<div class="method" id="products">
				<div class="method-section clearfix">
					<div class="method-description">
						<h3>Products</h3>
						<p>
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="method-example">
<pre>
<code class="ruby">React::Order.create(
  :item => "React Bootstrap Theme",
  :price => 1500,
  :name => "John McClane",
  :email => "john_mcclane@awesome.com",
  :country => "US",
  :some_key => "yey_JA390094AWPIWWN435",
  :age => 53
)
</code><code class="python">react.User.create(
  item="React Bootstrap Theme",
  price=1500,
  name="John McClane",
  email="john_mcclane@awesome.com",
  country="US",
  some_key="yey_JA390094AWPIWWN435",
  age=53
)
</code><code class="php">React_User::create(array(
  "item" => "React Bootstrap Theme",
  "price" => 1500,
  "name" => "John McClane",
  "email" => "john_mcclane@awesome.com",
  "country" => "US",
  "some_key" => "yey_JA390094AWPIWWN435",
  "age" => 53
));
</code>
<code class="ruby always-visible"># Object Response
{
  "object": "Order",
  "item": "React Bootstrap Theme",
  "price": 1500,
  "name": "John McClane",
  "email": "john_mcclane@awesome.com",
  "country": "US",
  "some_key": "yey_JA390094AWPIWWN435",
  "age": 53
  "address": {
    "address_line1": null,
    "address_line2": null,
    "address_city": null,
    "address_state": null,
    "address_zip": null,
    "address_country": null
  }
  "valid": true,
  "description": null
}
</code>
</pre>
					</div>
				</div>
			</div>
			<div class="method" id="errors">
				<div class="method-section clearfix">
					<div class="method-description">
					<h1>Error Codes</h1>
					
						<div class="info">
							<h4>Attributes</h4>
							<div class="field clearfix">
			<p>The system attempts to generate helpful error codes that help you fix/improve your application.  A comprehensive
			list of all error codes is below:</p>
			<table class="data" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td style="width:15%">Code</td>
						<td style="width:85%">Text</td>
					</tr>
				</thead>
				<tbody>
							<div class="field clearfix">
						<div class="key">1000</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">1000</div>
								<div class="desc">
									Invalid request.
								</div>
							</div>
					</div>
						<tr>
						<td>1001</td>
						
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
						<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Unable to authenticate.</td>
					</tr>
						<tr>
						<td>1002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid request type.</td>
					</tr>
						<tr>
						<td>1004</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Required fields are missing for this request</td>
					</tr>
						<tr>
						<td>1005</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Gateway type is required.</td>
					</tr>
						<tr>
						<td>1006</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid format passed.  Acceptable formats: xml, php, and json.</td>
					</tr>
						<tr>
						<td>1007</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid country.</td>
					</tr>
						<tr>
						<td>1008</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid email address</td>
					</tr>
						<tr>
						<td>1010</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A secure SSL connection is required.</td>
					</tr>
						<tr>
						<td>1009</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Unspecified error in request.</td>
					</tr>
						<tr>
						<td>1011</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid timezone.</td>
					</tr>
						<tr>
						<td>1012</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>For USA and Canada addresses, a valid 2-letter state/province abbreviation is required.</td>
					</tr>
						<tr>
						<td>2000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Client is not authorized to create new clients.</td>
					</tr>
						<tr>
						<td>2001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid External API.</td>
					</tr>
						<tr>
						<td>2002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Username is already in use.</td>
					</tr>
						<tr>
						<td>2003</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Password must contain only letters and numbers and be greater than 5 characters in length.</td>
					</tr>
						<tr>
						<td>2004</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid client ID.</td>
					</tr>
						<tr>
						<td>2005</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Error contacting payment gateway.</td>
					</tr>
						<tr>
						<td>2006</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Only administrators can create new Service Provider accounts.</td>
					</tr>
						<tr>
						<td>2007</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid client_type.</td>
					</tr>
						<tr>
						<td>3000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid gateway ID for this client.</td>
					</tr>
						<tr>
						<td>3001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Gateway ID is required.</td>
					</tr>
						<tr>
						<td>3002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Client ID is required.</td>
					</tr>
						<tr>
						<td>4000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid customer ID.</td>
					</tr>
						<tr>
						<td>4001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid charge ID.</td>
					</tr>
						<tr>
						<td>5000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid Recurring ID is required.</td>
					</tr>
						<tr>
						<td>5001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Start date cannot be in the past.</td>
					</tr>
						<tr>
						<td>5002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>End date cannot be in the past</td>
					</tr>
						<tr>
						<td>5003</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
						<td>End date must be later than start date.</td>
					</tr>
						<tr>
						<td>5004</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A customer ID or cardholder name must be supplied.</td>
					</tr>
						<tr>
						<td>5005</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Error creating customer profile.</td>
					</tr>
						<tr>
						<td>5006</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Error creating customer payment profile.</td>
					</tr>
						<tr>
						<td>5007</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Dates must be valid and in YYYY-MM-DD format.</td>
					</tr>
						<tr>
						<td>5008</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid credit card number</td>
					</tr>
						<tr>
						<td>5009</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid amount.</td>
					</tr>
						<tr>
						<td>5010</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
						<td>Recurring details are required.</td>
					</tr>
						<tr>
						<td>5011</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid interval.</td>
					</tr>
						<tr>
						<td>5012</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid description is required.</td>
					</tr>
						<tr>
						<td>5013</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>This transaction requires a billing address.  If no customer ID is supplied, first_name, last_name, address_1, city, state, postal_code, and country are required as part of the customer parameter.</td>
					</tr>
						<tr>
						<td>5014</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Error cancelling subscription</td>
					</tr>
						<tr>
						<td>5015</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>You cannot modify the plan_id via UpdateRecurring.  You must use ChangeRecurringPlan to upgrade or downgrade a recurring charge.</td>
					</tr>
						<tr>
						<td>5016</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Recurring billings cannot be updated for this gateway. You must cancel the existing subscription and create a new one.</td>
					</tr>
						<tr>
						<td>5017</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Gateway is disabled.</td>
					</tr>
					<tr>
						<td>5018</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>This gateway requires customer information to be processed.  Please include a customer_id of an existing customer or a customer node with new customer information in your request.</td>
					</tr>
					<tr>
						<td>5019</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>This gateway requires the purchasing customer's IP address.  Please include a customer_ip_address node in your request.</td>
					</tr>
					<tr>
						<td>5020</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>This gateway does not allow refunds via the API.</td>
					</tr>
					<tr>
						<td>5021</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Only active gateways can be updated with new credit card details.</td>
					</tr>
					<tr>
						<td>5022</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>This subscription is free - updating credit card details is futile.</td>
					</tr>
					<tr>
						<td>5023</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>The new gateway you have chosen requires customer information but this customer record currently doesn't exist.  Please use UpdateCustomer to add full customer details for this user before calling UpdateCreditCard.</td>
					</tr>
						<tr>
						<td>6000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid Charge ID is required.</td>
					</tr>
						<tr>
						<td>6001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid Customer ID is required.</td>
					</tr>
						<tr>
						<td>6002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid Recurring ID is required</td>
					</tr>
						<tr>
						<td>6003</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Nothing to update.</td>
					</tr>
						<tr>
						<td>6005</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Error updating Recurring details.</td>
					</tr>
						<tr>
						<td>6006</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid Plan ID is required.</td>
					</tr>
						<tr>
						<td>7000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid plan type.</td>
					</tr>
						<tr>
						<td>7001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid Plan ID.</td>
					</tr>
						<tr>
						<td>7002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid Free Trial amount.</td>
					</tr>
						<tr>
						<td>7003</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
						<td>Invalid occurrences amount.</td>
					</tr>
						<tr>
						<td>8000</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Invalid Email Trigger.</td>
					</tr>
						<tr>
						<td>8001</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>A valid Email ID is required.</td>
					</tr>
						<tr>
						<td>8002</td>
						<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						<td>Email body must be encoded.</td>
					</tr>	
				</tbody>
			</table>
								<div class="key">code:</div>
								<div class="desc">
									<strong>string</strong>
									Code of the error
								</div>
							</div>
							<div class="field clearfix">
								<div class="key">message:</div>
								<div class="desc">
									<strong>string</strong>
									A complete message with details about the error to show users.
								</div>
							</div>
						</div>
					</div>
					<div class="method-example">
<pre>
<code class="http always-visible">200 OK - Everything worked.

400 Bad Request - The request was badly built

401 Unauthorized - Some other message

402 Request Failed - The request failed

404 Not Found - Doesn't exist

500, 502, 503, 504 Server errors
</code>
</pre>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

<!-- BEGIN CORE PLUGINS -->




	<script type="text/javascript">
		$(function () {
			hljs.configure({
			  tabReplace: '  ',
			  classPrefix: ''
			})
			hljs.initHighlightingOnLoad();


			// language toggle
			var $languages = $(".languages .language");
			$languages.click(function (e) {
				e.preventDefault();
				var lang = $(this).data("lang");
				$languages.removeClass("selected");
				$(this).addClass("selected");

				$("pre code").hide();
				$("pre code." + lang).css("display", "block");
			});
		});
	</script>
	
	

<?=$this->load->view(branded_view('cp/footer'));?>