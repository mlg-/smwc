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

<div class="background-container">

	<div class="page-container-blog clearfix">
		
			<h1 class="aligncenter" id="blogtitle">SMWC BLOG</h1>
		
				<div class="blog-posts clearfix">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
					// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
							} 
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php smwc_withlove_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</div>

		</div><!--page container-->
	</div><!--background container-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
