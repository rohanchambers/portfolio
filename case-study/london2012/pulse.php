<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'London 2012 Olympics, Pulse | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">	
					<li><a href="../london2012/supportyourteam" class="go-back" title="Back Project"></a></li>						
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../london2012/dashboard" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>London 2012 Olympics, <br>Olympic Pulse</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>August 2012</li>
					<li><strong>Client: </strong>London 2012 Olympics</li>	
					<li><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3</li>	
					<li><strong>Tasks:</strong> Front end development.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>See what's happening at the Olympic venues right now on Twitter. Find out who has been tweeting about what and from what Olympic location. <br>Click on the link below to see live link.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.london2012.com/join-in/Olympic-pulse/" class="targetBlank">www.london2012.com/Olympic-pulse/</a></li>
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
					<li><img src="/img/pages/case-study/london2012/pulse.jpg" alt="London 2012 Olympics, Pulse" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>