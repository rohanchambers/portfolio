<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Playboy UK | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../jaguar/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../playboy/playboyU" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Playboy UK</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>March 2009</li>
					<li><strong>Client: </strong>Playboy UK</li>	
					<li><strong>Company: </strong><a href="http://www.playboy.co.uk/" class="targetBlank">Playboy UK</a></li>								
					<li><strong>Technologies: </strong><p>I helped on this site as a front end developer creating modules to fit the grid within the CMS. Working with an external web agency that were creating the back end and the build of the CMS.</p></li>	
					<li><strong>Tasks:</strong> Front-end development</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>The all new Playboy UK 2009 has just been launched. With a completely new look and feel this site is backed up with a new tailored CMS to manage all existing and upcoming assets of Playboy UK.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.playboy.co.uk/" class="targetBlank">http://www.playboy.co.uk/</a></li>
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
					<li><img src="/img/pages/case-study/playboy/articles.jpg" alt="Playboy UK" width="580" height="634" /></li>
					<li><img src="/img/pages/case-study/playboy/girls.jpg" alt="Playboy UK" width="580" height="632" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>