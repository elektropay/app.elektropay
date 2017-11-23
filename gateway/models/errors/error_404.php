<html>
<head>
<title>404 Page Not Found</title>
<style type="text/css">

body {
background-color:	#fff;
margin:				40px;
font-family:		Lucida Grande, Verdana, Sans-serif;
font-size:			16px;
color:				#000;
}

#content  {
border:				#999 1px solid;
background-color:	#fff;
padding:			20px 20px 12px 20px;
}

/***
Error Pages
***/

/* 404 page option #1 */

.page-404 {
  text-align: center;
}

.page-404 .number {
  position: relative;
  top: 35px;
  display: inline-block;
  letter-spacing: -10px;
  margin-top: 0px;
  margin-bottom: 10px;
  line-height: 168px;
  font-size: 164px;
  font-weight: 600;
  color: #7bbbd6;
  text-align: right;
}

.page-404 .details {
  margin-left: 40px;
  display: inline-block;
  padding-top: 0px;
  text-align: left;
}

/* 500 page option #1 */
.page-500 {
  text-align: center;
}

.page-500 .number {
  display: inline-block;
  letter-spacing: -10px;
  line-height: 128px;
  font-size: 128px;
  font-weight: 300;
  color: #ec8c8c;
  text-align: right;
}

.page-500 .details {
  margin-left: 40px;
  display: inline-block;
  text-align: left;
}

/* 404 page option #2*/
.page-404-full-page {
  overflow-x: hidden;
  padding: 20px;
  margin-bottom: 20px;
  background-color: #fafafa !important;
}

.page-404-full-page .details input {
  background-color: #ffffff;
}

.page-404-full-page .page-404 {
  margin-top: 120px;
}

/* 500 page option #2*/
.page-500-full-page {
  overflow-x: hidden;
  padding: 20px;
  background-color: #fafafa !important;
}

.page-500-full-page .details input {
  background-color: #ffffff;
}

.page-500-full-page .page-500 {
  margin-top: 100px;
}

/* 404 page option #3*/
.page-404-3 {
  background: black !important;
}

.page-404-3 .page-inner img {
  right: 0;
  bottom: 0;
  z-index: -1;
  position: absolute;
}

.page-404-3 .error-404 {
  color: #fff;
  text-align: left;
  padding: 70px 20px 0;
}

.page-404-3 h1 {
  color: #fff;
  font-size: 130px;
  line-height: 160px;
}

.page-404-3 h2 {
  color: #fff;
  font-size: 30px;
  margin-bottom: 30px;
}

.page-404-3 p {
  color: #fff;
  font-size: 16px;
}

@media (max-width: 480px) {
  .page-404 .number,
  .page-500 .number,
  .page-404 .details,
  .page-500 .details {
    text-align: center;
    margin-left: 0px;
  }

  .page-404-full-page .page-404 {
    margin-top: 30px;
  }

  .page-404-3 .error-404 {
    text-align: left;
    padding-top: 10px;
  }

  .page-404-3 .page-inner img {
    right: 0;
    bottom: 0;
    z-index: -1;
    position: fixed;
  }
}

</style>
</head>
<body>

<body class="page-404-full-page">
<div class="container-fluid">
<div class="row">
	<div id="content">
	<div class="col-md-12 page-404">
		<div class="number">
		<b>404</b>
		</div>
		<div class="details" style="padding-bottom: 60px;">
			<h2>Oops! It seems that you're lost </h2>
			<p class="lead">
				<?php echo $message; ?><br/>
				<a href="dashboard/"> Return home </a>
				
			</p>
		</div>

<div style="padding-bottom: 60px;"></div>
	</div>
</div>
	</div>

</div>
</body>
</html>