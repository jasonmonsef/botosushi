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
					<div class="one-third module">
						<?php include('inc/modules/feedback/feedback.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/chownow/chownow.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/happyhour/happyhour.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/specialdeal/specialdeal.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/customer-reviews/customer-reviews.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/private-events/private-events.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/eclub/eclub.php') ?>
					</div>
					<div class="two-third module">
						<?php include('inc/modules/meetchef/meetchef.php') ?>
					</div>
					<div class="one-third module">
						<?php include('inc/modules/catering/catering.php') ?>
					</div>
			</div><!-- #content -->
		</div><!-- #container -->
		
		<script>

			jQuery( document ).ready(function() {
				
			  jQuery('#content').isotope({
			    itemSelector: '.module',
			    layoutMode: 'packery'
					
			  });
			  
			  
			});
			// open menu in modal dialog
			jQuery(document).on('click', '#menu-box .trigger-overlay', function () {
				jQuery('#menu-box .switch').addClass('overlay').removeClass('switch').show();
				jQuery('#menu-box .overlay').toggleClass('open');
				jQuery('#menu-box .trigger-overlay.close').show()
				jQuery('#menu-box .gform-wrap').removeClass('expand')
				jQuery('#menu-box .deals-cta').show()
			});
			// open feedback form in modal dialog
			jQuery(document).on('click', '#feedback #ratingsForm input, #feedback .trigger-overlay.close', function () {
				jQuery('#feedback .switch').addClass('overlay').removeClass('switch').show();
				jQuery('#feedback .overlay').toggleClass('open');
				jQuery('#feedback .trigger-overlay.close').show()
				jQuery('#feedback .gform-wrap').removeClass('expand')
				jQuery('#feedback .deals-cta').show()
			});
			// open Custom Reviews Form in modal dialog
			jQuery(document).on('click', '#customer_reviews .trigger-overlay, #customer_reviews input', function () {
				jQuery('#customer_reviews .switch').addClass('overlay').removeClass('switch').show();
				jQuery('#customer_reviews .overlay').toggleClass('open');
				jQuery('#customer_reviews .trigger-overlay.close').show()
				jQuery('#customer_reviews .gform-wrap').removeClass('expand')
				jQuery('#customer_reviews .deals-cta').show()
			});
			// open E-Club form in modal dialog
			jQuery(document).on('click', '#eclub .trigger-overlay', function () {
				jQuery('#eclub .switch').addClass('overlay').removeClass('switch').show();
				jQuery('#eclub .overlay').toggleClass('open');
				jQuery('#eclub .trigger-overlay.close').show()
				jQuery('#eclub .gform-wrap').removeClass('expand')
				jQuery('#eclub .deals-cta').show()
			});
			// open Meet The chefs form in modal dialog
			jQuery(document).on('click', '#meetchef .trigger-overlay', function () {
				jQuery('#meetchef .switch').addClass('overlay').removeClass('switch').show();
				jQuery('#meetchef .overlay').toggleClass('open');
				jQuery('#meetchef .trigger-overlay.close').show()
				jQuery('#meetchef .gform-wrap').removeClass('expand')
				jQuery('#meetchef .deals-cta').show()
			});
			// show specific chef bio
			jQuery(document).on('click', '#meetchef .trigger-overlay.1', function () {
				jQuery('.chef.1').show();
			});
			jQuery(document).on('click', '#meetchef .trigger-overlay.2', function () {
				jQuery('.chef.2').show();
			});
			jQuery(document).on('click', '#meetchef .trigger-overlay.3', function () {
				jQuery('.chef.3').show();
			});
			jQuery(document).on('click', '#meetchef .trigger-overlay.4', function () {
				jQuery('.chef.4').show();
				
			});
			jQuery(document).on('click', '#meetchef .trigger-overlay.close', function () {
				jQuery('.chef').delay(1000).fadeOut();
			});
			// open E-Club form in modal dialog
			jQuery(document).on('click', '#catering .trigger-overlay', function () {
				jQuery('#catering .switch').addClass('overlay').removeClass('switch').show();
				jQuery('#catering .overlay').toggleClass('open');
				jQuery('#catering .trigger-overlay.close').show()
				jQuery('#catering .gform-wrap').removeClass('expand')
				jQuery('#catering .deals-cta').show()
			});
			

		</script>
		
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
