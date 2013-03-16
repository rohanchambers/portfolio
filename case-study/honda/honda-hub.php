<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Honda Hub Home | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../honda/honda-dreamfactory" class="go-back"></a></li>	
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../harry-potter-part-2/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Honda Hub Stories</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> June 2011</li>
					<li><strong>Client:</strong> Honda UK</li>
					<li><strong>Agency:</strong> <a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>				
					<li><strong>Technologies:</strong> HTML 5, CSS, jQuery</li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>I developed the complete front end build for the Honda Hub Stories website to be passed on to the back end developers that were integrating my templates in Wordpress.</p>
						<p>This site will be duplicated and re-skinned for other Honda Hub sites so it was important that the front end build was flexible to cater for future designs.</p>
						<p>Honda hub's design was meant to support the all well known advertising agency <a href="http://www.wk.com/" class="targetBlank">WK</a>'s (Wieden Kennedy) promotional video for Honda.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://hub.honda.co.uk/" class="targetBlank">http://hub.honda.co.uk</a></li>
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
					<li><img src="../../img/pages/case-study/honda/honda-hub-home.jpg" alt="Honda Hub Stories" width="580" height="547" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>