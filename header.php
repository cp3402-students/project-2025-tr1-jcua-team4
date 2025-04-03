<?php
/**
 * The header for Baizonn Learning Center theme
 *
 * @package baizonntheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container">
      <div class="branding">
          <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
              <?php the_custom_logo(); ?>
          <?php else : ?>
              <h1 class="site-title">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <?php bloginfo( 'name' ); ?>
                  </a>
              </h1>
          <?php endif; ?>

          <p class="site-description">
              Nurturing a Love for Learning in Maths & Science
          </p>
      </div>

      <nav class="main-navigation">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_class'     => 'nav-menu',
              'container'      => false,
          ));
          ?>
      </nav>
  </div>
</header>


<div id="content" class="site-content">
