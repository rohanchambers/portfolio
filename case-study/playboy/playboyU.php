<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'PlayboyU | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../playboy/" class="go-back"></a></li>
					<li><a href="/portfolio" class="go-all"></a></li>
					<li><a href="../playboy/playboyCorporate" class="go-next"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>PlayboyU</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>February 2009</li>
					<li><strong>Client: </strong>Playboy U</li>	
					<li><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">Playboy UK</a></li>								
					<li><strong>Technologies: </strong><p>This page was built using validated XHTML and CSS. PHP was used to capture the data information users would enter and then sent to our database. Our marketing team would then use these details to analyse and market PlayboyU as best we can.</p></li>	
					<li><strong>Tasks:</strong> Front-end development</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed this page for the Playboy U campaign. Playboy is looking for outgoing and highly motivated university students in the UK to help market Playboy's businesses.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.rohanchambers.net/projects/playboyU/" class="targetBlank">http://www.playboyu.co.uk/</a> (This link is not live anymore but the project is hosted on my server)</li>
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
					<li><img src="/img/pages/case-study/playboy/playboyU.jpg" alt="PlayboyU" width="580" height="686" /></li>				
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>