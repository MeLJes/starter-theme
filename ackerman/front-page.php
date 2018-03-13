<?php
/**
 * The front page template
 *
 * @package ackerman
 */
get_header(); ?>

  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        get_template_part( 'templates/pages/home', 'home' );
      endwhile;
    else :
			get_template_part( 'templates/pages/no', 'content' );
    endif;
  ?>

<?php get_footer();
