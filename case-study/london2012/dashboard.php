<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'London 2012 Olympics, Social Media Dashboard | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../london2012/pulse" class="go-back" title="Next Project"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../uefa/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>London 2012 Olympics,<br> Social Media Dashboard</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>August 2012</li>
					<li><strong>Client: </strong>London 2012 Olympics</li>	
					<li><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, Javascript and jQuery</li>	
					<li><strong>Tasks:</strong> Complete front end development</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>London2012 Social Media Dashboard. A collection of Olympic data from Facebook, Twitter, Google+ and YouTube. <br>Click on the link below to see the live site.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.london2012.com/social/" class="targetBlank">www.london2012.com/social/</a></li>
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
					<li><img src="/img/pages/case-study/london2012/dashboard.jpg" alt="London 2012 Olympics, Social Media Dashboard" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>