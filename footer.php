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
<footer>
    <div class="footer-widgets">
		<?php if (is_active_sidebar('footer-widget-1')) : ?>
            <div class="footer-widget-area">
				<?php dynamic_sidebar('footer-widget-1'); ?>
            </div>
		<?php endif; ?>
    </div>

    <div style="background-color: <?php echo get_theme_mod( 'footer_background_color', '#f8f9fa' ); ?>;">
        <p>&copy; <?php echo date('2025'); ?> BaizonnTheme</p>
        <!-- Customizer Option for Footer Text -->
        <p><?php echo get_theme_mod('footer_text', __('hello there', 'BaizonnTheme')); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
