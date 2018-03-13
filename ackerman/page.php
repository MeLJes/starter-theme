<?php
/**
 * The template for displaying all pages
 *
 * @package ackerman
 */
get_header(); ?>

<?php
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
?>

<?php get_footer();
