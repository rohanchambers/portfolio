<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Fashion-istical | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../amberton/" class="go-back"></a></li>
					<li><a href="/portfolio.php" class="go-all"></a></li>
					<li><a href="../freelance-work/" class="go-next"></a></li>
				</ul>
				<div class="hr"></div>
				<h2>Fashion-istical</h2>
				<ul class="case-study-details">
					<li><strong>Date:</strong> September 2010</li>
					<li><strong>Client:</strong>Fashion-istical (Personal project)</li>			
					<li><strong>Technologies:</strong> XHTML, CSS, jQuery, Wordpress integration</li>				
					<li><strong>Summary:</strong></li>
					<li>
						<p>Complete design and development of the look and feel of Fashion-istical magazine website. Worpress cms integration as a theme curently in process.</p>
						<p>I designed and developed an idea for a fashion magazine that will be based upon articles about fashion. This is a personal project/idea for friends that maybe starting up a fashion magazine company. The site will be integrated into Wordpress for its cms capabilities to allow regular updates of the sites content.</p>
					</li>
					<li><strong>View site:</strong> <a href="http://www.rohanchambers.net/projects/fashion-istical/index.html" class="targetBlank">Fashion-istical template</a></li>
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
					<li><img src="/img/pages/case-study/fashionistical/template.jpg" alt="Fashion-istical Template" width="580" height="897" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>