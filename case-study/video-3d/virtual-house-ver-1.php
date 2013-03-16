<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = '3D Virtual House Version 1. | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../video-3d/" class="go-back"></a></li>
					<li><a href="/portfolio.php" class="go-all"></a></li>
					<li><a href="../video-3d/archi-design.php" class="go-next"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>3D Virtual House</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>2007</li>						
					<li><strong>Technologies: </strong> 3D Animation and Video</li>	
					<li><strong>Tasks:</strong> 3D modelling, animation and video editing.</li>		
					<li><strong>Tools:</strong> Cinema 4D and Final cut Pro</li>		
					<li><strong>Summary: </strong></li>
					<li>
						<p>These stills are from the thesis practical I made for my degree year. It was a continuation from the house project below. It has much more detail and really shows the model in every conceivable angle. To view the whole movie use the links below. As previously mentioned I recommend the larger movie but then again it all depends on your internet speed connection. But its worth the wait.</p>
					</li>
					<li><strong>View project: </strong>Video &amp; images</li>
				</ul>
				<div class="hr"></div>	
				<ul class="case-study-details">
					<li><strong>Share this:</strong></li>					<li>
						<?php include("../../includes/php/sharethis.php"); ?>						
					</li>
</ul>				
			</div>
			
			<div id="right-col">     
					<object width="580" height="400">
	                    <param value="true" name="allowfullscreen">
	                    <param value="always" name="allowscriptaccess">
	                    <param value="http://vimeo.com/moogaloop.swf?clip_id=11481065&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" name="movie">
	                    <embed width="580" height="400" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" src="http://vimeo.com/moogaloop.swf?clip_id=11481065&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1">                    
                    </object>                
               </div>			
        	</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>