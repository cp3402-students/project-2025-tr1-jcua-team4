<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baizonntheme
 */

?>

<!-- STEP-2: Add Footer Content To Theme Template -->
<!-- Include registered widget areas. Ensures the footer contents is displayed on the website -->
<!-- Also refer to AI disclaimer 1 in functions.php -->
<footer class="site-footer">
    <div class="container footer-widgets">
        <?php if (is_active_sidebar('footer-widget-1')) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer-widget-1'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="footer-bottom" style="background-color: <?php echo get_theme_mod('footer_background_color', '#e6f7fa'); ?>;">
        <div class="footer-bar">
            <nav class="footer-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                ));
                ?>
            </nav>

            <div class="footer-copy">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
