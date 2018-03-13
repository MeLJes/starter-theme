<?php
/**
 * The template for displaying archive pages
 *
 * @package ackerman
 */
 get_header(); ?>

	<?php if ( have_posts() ) :
		the_archive_title( '<h1>', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
	endif; ?>

<?php get_footer();
