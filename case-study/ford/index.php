<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Ford Galaxy | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../range-rover/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="Previous Project"></a></li>
					<li><a href="../bbc-6music/" class="go-next" title="Previous Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Ford Galaxy Email Newsletter</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>July 2010</li>
					<li><strong>Client: </strong>Ford</li>	
					<li><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></li>								
					<li><strong>Technologies: </strong>html tables, inline CSS, Campaign monitor</li>	
					<li><strong>Tasks:</strong> Html email template build</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>Email template build for Ford UK's Galaxy newsletter. Built so that Ford employees can update email on a weekly/monthly basis. Extensive testing on all major email clients with all major browsers such as Outlook 2007, Hotmail, Yahoo, Google mail... Accessibly built so that all content expands email without breaking when text size is increased.</p>
					</li>
					<li><strong>View site:</strong> View image</li>
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
					<li><img src="/img/pages/case-study/ford/ford-email.jpg" alt="Ford Email Newsletter" width="580" height="1673" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>