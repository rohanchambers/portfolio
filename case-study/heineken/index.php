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
					<li><a href="../jaguar/livefearless" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Heineken, The Beauty of Brewing</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>October 2015</li>
					<li><strong>Client: </strong>Heineken</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, jQuery, Skrollr plugin, Canvas, CSS transitions, Fully responsive</li>	
					<li><strong>Tasks:</strong> Front end development of app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I helped develop Heinken's 'The Beauty of Brewing'. This is a parallax website that explains the story of how beer is made. It is broken down in to sections, each of being a vital ingredient to the brewing process Barley, Hops and Water.</p>
						<p>I developed this site to be fully responsive for all major devices. There was a lot of interaction with the designer (Jacob Lee) on this project to get all the animations perfect as well as all the other design elements in the project.</p>
						<p>The beauty of brewing is that it's a natural process, enhanced by craftsmanship to create the perfect beverage.</p>
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