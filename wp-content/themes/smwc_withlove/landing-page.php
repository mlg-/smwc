<?php
/**
 * Template Name: Landing Page
 *
 * @package smwc_withlove
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="bigslider">
				<?php if(is_ie() && get_browser_version() <= 9) { 
					echo do_shortcode( '[wonderplugin_slider id="1"]' ); 
				}
					else{ 
					  echo do_shortcode( '[masterslider_pb  id="1"]' ); 
					 } ?>
			</div>

			<div class="widget-container">
				<div class="column-left">
				    
				    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_column')) : else : ?>
				            <p><strong>Widget Ready</strong></p>
				            <p>This left_column is widget ready! Add one in the admin panel.</p>
				        <?php endif; ?>
				</div>
				<div class="at-a-glance">
						<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('glance_box')) : else : ?>
				            <p><strong>Widget Ready</strong></p>
				            <p>This left_column is widget ready! Add one in the admin panel.</p>
				        <?php endif; ?>				
				</div>

				<div class="column-center">
				    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('center_column')) : else : ?>
				            <p><strong>Widget Ready</strong></p>
				            <p>This center_column is widget ready! Add one in the admin panel.</p>
				        <?php endif; ?>
				</div>

				<div class="column-right">
				    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_column')) : else : ?>
				            <p><strong>Widget Ready</strong></p>
				            <p>This right_column is widget ready! Add one in the admin panel.</p>
				        <?php endif; ?>
				</div>
			</div><!-- widget-container-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

