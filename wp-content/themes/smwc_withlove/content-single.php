<?php
/**
 * @package smwc_withlove
 */
?>
<div class="background-container">

	<div class="page-container">

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
			<header id="singleblogentryheader">
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="featured-post-image">
							<?php the_post_thumbnail(); ?>
							</div>
							<?php } 
							?>
						
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
			<footer class="entry-footer">
				<?php smwc_withlove_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			</div><!-- .entry-content -->

</article><!-- #post-## -->
