<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Varela|Holtwood+One+SC' rel='stylesheet' type='text/css'><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Slide Carousel</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<div id="main-container">
		
		<div id="back-to-start">
			<a href="#">Back to start</a>
		</div>		
<!--
		<div id="full-screen">
			<a href="#">View fullscreen</a>
		</div>		
-->
		<div id="arrow-horizontal">
			<a class="btn-arrow-left" href="#"></a>
			<a class="btn-arrow-right" href="#"></a>
		</div>		
		<div id="arrow-vertical">
			<a class="btn-arrow-up" href="#"></a>
			<a class="btn-arrow-down" href="#"></a>
		</div>

		<div id="content">	
			<div id="viewport">
				
				<div id="vertical-slides" style="">
					<div class="slide-1 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->
					
					<div class="slide-2 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->

					<div class="slide-3 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->

					<div class="slide-4 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->
				</div><!-- End of Vertical Slide -->

				<div id="horizontal-slides" style="">
					<div class="slide-1 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->
					
					<div class="slide-2 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->

					<div class="slide-3 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->

					<div class="slide-4 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->
					<div class="slide-4 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->
					<div class="slide-4 slides">
						<?php include("includes/inc.box.php"); ?>
					</div><!-- End of box slides -->
				</div><!-- End of Horizontal Slide -->
					
			</div><!-- End of viewport -->					 
		</div><!-- End of content -->
	</div><!-- End of main container -->	
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="scripts/jquery-1.6.2.min.js"><\/script>')</script>-->
<script type="text/javascript" src="scripts/scripts.js"></script>
</body>
</html>