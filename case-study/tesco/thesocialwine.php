<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Enotria, The Social Wine | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../pgtips/cuppaclub" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Enotria, The Social Wine</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>July 2012</li>
					<li><strong>Client: </strong>Enotria</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, PHP Fat-Free Framework</li>	
					<li><strong>Tasks:</strong> Front end development of Facebook app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed all of the front end build for Enotria, The Social Wine Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
						<p>Take part in creating the world's first community sourced wine.<br>
						We're launching a completely bespoke bottle of wine, created entirely by you - our online community. There are fantastic prizes up for grabs and one lucky winner will get the chance to visit the vineyards in South Africa and experience first-hand how the wine is made by the local community.</p>
					</li>
					<li><strong>View site:</strong> <a href="https://www.facebook.com/tesco/app_210250815791897" class="targetBlank">http://www.facebook.com/Tesco</a></li>
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
						<img src="/img/pages/case-study/tesco/enotria-thesocialwine-home.jpg" alt="Enotria, The Social Wine" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>