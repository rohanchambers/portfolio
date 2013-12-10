<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Cadbury, Advent Calendar | RohanChambers.net';
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
					<li><a href="../cadbury/advent-calendar" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Hotels.com Photo competition</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>December 2013</li>
					<li><strong>Client: </strong>Hotels.com</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, jQuery, Isotope.js</li>	
					<li><strong>Tasks:</strong> Front end development of app.</li>		
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed all of the front end build for the Hotels.com photo competition.</p>
						<p>Share your best travel photos with us<br>						
						You could win £500 off your next holiday with Hotels.com!<br>
						We're on the lookout for fantastic photos of your city breaks, beach getaways and adventures in the great outdoors. Whether you've traveled for culture, relaxation, or mother nature at her finest, we want to see your best shots!</p>
					</li>
					<li><strong>View app:</strong> <a href="http://www.facebook.com/Hotels.comUK/app_1376986462540953" class="targetBlank">http://www.facebook.com/Hotels.comUK/</a></li>															
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
						<img src="/img/pages/case-study/hotelsdotcom/home.jpg" alt="Hotels Photo competition" />
					</li>
					<li>
						<img src="/img/pages/case-study/hotelsdotcom/fancybox.jpg" alt="Hotels Photo competition" />
					</li>
					<li>
						<img src="/img/pages/case-study/hotelsdotcom/entry.jpg" alt="Hotels Photo competition" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>