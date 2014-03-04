<?php
/**
 * Featured content
 *
 * @package Magpie
 * @since Magpie 1.0
 */
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		/**
		 * Fires before this Magpie featured content.
		 */
		do_action( 'magpie_featured_posts_before' );

		$featured_posts = magpie_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );

			get_template_part( 'content', 'featured-post' );
		endforeach;

		do_action( 'magpie_featured_posts_after' );
		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->
