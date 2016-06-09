<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?=$browserTitle?></title>
	<meta name="description" content="<?=$browserDescription?>" />
	<meta name="keywords" content="<?=$browserKeywords?>" />
	
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta name="author" content="Rohan Chambers" />		

	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="/favicon.ico" />  
	<link type="text/css" rel="stylesheet" href="/includes/css/styles.min.css">
	<script src="/includes/js/libs/modernizr-2.5.2.min.js"></script>
</head>

<body class="<?=$classBody?>">
	<div id="skipLinks" class="visuallyhidden">
		<h2>Skip Links</h2>
		<ul>
			<li><a href="index.php" accesskey="0">Go to home page [Accesskey '0']</a></li>
			<li><a href="#header" accesskey="1">Go to menu [Accesskey '1']</a></li>
			<li><a href="#content" accesskey="2">Go to content [Accesskey '2']</a></li>
			<li><a href="#footer" accesskey="3">Go to footer [Accesskey '3']</a></li>
		</ul>
	</div>
	<div id="top"></div>
	<div id="container">
		<header>
			<div id="logo">
				<a href="/">Rohan Chambers</a>
				<img src="http://rohanchambers.net/img/global/rohanchambers.jpg" alt="Rohan Chambers" title="Rohan Chambers" />
			</div>
			<nav role="navigation">
				<ul>
					<li<?php if ($classBody=="home") echo " class=\"currentpage\""; ?>><a href="/">Home <span>Welcome</span></a></li>
					<li<?php if ($classBody=="portfolio") echo " class=\"currentpage\""; ?>><a href="/portfolio">Portfolio <span>My work</span></a></li>
					<li<?php if ($classBody=="services") echo " class=\"currentpage\""; ?>><a href="/services">Services <span>What I do</span></a></li>
					<li<?php if ($classBody=="contact") echo " class=\"currentpage\""; ?>><a href="/contact">Contact <span>Get in touch</span></a></li>
					<li<?php if ($classBody=="blog") echo " class=\"currentpage\""; ?> class="last"><a href="http://blog.rohanchambers.net/">Blog <span>Various</span></a></li>
				</ul>
			</nav>
		</header><!-- /header -->
