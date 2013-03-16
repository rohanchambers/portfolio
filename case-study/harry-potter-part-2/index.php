<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Harry Potter and the Deathly Hallows, Part 2 | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>	
				<ul id="controls">
					<li><a href="../honda/honda-hub.php" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../mycallaway/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Harry Potter and the Deathly Hallows,<br /> Part 2</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> April 2011</li>
					<li><strong>Client:</strong> EA Games</li>
					<li><strong>Agency:</strong> <a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>				
					<li><strong>Technologies:</strong> <p>HTML 5, CSS 3, jQuery, Wordpress</p></li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>With the final instalment to the Harry Potter movies comes the video game 'Harry Potter and the Deathly Hallows Part 2'. This is a supporting site to the game where fans and video gamers can find out the latest news about the game and all things related.</p>
						<p>I was in charge of the complete front end build of the website to then pass on to the back end developers which integrated the site in Wordpress for its CMS like capabilities. The site was localised in 7 languages and was built using HTML5.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://harrypotter.ea.com/" class="targetBlank">http://harrypotter.ea.com/</a></li>
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
					<li><img src="/img/pages/case-study/harrypotter-part-2/home.jpg" alt="Harry Potter" width="580" height="705" /></li>
					<li><img src="/img/pages/case-study/harrypotter-part-2/game-part-2.jpg" alt="Harry Potter" width="580" height="1164" /></li>
					<li><img src="/img/pages/case-study/harrypotter-part-2/game-part-1.jpg" alt="Harry Potter" width="580" height="841" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>