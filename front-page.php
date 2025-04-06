<?php
/**
 * Template for the front (landing) page – dynamic version
 *
 * @package baizonntheme
 */

get_header(); ?>

<main id="primary" class="site-main landing-page" style="padding: 2rem 1rem; max-width: 1200px; margin: auto;">

  <?php
  // This pulls content from the WP Admin Home page
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
  ?>

</main>

<?php get_footer(); ?>
