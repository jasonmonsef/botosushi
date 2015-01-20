<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
		global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic' rel='stylesheet' type='text/css'>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/isotope.js"></script>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/isotope-masonry-horizontal.js
"></script>
<script type='text/javascript' src="<?php bloginfo('template_url') ?>/js/isotope-pakery.js
"></script>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<ul>
			<li><a href="tel:8584517800">CALL US</a></li>
			<li><a href="">RESERVATIONS</a></li>
			<li><img src="<?php bloginfo('template_url') ?>/images/logo.png"/></li>
			<li><a href="#" class="trigger-overlay">MENU</a></li>
			<li>
				<a href="">LOCATIONS</a>
				<ul>
    		  <li>SUSHIYAH - DEL MAR</li>
    		</ul>
			</li>
		</ul>
	</div><!-- #header -->
	<div class="hero-banner">
		<img src="<?php bloginfo('template_url') ?>/images/hero-banner.jpg"/>
	</div>
	<div id="main">
