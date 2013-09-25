<?php
//Copyright 2013 Brandon Henry and brandonhenry.net
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="/favicon.ico" rel="shortcut icon">
	<!--[if lt IE 9]>
	     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
	<script type="text/javascript">//<![CDATA[
		if (typeof console === "undefined") {
	        console = {}; // define it if it doesn't exist already
	        console.log = function() {};
	        console.dir = function() {};
		}
	//]]></script>
	<script type="text/javascript">//<![CDATA[
		if (typeof window.BlobBuilder === "undefined") {
	        window.BlobBuilder = function() {}; // define it if it doesn't exist already
	    }
	//]]></script>
	
	<!-- bootstrap stuff -->

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- end bootstrap stuff -->

	<link rel="stylesheet" href="/assets/css/styles.css" />
	
	<title>brandonhenry.net</title>
</head>
<body>
<div class="container">
	<div id="header" class="hidden-xs col-xs-12">
		<h1>Brandon Henry</h1>
		<h2>Software Developer</h2>
		<h3><a href="mailto:brandon.m.henry@gmail.com">brandon.m.henry@gmail.com</a></h3>
		<h3><a href="tel://1-207-754-4303">207.754.4303</a></h3>
	</div>
	<div id="header-xs" class="visible-xs col-xs-12">
		<h1>bhenry</h1>
		<h2>developer</h2>
		<h3 class="buttons">
			<a href="mailto:brandon.m.henry@gmail.com" title="brandon.m.henry@gmail.com">
				<span class="glyphicon glyphicon-envelope"></span>
			</a>
			<a href="tel://1-207-754-4303" title="207.754.4303">
				<span class="glyphicon glyphicon-earphone"></span>
			</a>
		</h3>
	</div>
	<div id="content" class="col-xs-12">
		<div id="soon">more<br/>coming<br/>soon</div>
	</div>
	<div id="footer" class="col-xs-12">
		&copy; <?php echo date("Y"); ?> 
		<a href="http://brandonhenry.net/">brandonhenry.net</a>
	</div>
</div>
	
	<script src="/assets/js/main.js"></script>
	<script type="text/javascript">
		client.core.run();
	</script>
	
</body>
</html>