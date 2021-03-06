<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Harrods work | RohanChambers.net';
$classBody = 'case-study';
$thisPage='portfolio';
?>
<?php include("../../includes/php/header.php"); ?>
	<div id="content" class="clearfix">
		<section id="case-study">
			<div id="left-col">
				<h1>Case study</h1>
				<ul id="controls">
					<li><a href="../playboy/playboy-summer-rain.php" class="go-back" title="Previous Project"></a></li>
					<li><a href="/portfolio.php" class="go-all" title="All Projects"></a></li>
					<li><a href="../harrods/harrods-email.php" class="go-next" title="Next Project"></a></li>
				</ul>
				<div class="hr"></div>	
				<h2>Harrods work</h2>
				<ul class="case-study-details">
					<li><strong>Date: </strong>August 2006</li>
					<li><strong>Clients: </strong>Armani, Guerlain, Acqua Di Parma, DuChamp, Harrods Ties</li>	
					<li><strong>Company: </strong>Harrods</li>								
					<li><strong>Technologies: </strong> Photoshop, XHTML &amp; CSS</li>	
					<li><strong>Tasks:</strong> Design &amp; build of landing pages</li>			
					<li><strong>Summary: </strong></li>
					<li>
						<p>Mainly keeping Harrods.com up to date with upcoming news, events and products. Working on premium consumer brands for the likes of Emporio Armanim, Hugo Boss, Guerlain, La Prairie and many more. Design and development of landing pages and micro sites with the use of XHTML, CSS and the Harrods bespoke CMS.</p>
					</li>
					<li><strong>View site:</strong> View images</li>
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
					<li><img src="/img/pages/case-study/harrods/armani-underwear.jpg" alt="Armani Underwear" width="580" height="364" /></li>
					<li><img src="/img/pages/case-study/harrods/guerlain-kiss-kiss.jpg" alt="Guerlain Kiss Kiss" width="580" height="438" /></li>
					<li><img src="/img/pages/case-study/harrods/acquaDiParma.jpg" alt="Acqua Di Parma" width="580" height="337" /></li>
					<li><img src="/img/pages/case-study/harrods/duChamp.jpg" alt="Du Champ" width="580" height="335" /></li>
					<li><img src="/img/pages/case-study/harrods/harrods-ties.jpg" alt="Du Champ" width="580" height="336" /></li>
				</ul>
			</div><!-- /#right-col -->
		</section><!-- /section -->						
	</div><!-- /content -->
<?php include("../../includes/php/footer.php"); ?>