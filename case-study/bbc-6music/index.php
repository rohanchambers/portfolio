<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'BBC 6Music | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="layout clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../ford/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../debenhams/" class="go-next" title="Next Project"></a></li>
				</ul>	
				<div class="hr"></div>			
				<h2>BBC 6Music</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>May 2010</li>
					<li><strong>Client: </strong>BBC</li>	
					<li><strong>Agency: </strong><a href="http://www.atticmedia.com/" class="targetBlank">Attic Media</a></li>								
					<li><strong>Technologies: </strong>XHTML, CSS</li>	
					<li><strong>Tasks:</strong> Front-end development, bug fixing, cross browser compatibility testing</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>The BBC are creating a music and radio section on their website developed by the agency Attic media. I worked on the BBC 6Music section of bbc.co.uk as a front end developer mainly doing xhtml and css cross browser fixes, bugs and ammends.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.bbc.co.uk/6music/" class="targetBlank">http://www.bbc.co.uk/6music/</a></li>
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
					<li><img src="/img/pages/case-study/bbc-6music/bbc-6music.jpg" alt="BBC 6Music" width="580" height="1069" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>