<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Swift Corporation</title>
  <style type="text/css">
	  body {
	  	background-color: #0a5992;
	  }
	  .container {
	  	max-width: 960px;
	  	margin: 0 auto;
	  	text-align: center;
	  }
	  .img-logo img {
	  	width: 309px;
	  	height: 135px;
	  }
	  .copy {
	  	margin-top: 20px;
	  	margin-bottom: 20px;
	  	color: #FFF;
	  	font-family: Arial, Helvetica, sans-serif;
	  }
  </style>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div class="container">
  	<div class="img-logo">
  		<img src="/vendor/mobilelp/images/logo.png">
  	</div>
  	<div class="copy">
  		Thank you for your interest.
  	</div>
  	<div>
  		<a href="sms:<?php echo $tel; ?>"><img src="/vendor/mobilelp/images/btn_OpenTextApp.png"></a>
  	</div>
  </div>
</body>
</html>