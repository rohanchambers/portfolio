<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Heineken, The Beauty of Brewing | RohanChambers.net';
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
					<li><a href="../volvic/toughmudder" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Heineken, The Beauty of Brewing</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>May 2014</li>
					<li><strong>Client: </strong>Heineken</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, jQuery, Skrollr plugin, Canvas, CSS transitions</li>	
					<li><strong>Tasks:</strong> Front end development of app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p></p>
					</li>
					<li><strong>View site:</strong> <a href="http://heineken.co.uk/beautyofbrewing" class="targetBlank">http://heineken.co.uk/beautyofbrewing</a></li>
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
						<img src="/img/pages/case-study/heineken/beautyofbeer/home.jpg" alt="Heineken, The Beauty of Brewing" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>