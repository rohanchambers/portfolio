<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Anglo American - Story | RohanChambers.net';
$classBody = 'case-study';
$thisPage ='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../sheba/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../honda/honda-dreamfactory" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Anglo American - Get the full story</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>October 2011</li>
					<li><strong>Client: </strong>Anglo American</li>	
					<li><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS, jQuery</li>	
					<li><strong>Tasks:</strong> Front-end development, cross browser compatibility testing, build of templates.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I built most of the front end for this site including all templates in HTML5, CSS and some jquery to then be handed over to the back end developers that were integrating them in a bespoke CMS.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.getthefullstory.com/" class="targetBlank">http://www.getthefullstory.com/</a></li>
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
					<li><img src="/img/pages/case-study/anglo-american/get-the-full-story.jpg" alt="Anglo American" width="580" height="471" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>