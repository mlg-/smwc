<?php
/**
 * The template for displaying search results pages.
 *
 * @package smwc_withlove
 */

get_header(); ?>

<div class="background-container">

	<div class="page-container search-page-container">

		<div class="search-page" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title aligncenter"><?php printf( __( 'Search Results for: %s', 'smwc_withlove' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>

				<?php endwhile; ?>

				<?php smwc_withlove_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</div>

	</div><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
