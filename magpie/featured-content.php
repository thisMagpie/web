<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Magpie
 * @since Magpie 1.0
 */
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		/**
		 * Fires before the Magpie featured content.
		 *
		 * @since Magpie 1.0
		 */
		do_action( 'magpie_featured_posts_before' );

		$featured_posts = magpie_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );

			get_template_part( 'content', 'featured-post' );
		endforeach;

		/**
		 * Fires after the Magpie featured content.
		 *
		 * @since Magpie 1.0
		 */
		do_action( 'magpie_featured_posts_after' );

		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->
