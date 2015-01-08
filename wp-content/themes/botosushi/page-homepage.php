<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">
				<div class="one-third module">
					<?php include('inc/modules/menu/menu.php') ?>
				</div>
				<div class="two-third module">
					<?php include('inc/modules/aboutus/aboutus.php') ?>
				</div>
				<div class="three-third module"></div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
