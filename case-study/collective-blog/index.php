<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Collective Internal Blog | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">	
					<li><a href="../honda/made-in-britain" class="go-back" title="Previous Project"></a></li>						
					<li><a href="/portfolio" class="go-all" title="All Projects"></a></li>
					<li><a href="../pringles/" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>			
				<h2>Collective London Internal Blog</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>November 2011</li>
					<li><strong>Client: </strong>Collective London</li>	
					<li><strong>Agency: </strong><a href="http://www.collectivelondon.com/" class="targetBlank">Collective London</a></li>								
					<li><strong>Technologies: </strong>HTML5, CSS, jQuery, Wordpress theme creation </li>	
					<li><strong>Tasks:</strong> Front-end development, cross browser compatibility testing, build of templates, integration into Wordpress</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>Collective London needed an internal blog for all employees to be able to post various updates on the agency or anything that is relevant to digital media or our work in general.</p>
						<p>I built all of the front end in HTML5, CSS3, jQuery and then integrated this into Wordpress for its CMS capabilities as a theme.</p>
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
					<li><img src="/img/pages/case-study/collective-blog/collective-blog.jpg" alt="Collective Internal Blog" width="580" height="888" /></li>
					<li><img src="/img/pages/case-study/collective-blog/collective-blog-single-post.jpg" alt="Collective Internal Blog" width="580" height="455" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>