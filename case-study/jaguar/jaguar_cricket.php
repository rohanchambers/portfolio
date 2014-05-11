<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Jaguar Cricket India | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">			
					<li><a href="../jaguar/jaguar_ftype" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../tesco/tescoWines" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Jaguar, Cricket India</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>October 2012</li>
					<li><strong>Client: </strong>Jaguar</li>	
					<li><strong>Agency: </strong><a href="http://www.wearesocial.net/" class="targetBlank">We Are Social</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS3, JavaScript/jQuery</li>	
					<li><strong>Tasks:</strong> Front end build of Facebook app.</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>Built a Facebook app. so that people could tweet in real time about the live video using the #JaguarCricket hashtag. All tweets displayed in a twitter feed component.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.facebook.com/Jaguar" class="targetBlank">http://www.facebook.com/Jaguar</a> <br>(App. is offline)</li>
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
						<img src="/img/pages/case-study/jaguar/jaguar_cricket_likegate.jpg" alt="Tesco Live Christmas Wine Tasting and Q&A" />
					</li>
					<li>
						<img src="/img/pages/case-study/jaguar/jaguar_cricket.jpg" alt="Tesco Live Christmas Wine Tasting and Q&A" />
					</li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>