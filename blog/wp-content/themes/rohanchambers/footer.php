<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<footer class="layout">
			<div id="latest-posts">
				<h2>Inspirational sites:</h2>	
				<ul>
		            <li><a href="http://www.bbc.co.uk/" target="_blank"><strong>BBC site:</strong> I always find myself looking at the site when developing new projects. Its almost like its a standard for me. Always checkin their code and the new functionalities they use.</a></li>
		            <li><a href="http://www.csszengarden.com" target="_blank"><strong>CSS Zen Garden:</strong> A demonstration of what can be accomplished visually through CSS-based design.</a></li>
		            <li><a href="http://www.w3csites.com/" target="_blank"><strong>W3C Sites:</strong> is a collection of web sites created by designers that conform with the W3C standards.</a></li>
		            <li><a href="http://www.cssbeauty.com/" target="_blank"><strong>CSS beauty:</strong> news, jobs and community.</a></li>
				</ul>
			</div>	
			<div id="sites-i-follow">
			<h2>Sites I follow:</h2>
				<ul>
					<li><a target="_blank" href="http://www.w3.org/"><strong>The World Wide Web Consortium (W3C)</strong> develops interoperable technologies to lead the Web to its full potential.</a></li>
					<li><a target="_blank" href="http://www.alistapart.com/"><strong>A list apart:</strong> Explores the design, development, and meaning of web content.</a></li>
					<li><a target="_blank" href="http://www.w3schools.com/"><strong>W3C Schools:</strong> is the largest web developer site on the net. Full Web Building Tutorials.</a></li>
					<li><a target="_blank" href="http://www.netmag.co.uk/"><strong>.NET Magazine:</strong> is always full of great articles with tips and tricks regarding web dev. and design.</a></li>
				</ul>	
			</div>	
			<div id="follow-me" class="last">
				<h2>Follow me:</h2>
				<ul>
					<li><a href="mailto:info@rohanchambers.net"><img src="http://www.rohanchambers.net/img/icons/mail.png" alt="mail" width="35" height="35" /></a></li>
					<li><a href="http://www.linkedin.com/in/rohanchambers" target="_blank"><img src="http://www.rohanchambers.net/img/icons/linkedin.png" alt="linkedin" width="35" height="35" /></a></li>
					<li><a href="http://www.twitter.com/rohanchambers" target="_blank"><img src="http://www.rohanchambers.net/img/icons/twitter.png" alt="twitter" width="35" height="35" /></a></li>
					<li><a href="http://www.facebook.com/rohanchambers" target="_blank"><img src="http://www.rohanchambers.net/img/icons/facebook.png" alt="facebook" width="35" height="35" /></a></li>
					<li><a href="http://www.rohanchambers.net/rss/rohanchambersnewsfeed.xml"><img src="http://www.rohanchambers.net/img/icons/rss.png" alt="rss" width="35" height="35" /></a></li>
				</ul>
				<div id="twitter">
			        <img src="http://www.rohanchambers.net/img/icons/twitter-bird.png" alt="twitter-bird" width="64" height="64" /> 	                
			   	  	<div id="tweet">This is where I wanna be, this is where I'm goin', this is where I'll end!</div>
					<p><a href="http://www.twitter.com/rohanchambers" target="_blank"><img src="http://www.rohanchambers.net/img/icons/twitter-logo.png" alt="twitter-logo" width="75" height="17" /></a></p>
			    </div>
			</div>	
			<div id="clients" class="clearfix">
				<h2>Brands I work(ed) on:</h2>
				<ul>
					<li><a href="http://www.rohanchambers.net/case-study/playboy/"><img src="http://www.rohanchambers.net/img/icons/clients/playboy.jpg" alt="playboy" width="126" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/harrods/"><img src="http://www.rohanchambers.net/img/icons/clients/harrods.jpg" alt="harrods" width="90" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/jaguar/"><img src="http://www.rohanchambers.net/img/icons/clients/jaguar.jpg" alt="jaguar" width="90" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/honda/honda-hub.php"><img src="http://www.rohanchambers.net/img/icons/clients/honda.jpg" alt="honda" width="140" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/harry-potter-part-2/"><img src="http://www.rohanchambers.net/img/icons/clients/ea.jpg" alt="ea" width="75" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/bbc-6music/"><img src="http://www.rohanchambers.net/img/icons/clients/bbc.jpg" alt="BBC" width="88" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/bridging-the-gap/"><img src="http://www.rohanchambers.net/img/icons/clients/2012logo.jpg" alt="2012logo" width="90" height="40" /></a></li>
					<li><a href="http://www.rohanchambers.net/case-study/mycallaway/"><img src="http://www.rohanchambers.net/img/icons/clients/callaway.jpg" alt="callaway" width="90" height="40" /></a></li>
				</ul>
			</div>
			<div id="copyright">
				<p>Website Designed and Developed by Rohan Chambers &copy;<?php echo date("Y"); ?><br />
				Valid <a href="http://validator.w3.org/check?uri=referer">HTML 5</a> and <a href="http://rohanchambers.net/includes/css/layout.css">CSS 3</a> | <a href="http://www.rohanchambers.net/site-map.php">Site map</a> | <a href="http://www.rohanchambers.net/accessibility.php">Accessibility</a> | <a href="contact.php">Contact</a></p>
			</div>
		</footer>
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=2795365; 
var sc_invisible=1; 
var sc_security="dbf7ea22"; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div
class="statcounter"><a title="tumblr statistics"
class="statcounter"
href="http://www.statcounter.com/tumblr/"><img
class="statcounter"
src="http://c.statcounter.com/2795365/0/dbf7ea22/1/"
alt="tumblr statistics" /></a></div></noscript>
<!-- End of StatCounter Code -->

<!-- Start of Google Analytics Code -->
<!--
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2815826-1");
pageTracker._trackPageview();
} catch(err) {}</script>
-->
<!-- End of Google Analytics Code -->        
</body>
</html>