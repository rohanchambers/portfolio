<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Redbull Editions, Instagram your Inspiration | RohanChambers.net';
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
					<li><a href="../jaguar/jaguar-desire" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Redbull Editions<br>Instagram your Inspiration</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>March 2013</li>
					<li><strong>Client: </strong>Redbull</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery, Responsive design/development</li>	
					<li><strong>Tasks:</strong></li>
					<li>
						<p>I developed the complete front-end build for this Redbull microsite. The site is completely responsive for all major mobile devices including the iPad and iPhone. Interaction with the Instagram API for all data calling by the back-end developers I work with.</p>
						<p>Instagram your inspiration in Red, Silver or Blue to claim a can. Below is a small get started instruction outline of how the site works and integrates with Instagram.</p>
						<ul class="bullets">
							<li>Shoot & Upload: Upload your most creative red, blue or silver photo to Instagram.</li>
							<li>Tag & Share Tag your Instagrams with @RedBullUK and either #rededitionplease #silvereditionplease or #blueditionplease in your caption.</li>
							<li>Claim a can: If your Instagram makes our gallery we will be in touch with details of how to claim your Red Bull Edition.</li>
							<li>Give your Instagram Wings: The most inspiring Instagrams as chosen by our editors will be exhibited in cities across the UK.</li>
						</ul>
					</li>
					<li><strong>View site:</strong> <a href="http://redsilverblue.redbull.co.uk/" class="targetBlank">RedSilverBlue.Redbull.co.uk</a><br>
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
						<img src="/img/pages/case-study/redbull/home.jpg" alt="Redbull, Our Editions" />
					</li>
					<li>
						<img src="/img/pages/case-study/redbull/home-mobile.jpg" alt="Redbull, Our Editions" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>