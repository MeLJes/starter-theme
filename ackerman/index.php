<?php
/**
 * Blog template
 *
 * @package ackerman
 */
get_header(); ?>


<?php
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $loop = new WP_Query( $args );

  if( $loop->have_posts() ):
    while( $loop->have_posts() ): $loop->the_post(); ?>

      <div class="item">
        <a href="<?php echo esc_url( get_permalink() ) ?>">
          <span><?php the_title() ?></span>
        </a>

        <?php if( has_post_thumbnail() ):
          the_post_thumbnail('full');
        endif; ?>
      </div><!-- .item - END -->

    <?php endwhile;
  endif;
?>


<?php get_footer();
