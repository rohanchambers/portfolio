<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'MyCallaway | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../harry-potter-part-2/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../honda/test-drive-prototype.php" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>MyCallaway.eu</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> March 2011</li>
					<li><strong>Client:</strong> Callaway</li>
					<li><strong>Agency:</strong> <a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>				
					<li><strong>Technologies:</strong> XHTML, CSS</li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>Callaway is a high end brand of golfing equipment and this site is to promote all there latest equipment and news. Currently there is a competition to win a one year test drive of a Lamborghini car.</p>
						<p>I developed some of the front end build for this site as a support to another developer in my team.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.mycallaway.eu/" class="targetBlank">http://www.mycallaway.eu/</a></li>
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
					<li><img src="/img/pages/case-study/mycallaway/mycallaway-home.jpg" alt="MyCallaway Golfing" width="580" height="996" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>