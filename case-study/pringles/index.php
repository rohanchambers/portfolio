<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Pringles, Help the Oversharers | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../collective-blog/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Project"></a></li>
					<li><a href="../cadbury/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Pringles, Help the Oversharers</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>May 2010</li>
					<li><strong>Client: </strong>Pringles</li>	
					<li><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></li>								
					<li><strong>Technologies: </strong>XHTML, CSS, jQuery</li>				
					<li><strong>Summary: </strong></li>
					<li>
						<p>Pringles Help the oversharers is a site primarily built in Flash. Its aimed to show or wake up people on how sharing too many posts on Facebook can become very tedious and how oversharing can end up sounding totally ridiculous when pointed out. Visit the site to show your friends how much they over share.</p>						
						<p>I developed the pages that would show if Flash or Javascript are not installed or turned off respectively. Mainly XHTML and CSS build's of new pages with strict accessibility and W3C standards.</p>						
						<p>This was a freelance job I worked on for one of the top 5 digital advertising agency's in the UK, Wunderman.</p>
					</li>
					<li><strong>View site:</strong> No longer live</li>
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
					<li><img src="/img/pages/case-study/pringles/campaign.jpg" alt="Pringles, Help the Oversharers" width="580" height="330" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>