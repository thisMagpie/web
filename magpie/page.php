<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * @package Magpie
 * @since Magpie 1.0
 */

get_header(); ?>
<div id="main-content" class="main-content">
<?php
	if ( is_front_page() && magpie_has_featured_posts() ) {
		get_template_part( 'featured-content' );
	}
	<div id="primary" class="content-area">
	<?php  ?>
		<div id="content" class="site-content" role="main">

			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php
get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

get_sidebar();
get_footer();
