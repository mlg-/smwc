<?php
/**
 * @package smwc_withlove
 */
?>
<div class="background-container">

	<div class="page-container">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php smwc_withlove_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'smwc_withlove' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div><!--page container-->
	</div><!--background container-->

	<footer class="entry-footer">
		<?php smwc_withlove_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
