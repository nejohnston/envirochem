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
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet'>
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
					<div class='menu-wrapper'>
						<? wp_nav_menu() ?>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

			<div id='content' class='site-content'>
