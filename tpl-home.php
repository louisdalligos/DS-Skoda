<?php
/**
 * Template Name: Home
 *
 * @package ds-skoda
 *
 */

get_header();

  while ( have_posts() ) : the_post(); ?>


  <div class="container">
    <?php the_content(); ?>
  </div>

  <?php endwhile; // End of the loop.
  ?>

<?php get_footer(); ?>
