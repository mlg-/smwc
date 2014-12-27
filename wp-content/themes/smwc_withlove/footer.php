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
</div><!-- #page -->
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu_class' ) );
 wp_footer(); ?>
 		<div class="site-info">
			<?php printf( __( '%1$s by %2$s.', 'SMWC' ), 'SMWC', '<a href="http://mlg.codes" rel="designer">MLG &#10085;</a>' ); ?>
		</div><!-- .site-info -->

 	</footer><!-- #colophon -->


</body>
</html>
