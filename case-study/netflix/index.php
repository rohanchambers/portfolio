<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Netflix, Breaking Bad Spoiler Foiler | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../bulmers/harvestimator" class="go-back" title="Previous Project"></a></li>												
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../pgtips/cuppaclub2" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Breaking Bad Spoiler Foiler</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>September 2013</li>
					<li><strong>Client: </strong>Netflix</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3</li>	
					<li><strong>Tasks:</strong> Front end development of site</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I built all the front end development on this project.</p>
						<p>Behind on Breaking Bad? Now you can check your feed without fear. Any tweets with danger words get blacked out, as below. When you've caught up, it's safe to go back to normal Twitter. Until Heisenberg comes knocking again on Monday.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.spoilerfoiler.com/" class="targetBlank">SpoilerFoiler.com/</a></li>					
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
						<img src="/img/pages/case-study/netflix/spoilerfoiler.jpg" alt="Spoiler Foiler" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>