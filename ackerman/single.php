<?php
/**
 * Single posts template
 *
 * @package ackerman
 */
get_header(); ?>

<?php
  while ( have_posts() ) : the_post();

    the_title( '<h2>', '</h2>' );
    the_content();

    the_post_navigation( array(
      'screen_reader_text' => __( 'More', 'ackerman' ),
      'prev_text' => __( 'Prev', 'ackerman' ),
      'next_text' => __( 'Next', 'ackerman' ),
    ) );

    if( has_post_thumbnail() ):
      the_post_thumbnail('full', array(
        'class' => 'thumbnail'
      ) );
    endif;

  endwhile;
?>

<?php get_footer();
