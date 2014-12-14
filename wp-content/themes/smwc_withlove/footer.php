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
		<div class="site-info">
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'smwc_withlove' ), 'smwc_withlove', '<a href="http://mlg.codes" rel="designer">MLG &#10085;</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
