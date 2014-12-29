<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package smwc_withlove
 */
?>
<div class="background-container">

	<div class="page-container">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

					<?php the_post_thumbnail('', array('class' => 'featured-image')); ?>
					<?php	the_content();
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

