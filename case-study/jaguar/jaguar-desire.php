<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Jaguar Desire Calendar | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../tiger/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Jaguar Desire Calendar</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>March 2013</li>
					<li><strong>Client: </strong>Jaguar</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery</li>	
					<li><strong>Tasks:</strong></li>
					<li>
						<p>I developed the complete front-end build for the Jaguar Desire Calendar, Facebook app. </p>
						<p>To celebrate the imminent launch of the all-new F-TYPE, a car that we believe encapsulates desire, we have created a calendar based on the ultimate F-TYPE desires outlined by our social communities.</p>
						<p>Each day we will be revealing one of your desires via this Facebook app and giving you a chance to win a whole host of prizes, including exclusive trips, drives and gifts to be won every day over the next fortnight</p>
					</li>
					<li><strong>View app:</strong><br>
						<a href="http://www.facebook.com/JaguarUK/app_194134714044030" class="targetBlank">https://www.facebook.com/jaguarUK</a>
					</li>
				</ul>
				<div class="hr"></div>	
				<ul class="case-study-details">
					<li><strong>Share this:</strong></li>
					<li>
						<?php include("../../includes/php/sharethis.php"); ?>						
					</li>
				</ul>				
			</div>
			
			<div id="right-col">
				<ul>
					<li>
						<img src="/img/pages/case-study/jaguar/jaguar_calendar.jpg" alt="Tiger Beer Zodia Pairs" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>