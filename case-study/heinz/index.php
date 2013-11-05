<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Heinz, HP Movember | RohanChambers.net';
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
					<li><a href="../bulmers/harvestimator" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>HP Movember</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>November 2013</li>
					<li><strong>Client: </strong>Heinz</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, jQuery</li>	
					<li><strong>Tasks:</strong> Front end development of app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>I developed all of the front end build for the PG Bulmers Harvestimator Facebook app. while working closely with the backend developers that were integrating my templates in the PHP Fat-Free Framework.</p>
						<p>We've been making Bulmers cider here in Hereford for over 125 years, and we take our cider-making very seriously indeed.</p>
						<p>BUT, it isn't all work, work, work down here on Broome Farm, no sir! For this year's apple harvest, we want you - the great Bulmers fans - to be a part of it. Take your guesses as we challenge our trees to the ultimate harvest showdown, for your chance to win FANTASTIC PRIZES!</p>
					</li>
					<li><strong>View app:</strong> <a href="https://www.facebook.com/HPSauceUK/app_682253515127994" class="targetBlank">https://www.facebook.com/HPSauceUK/</a></li>					
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
						<img src="/img/pages/case-study/heinz/movember/home.jpg" alt="Heinz, HP Movember" />
					</li>
					<li>
						<img src="/img/pages/case-study/heinz/movember/challenge.jpg"" alt="Heinz, HP Movember" />
					</li>
					<li>
						<img src="/img/pages/case-study/heinz/movember/gallery.jpg"" alt="Heinz, HP Movember" />
					</li>

				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>