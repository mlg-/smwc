<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package smwc_withlove
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="left-footer-column">
				<div class="aligncenter">
					<h1 class="mission">The Southern Maine Workers’ Center is a nonprofit membership organization committed to creating a grassroots, people-powered movement that improves the lives, working conditions, and terms of employment for working and poor people in Maine.</h1>
				<a href="/donate" class="donatebutton">Donate</a>
			</div>

		</div>
		<div class="right-footer-column">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu_class' ) );
			 wp_footer(); ?>
			<h1 class="funders">With Gratitude to Our Funders</h1>
			<a href="http://www.iwj.org"><img src="/wp-content/themes/smwc_withlove/images/IWJ.jpg" alt="Interfaith Worker Justice Logo"/></a>
			<a href="http://resist.org"><img src="/wp-content/themes/smwc_withlove/images/RESIST.png" alt="RESIST Logo"></a>
		</div>		
		<div class="site-info">
			<?php printf( __( '%1$s by %2$s.', 'SMWC' ), 'SMWC', '<a href="http://mlg.codes" rel="designer">MLG &#10085;</a>' ); ?>
		</div><!-- .site-info -->

 	</footer><!-- #colophon -->


</body>
</html>
