<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Sheba UK Follow your Passion | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">		
					<li><a href="../uefa/" class="go-back" title="Previous Project">&lt;</a></li>					
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../anglo-american/" class="go-next" title="Next Project">&gt;</a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Sheba UK Follow your Passion</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>May 2012</li>
					<li><strong>Client: </strong>Sheba</li>	
					<li><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS, jQuery</li>	
					<li><strong>Tasks:</strong> Front-end development, Facebook tab page, cross browser compatibility testing.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed the holding page and the Facebook tab page for Sheba UK which has just introduced the lovely Eva Longoria as part of the new Sheba story. Built in HTML5, CSS3 and JavaScript/jQuery for the background image resizing functionality. This was so the page resized proportionality depending on the size of the viewers browser window.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://uk.sheba.com" class="targetBlank">http://uk.sheba.com</a></li>
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
					<li><img src="/img/pages/case-study/sheba/sheba.jpg" alt="Sheba UK Follow your Passion" /></li>
					<li><img src="/img/pages/case-study/sheba/shebaFB.jpg" alt="Sheba UK Follow your Passion Facebook Tab" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>