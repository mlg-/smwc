<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package smwc_withlove
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Signika+Negative|Arvo:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'smwc_withlove' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="nav-container">
			<div class="social-and-search">
				<a href="TWITTERPLACEHOLDER"><img src="wp-content/themes/smwc_withlove/images/twitter.png"/></a>
				<a href="FACEBOOKPLACEHOLDER"><img src="wp-content/themes/smwc_withlove/images/facebook.png"/></a>
				<a href="INSTAGRAMPLACEHOLDER"><img src="wp-content/themes/smwc_withlove/images/instagram.png"/></a><br>
				<?php get_search_form( $echo ); ?>			
			</div>
			<div class="main-navigation-logo">
				<img src="wp-content/themes/smwc_withlove/images/smwc_t.png" alt="Southern Maine Workers' Center Logo"/>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'smwc_withlove' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div class="tagline-box">
			<div class="tagline">
				<h1>The People Lead</h1>
			</div>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->



	<div id="content" class="site-content">
