<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
	</div><!-- #footer -->

</div><!-- #wrapper -->
<div class="switch">
				<div class="overlay-inner ">
					<div id="access" role="navigation" style="display: block ! important; float: none; width: 100%; text-align: center; margin-top: 40%;">
						<ul>
							<li><a href="<?php bloginfo('url') ?>/portfolio">portfolio</a></li>
							<li><a href="<?php bloginfo('url') ?>/about">about</a></li>
							<li><a href="#contact-wrap">contact</a></li>
						</ul>
					</div><!-- #access -->
				</div>
	</div>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>
