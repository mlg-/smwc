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
	<?php if ( is_front_page() ) { ?>
	<header role="banner" class="nav-container">
	<?php } else { ?>
	<header role="banner" class="nav-container-inner">
	<?php } ?>
			<div class="social-and-search">
				<a href="https://twitter.com/maineworkers"><img src="/wp-content/themes/smwc_withlove/images/twitter.png"/></a>
				<a href="https://www.facebook.com/MaineWorkers"><img src="/wp-content/themes/smwc_withlove/images/facebook.png"/></a>
				<a href="http://instagram.com/maineworkers/"><img src="/wp-content/themes/smwc_withlove/images/instagram.png"/></a><br>
				<?php get_search_form(); ?>
			</div>
			<div id="main-navigation-bg">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'smwc_withlove' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
				<div class="main-navigation-logo">
					<a href="/"><img src="/wp-content/themes/smwc_withlove/images/smwc_t.png" alt="Southern Maine Workers' Center Logo"/></a>
				</div>
			</nav>
			<?php if( is_front_page() ) : ?>
			<div class="tagline">
				<h1><?php $blog_description = get_bloginfo('description');
							echo $blog_description ?></h1>
			</div>
		</div>
	<?php endif ?>
</header><!-- #masthead -->

