<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package smwc_withlove
 */

get_header(); ?>

<div id="primary" class="content-area">

<div class="background-container">

	<div class="page-container">
					<div class="sidebar">
			<?php
			  if($post->post_parent) {
			  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  $titlenamer = get_the_title($post->post_parent);
				$parentlink = get_permalink($post->post_parent);
							  }

				  else {
				  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  $titlenamer = get_the_title($post->ID);
				  }
				  if ($children) { ?>

				  <h2 class="sidebar-title"><a href="<? echo $parentlink; ?>"> <? echo $titlenamer; ?></a> </h2>
				  <ul class="sidebar-items">
				  <?php echo $children; ?>
				  </ul>

				<?php } ?>	
			</div><!--close sidebar-->

		<div class="page-content-area">

			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php ?>
							<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->
								<?php the_post_thumbnail('', array('class' => 'featured-image')); ?>
							<div class="entry">
							<?php the_content();
						?>
					</div>
						<footer class="entry-footer">
							<?php edit_post_link( __( 'Edit', 'smwc_withlove' ), '<span class="edit-link">', '</span>' ); ?>
							<?php echo comments_number( $zero, $one, $more ); ?> 
						</footer><!-- .entry-footer -->

					<?php endwhile; ?>

					<?php smwc_withlove_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

		</main><!-- #main -->
	</div><!-- page container -->
</div><!--background container-->
</div><!--content area-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
