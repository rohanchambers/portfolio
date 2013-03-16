<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'The Merchant adventurers club | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../tiger/" class="go-back" title="All Projects"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../flh/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>The Merchant adventurers' club</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>January 2012</li>
					<li><strong>Client: </strong>The Merchant adventurers' club</li>	
					<li><strong>Agency: </strong>Freelance work</li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive design implementation</li>	
					<li><strong>Tasks:</strong></li>
					<li>
						<p>I built the complete front end build of this micro-site including the implementation of responsive design for iPad and iPhone.</p>
					</li>
					<li><strong>View site:</strong><br>
						<a href="http://www.merchantadventurersclub.com/" class="targetBlank">http://www.merchantadventurersclub.com/</a>
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
						<img src="/img/pages/case-study/merchant/home.jpg" alt="The Merchant adventurers' club" />
					</li>
					<li>
						<img src="/img/pages/case-study/merchant/about.jpg" alt="The Merchant adventurers' club" />
					</li>
					<li>
						<img src="/img/pages/case-study/merchant/benefits.jpg" alt="The Merchant adventurers' club" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>