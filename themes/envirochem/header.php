<?php
/**
 * The header for our theme.
 *
 * @package envirochem
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset='<?php bloginfo( 'charset' ); ?>'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='profile' href='http://gmpg.org/xfn/11'>
		<link rel='pingback' href='<?php bloginfo( 'pingback_url' ); ?>'>
		<script src='https://use.fontawesome.com/c0922c38ac.js'></script>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id='page' class='hfeed site'>
			<a class='skip-link screen-reader-text' href='#content'><?php esc_html( 'Skip to content' ); ?></a>
			<header id='masthead' class='site-header' role='banner'>
			<div class='align-center'>
				<div class='header-wrapper'>
					<div class='logo'>
						<span>E</span><i class='fa fa-tree'></i><span>C</span>
					</div>
<!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--    All rights reserved    -->
<nav role="navigation">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />

    <!--
    Some spans to act as a hamburger.

    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>

    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
						<? wp_nav_menu() ?>

    </ul>
  </div>
</nav>
			</div>
		</header><!-- #masthead -->

			<div id='content' class='site-content'>
