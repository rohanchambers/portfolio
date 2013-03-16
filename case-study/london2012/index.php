<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'London 2012, Young Leaders | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../bridging-the-gap/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../honda/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>London 2012, Young Leaders</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> February 2011</li>
					<li><strong>Client:</strong> The Olympics, London 2012</li>
					<li><strong>Agency:</strong> <a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>				
					<li><strong>Technologies:</strong> XHTML, CSS, jQuery</li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>I developed a section to the London 2012 website called 'Young Leaders'. I had to understandably develop this around the original site and its framework to work in the CMS.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.london2012.com/young-leaders/" class="targetBlank">http://www.london2012.com/young-leaders/</a></li>
				</ul>
				<div class="hr"></div>	
				<ul class="case-study-details">
					<li><strong>Share this:</strong></li>					<li>
						<?php include("../../includes/php/sharethis.php"); ?>						
					</li>
</ul>				
			</div>
			
			<div id="right-col">
				<ul>
					<li><img src="../../img/pages/case-study/london2012/london2012-young-leaders-home.jpg" alt="The London 2012 Olympics - Young Leaders" width="580" height="475" /></li>
					<li><img src="../../img/pages/case-study/london2012/london2012-young-leaders-meet.jpg" alt="The London 2012 Olympics - Young Leaders" width="580" height="563" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>