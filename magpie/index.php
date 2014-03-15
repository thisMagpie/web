<?php
/**
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package Magpie
 * @since Magpie 1.0
 */

get_header(); ?>
<div id="main-content" class="main-content">
<?php
	if ( is_front_page() && magpie_has_featured_posts() ) {
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					/**
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				endwhile;

				// Previous/next post navigation.
				magpie_paging_nav();
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div><!-- #main-content -->
<?php
get_sidebar();
get_footer();
