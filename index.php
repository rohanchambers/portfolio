<?php
$classBody = 'home';
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Rohan Chambers | London Freelance Front End Developer and Web Designer | HTML5 Developer, PSD to HTML5</title>
	<meta name="description" content="This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK." />
	<meta name="keywords" content="rohan chambers, rohan, chambers, freelance front end developer, front end developer, london front end developer, html5 developer, web developer, web designer, html5, css3, responsive web design" />	
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta name="author" content="Rohan Chambers" />	
	<meta name="google-site-verification" content="O_EstnFbqzbLNjMIFBb3JlSbZqtFiwRyt3LVJUUd8LE" />	
	<meta name="viewport" content="width=device-width">
	<meta property="og:image" content="http://www.rohanchambers.net/img/global/fb_logo.png" />	
	<link rel="shortcut icon" href="/favicon.ico" />  
	<link type="text/css" rel="stylesheet" href="/includes/css/styles.min.css">
	<script src="/includes/js/libs/modernizr-2.5.2.min.js"></script>	
</head>

<body class="home">
	<div id="skipLinks" class="visuallyhidden">
		<h2>Skip Links</h2>
		<ul>
			<li><a href="index.php" accesskey="0">Go to home page [Accesskey '0']</a></li>
			<li><a href="#header" accesskey="1">Go to menu [Accesskey '1']</a></li>
			<li><a href="#content" accesskey="2">Go to content [Accesskey '2']</a></li>
			<li><a href="#footer" accesskey="3">Go to footer [Accesskey '3']</a></li>
		</ul>
	</div>
	<div id="top"></div>
	<div id="container">
		<header>
			<div id="logo">
				<a href="/">Rohan Chambers</a>
				<img src="img/global/rohanchambers.jpg" alt="Rohan Chambers" title="Rohan Chambers" />
			</div>
			<nav role="navigation">
				<ul>
					<li<?php if ($classBody=="home") echo " class=\"currentpage\""; ?>><a href="/">Home <span>Welcome</span></a></li>
					<li<?php if ($classBody=="portfolio") echo " class=\"currentpage\""; ?>><a href="/portfolio">Portfolio <span>My work</span></a></li>
					<li<?php if ($classBody=="services") echo " class=\"currentpage\""; ?>><a href="/services">Services <span>What I do</span></a></li>
					<li<?php if ($classBody=="contact") echo " class=\"currentpage\""; ?>><a href="/contact">Contact <span>Get in touch</span></a></li>
					<li<?php if ($classBody=="blog") echo " class=\"currentpage\""; ?> class="last"><a href="http://blog.rohanchambers.net/">Blog <span>Various</span></a></li>
				</ul>
			</nav>
			<div id="sharethis">
				<span class='st_fblike'></span>			
				<span class='st_sharethis'></span>
				<span class='st_facebook'></span>
				<span class='st_twitter'></span>
				<span class='st_googleplus'></span>
				<span class='st_email'></span>			
			</div>
			<!-- AddThis Button END -->
		</header><!-- /header -->

		<div id="content" class="clearfix">
			<section id="carousel-container">
				<?php include("includes/php/carousel.php"); ?>
			</section><!-- /section #Carousel-container -->
			<div id="skip-content" class="visuallyhidden"></div>
			<section id="more">			
				<div id="scroll"><a class="arrow-down" href="#skip-content" title="Skip to content"></a></div>
				<div id="about">
					<h1>Welcome to the online portfolio of <br>Rohan Chambers</h1>
					<p>This <strong>website</strong> is primarily designed to be an online portfolio presence for <strong>Rohan Chambers</strong>, a <strong>Front-end Developer/Web Designer</strong> based in London, UK.
					I am currently working as a <strong>Social Media Technologist (Front end)</strong> for an agency called <strong>We Are Social</strong>. Prior to this I was working full time at <strong>Playboy UK</strong> for 3 years as a web developer and continue to freelance on an occasional basis.</p>		
					<p>Some of the <strong>Technologies</strong> used on this site and other <strong>Projects</strong> I have done include <strong>XHTML, CSS</strong> complemented by some Javascript, Jquery, PHP and Wordpress.
					I am currently being exposed to <strong>HTML5 and CSS3</strong> for projects in the near future and have good knowledge of best practices in <strong>Accessibility</strong>, SEO and <strong>W3C standards</strong>.</p>
				</div>
				<div id="skills">
					<h2>My skills:</h2>
					<ul class="bullets">					
						<li>XHTML - HTML5 (Advanced level)</li>
						<li>CSS (2 &amp; 3) (Advanced) level</li>
						<li>Clean HTML Semantic Mark-up</li>
						<li>Responsive web design</li>
						<li>iPhone/iPad Mobile Websites</li>
						<li>JavaScript/jQuery (Integration level)</li>
						<li>PHP (Basic level)</li>
						<li>Wordpress Theme Development</li>
						<li>Coding to W3C Web Standards</li>
						<li>Accessibility Standards</li>
						<li>Cross Browser Compatibility</li>
						<li>Search Engine Optimisation (SEO)</li>  					
					</ul>				
					<a href="services" class="btn-global">Find out more<span class="arrow"></span><span></span></a>
				</div>
				<div id="contact" class="last">
					<h2>Contact:</h2>
					<p><a href="mailto:info@rohanchambers.net" class="block-link">info@rohanchambers.net</a></p>
					<h2>Recruit me:</h2>
					<ul class="bullets">
						<li>Available for small freelance projects remotely.</li>
					</ul>
					<div id="cv">
						<h2 id="icon-underhood"><a class="lightbox-home" title="Under the Hood of RohanChambers.net" href="#">Under the Hood:</a></h2>
						<h2 id="icon-cv"><a href="../../img/documents/RohanChambersCV.pdf" title="Rohan Chambers CV">Download CV:</a></h2>						
						<h2>Get a quote:</h2>
						<p>Get a quote for your site or project by filling in a short questionnaire with your needs and I will get back to you asap.</p>
						<a href="get-a-quote" class="btn-global">Get a quote<span class="arrow"></span><span></span></a>																
					</div>
				</div>
			</section><!-- /section #more  -->	
								
			<section id="what-i-do">			
				<h2>To see what I do<br /> click below to find out more</h2>
				<ul>
					<li>
						<a href="services" title="web design">
							<h3>Web Design</h3>
							<p>I can design websites for various types of business's always keeping in mind a look and feel aspect that will suit any particular type of company in order to reflect its name, image and product.</p>
		                    <span class="btn-global">Find out more<span class="arrow"></span><span></span></span>
	                    </a>
					</li>
					<li>
						<a href="services" title="web development">
							<h3>Web Development</h3>
							<p>I can take on and develop all sizes of projects from personal to commercial websites with the use of the latest web technologies. Competitive prices and a professionally delivered product.</p>
							<span class="btn-global">Find out more<span class="arrow"></span><span></span></span>
						</a>
					</li>
					<li>
						<a href="services" title="PSD to HTML5 Conversion">					
							<h3>PSD to HTML5</h3>
							<p>I specialise in taking your designs/photoshop (PSD) file(s) and converting them into a clean cross-browser and cross-platform Xhtml/CSS web template or complete website.</p>
							<span class="btn-global">Find out more<span class="arrow"></span><span></span></span>
						</a>
					</li>
					<li class="last">
						<a href="services" title="Social Media builds">					
							<h3>Social Media builds</h3>
							<p>I can develop web pages for Facebook tabs using FBML to help promote your product or company as well as Youtube channel re-skins to fit your brands look and feel.</p>
							<span class="btn-global">Find out more<span class="arrow"></span><span></span></span>
						</a>
					</li>
				</ul>				
			</section><!-- /section #what I do -->
		</div><!-- /content -->
<?php include("includes/php/footer.php"); ?>