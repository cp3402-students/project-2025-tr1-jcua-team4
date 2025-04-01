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
    <div class="footer-info">
        <p>&copy; <?php echo date('2025'); ?> BaizonnTheme</p>
        <!-- Customizer Option for Footer Text -->
        <p><?php echo get_theme_mod('footer_text', __('Your footer text here', 'BaizonnTheme')); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
