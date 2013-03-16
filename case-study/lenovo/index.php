<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Lenovo, The Year of the Do | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../evian/" class="go-back" title="Previous Project"></a></li>					
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../pgtips/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Lenovo, The Year of the Do</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>November 2012</li>
					<li><strong>Client: </strong>Lenovo</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, PHP Fat-Free Framework</li>	
					<li><strong>Tasks:</strong> Front end development of Facebook app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I worked on the front end build of the Lenovo, The year of do Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
						<p>With New Year coming soon, Lenovo asked We Are Social to build a Facebook app to make 2013 "The Year of Do". With this app, people worldwide can submit what they will do for the New Year, from a variety of tags. Everyone who pledges a resolution gets their profile pic added to a wall of faces which you can then explore and see what the world has pledged.</p>
						<p>It automatically detects which country you are visiting it from and works out what language to display (including German, Portuguese, Ukraininan, Vietnamese and Thai). You can search by name, resolution and tag or country as well.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.facebook.com/lenovo/app_568121793204954" class="targetBlank">http://www.facebook.com/lenovo</a></li>
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
						<img src="/img/pages/case-study/lenovo/lenovo_resolutions.jpg" alt="PG Tips, Warm up Britain" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>