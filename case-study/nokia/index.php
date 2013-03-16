<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Nokia Outdoor Series | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="layout clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../kpmg/" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../range-rover/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Nokia Outdoors Series</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>August 2010</li>
					<li><strong>Client: </strong>Nokia</li>	
					<li><strong>Agency: </strong><a href="http://www.wunderman.co.uk/" class="targetBlank">Wunderman</a></li>								
					<li><strong>Technologies: </strong>html tables, inline CSS, Campaign monitor</li>	
					<li><strong>Tasks:</strong> Html email template build</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>Email template build for the Nokia Outdoor Series newsletter. Built so that Nokia employees can update email on a weekly/monthly basis. Extensive testing on all major email clients with all major browsers such as Outlook 2007, Hotmail, Yahoo, Google mail... Accessibly built so that all content expands email without breaking when text size is increased.</p>
					</li>
					<li><strong>View site:</strong> View images</li>
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
					<li><img src="/img/pages/case-study/nokia/nokia-outdoors.jpg" alt="Nokia Outdoors" width="574" height="1756" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>
