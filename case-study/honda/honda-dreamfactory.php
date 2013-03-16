<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Honda Dream Factory | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../anglo-american/" class="go-back"></a></li>	
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../honda/honda-hub" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Honda Dream Factory</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> July 2011</li>
					<li><strong>Client:</strong> Honda UK</li>
					<li><strong>Agency:</strong> <a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>				
					<li><strong>Technologies:</strong> HTML 5, CSS, jQuery</li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>I helped develop the front end to another Honda hub site called Dream Factory that followed the <a href="/case-study/honda/honda-hub.php">Honda Hub Stories</a> site. Again this site was built and then passed on to the back end developers that were integrating it in Wordpress so that the clients could manage future content and updates via the CMS.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://hub.honda.co.uk/dreamfactory/" class="targetBlank">http://hub.honda.co.uk/dreamfactory/</a></li>
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
					<li><img src="../../img/pages/case-study/honda/honda-dreamfactory.jpg" alt="Honda Dream Factory" width="580" height="1217" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>