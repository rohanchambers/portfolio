<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'EDF Energy | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../debenhams/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../jaguar/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>
				<h2>EDF Energy</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>June 2009</li>
					<li><strong>Client: </strong>EDF Energy</li>	
					<li><strong>Agency: </strong><a href="http://www.redhouselane.com/" class="targetBlank">RedHouseLane</a></li>								
					<li><strong>Technologies: </strong>built in XHTML, tables with inline CSS</li>	
					<li><strong>Tasks:</strong> HTML email development</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed the email newsletter for EDF Energy. Built in tables so this would work with their in house email client system.</p>
					</li>
					<li><strong>View site:</strong> View image</li>
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
					<li><img src="/img/pages/case-study/edf-energy/edf-energy.jpg" alt="Debenhams Personal Finance" width="561" height="626" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>