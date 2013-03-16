<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'KPMG &amp; Burberry | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../cadbury/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../nokia/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>KPMG &amp; Burberry</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>August 2010</li>
					<li><strong>Client: </strong>KPMG &amp; Burberry</li>	
					<li><strong>Agency: </strong><a href="http://www.conrandesigngroup.com/" class="targetBlank">Conran Design Group</a></li>								
					<li><strong>Technologies: </strong>XHTML, CSS, jQuery</li>				
					<li><strong>Summary: </strong></li>
					<li>
						<p>Front end development for the KPMG Burberry website. I was working on the build of the site with another front end developer. This site is heavily based on the jQuery library for its functionality. Very tight deadline of 4 days to develop the whole site to hand over to the clients. This site is not for public viewing but only for internal employees of KPMG so only a snapshot is here available.</p>
					</li>
					<li><strong>View site:</strong> Internal site only</li>
				</ul>
				<div class="hr"></div>	
				<ul class="case-study-details">
					<li><strong>Share this:</strong></li>					<li>
						<?php include("../../includes/php/sharethis.php"); ?>						
					</li>
</ul>				
			</div>
			
			<div id="right-col">
				<ul>
					<li><img src="/img/pages/case-study/kpmg/kpmg-home.jpg" alt="KPMG &amp; Burberry" width="580" height="393" /></li>
					<li><img src="/img/pages/case-study/kpmg/kpmg-audit.jpg" alt="KPMG &amp; Burberry" width="580" height="393" /></li>
					<li><img src="/img/pages/case-study/kpmg/kpmg-team.jpg" alt="KPMG &amp; Burberry" width="580" height="393" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>