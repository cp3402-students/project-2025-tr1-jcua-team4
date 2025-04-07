<?php
/**
 * Template Name: General Page Template
 * Description: A reusable template for all standard pages.
 *
 * @package baizonntheme
 */

/**
 * Template Name: General Page Template
 * Description: A reusable template for all standard pages.
 *
 * @package baizonntheme
 */
get_header();
?>

    <main id="primary" class="site-main">
        <div class="page-container">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </main>

<?php
get_footer();