<?php
/**
 * Template Name: No Sidebar Page
 *
 * @package smwc_withlove
 */

get_header(); ?>

<div class="background-container" data-type="background" data-speed="10">

	<div class="page-container">

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix'); ?>>
	
			<div class="page-content-area">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

						<?php if ( has_post_thumbnail() ) { ?>
							<div class="featured-post-image">
							<?php the_post_thumbnail(); ?>
							</div>
							<?php } 
							?>					<?php	the_content();
						?>


					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'smwc_withlove' ),
							'after'  => '</div>',
						) );
					?>
						<footer class="entry-footer">
							<?php edit_post_link( __( 'Edit', 'smwc_withlove' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-footer -->
		
			</article><!-- #post-## -->

		</div><!-- page-content-area-->

	</div><!--page-container-->

</div> <!--background container-->

