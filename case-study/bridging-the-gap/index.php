<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'London 2012, Bridging the Gap | RohanChambers.net';
$classBody = 'case-study';
$thisPage ='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../honda/test-drive-prototype.php" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../london2012/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>									
				<h2>London 2012, Bridging the Gap</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> February 2011</li>
					<li><strong>Client:</strong> The Olympics, London 2012</li>
					<li><strong>Agency:</strong> <a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>				
					<li><strong>Technologies:</strong> XHTML, CSS, jQuery</li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>Bridging the gap is a supporting site for the London 2012 Olympics site. I developed all of the front end templates for the site to be integrated in to a CMS by a third party agency using the DotNetNuke CMS. All pages had to be accessible as this is a government site so functionality was built to allow font size change, dyslexia and high resolution versions of the site.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.bridging-the-gap.co.uk/" class="targetBlank">http://www.bridging-the-gap.co.uk/</a></li>
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
					<li><img src="../../img/pages/case-study/bridging-the-gap/bridging-the-gap.jpg" alt="The London 2012 Olympics - Bridging the Gap" width="580" height="475" /></li>
					<li><img src="../../img/pages/case-study/bridging-the-gap/bridging-the-gap-2.jpg" alt="The London 2012 Olympics - Bridging the Gap" width="580" height="563" /></li>
					<li><img src="../../img/pages/case-study/bridging-the-gap/bridging-the-gap-3.jpg" alt="The London 2012 Olympics - Bridging the Gap" width="580" height="564" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>