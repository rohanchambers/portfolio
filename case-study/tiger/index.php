<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Tiger Beer Zodia Pairs | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../jaguar/jaguar-desire" class="go-back" title="All Projects"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../evian/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Tiger Beer Zodia Pairs</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>February 2013</li>
					<li><strong>Client: </strong>Tiger Beer</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, iPhone version</li>	
					<li><strong>Tasks:</strong></li>
					<li>
						<p>I worked on this Facebook app. game for Tiger Beer as a front end developer. It's a simple little pairs game which however has a lot of back end functionality to make the game work well within Facebook.</p>
					</li>
					<li><strong>View app:</strong><br>
						<a href="http://www.facebook.com/tigerbeeruk/app_521667997866887" class="targetBlank">https://www.facebook.com/tigerbeeruk</a>
					</li>
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
						<img src="/img/pages/case-study/tiger/likegate.jpg" alt="Tiger Beer Zodia Pairs" />
					</li>
					<li>
						<img src="/img/pages/case-study/tiger/leaderboard.jpg" alt="Tiger Beer Zodia Pairs" />
					</li>
					<li>
						<img src="/img/pages/case-study/tiger/play.jpg" alt="Tiger Beer Zodia Pairs" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>