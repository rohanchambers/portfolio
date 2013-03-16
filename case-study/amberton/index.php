<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Amberton Neumann Consultancy | RohanChambers.net';
$classBody = 'case-study';
$thisPage ='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../flh/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../fashion-istical/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Amberton Neumann Consultancy</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>March 2012</li>
					<li><strong>Client: </strong>Amberton Neumann</li>	
					<li><strong>Technologies: </strong>HTML5, CSS, jQuery, Wordpress Theme development</li>	
					<li><strong>Tasks:</strong> Design, Front-end development, cross browser compatibility testing, build of templates, CMS integration</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>Complete design, front end build and CMS integration of Wordpress for the client to update on a daily basis. This site was designed and built to revamp the image of Amberton Neumann.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.ambertonneumann.co.uk/" class="targetBlank">http://www.ambertonneumann.co.uk/</a></li>
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
					<li><img src="/img/pages/case-study/amberton/amberton.jpg" alt="Amberton Neumann" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>