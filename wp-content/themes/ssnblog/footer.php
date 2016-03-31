<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ssnblog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<!-- BM CHANGE Remove Wordpress and theme links and replace with .container-->
		<div class="container">

<p class="social-follow"

<h3>Follow us</h3>

	<a href="https://www.facebook.com/streetsupport">
		<img class="facebook_icon" src="http://icons.iconarchive.com/icons/danleech/simple/256/facebook-icon.png" height="20px" width="20px"></img>
	</a>
	<a href="https://twitter.com/streetsupportuk">
		<img class="twitter_icon" src="http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Web-Twitter-alt-2-Metro-icon.png" height="20px" width="20px"></img></a>
	</p>
<p class="footer__copy">&copy; 2016 Street Support Network</p>
	</div><!-- .container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
