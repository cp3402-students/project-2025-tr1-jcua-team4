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
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <p class="site-description">
        Nurturing a Love for Learning in Maths & Science
      </p>
    </div>

    <nav class="main-navigation">
      <ul class="nav-menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        <li><a href="<?php echo esc_url( home_url( '/program' ) ); ?>">Program</a></li>
        <li><a href="<?php echo esc_url( home_url( '/schedule' ) ); ?>">Schedule</a></li>
        <li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">Staff</a></li>
        <li><a href="<?php echo esc_url( home_url( '/calendar' ) ); ?>">Calendar</a></li>

      </ul>
    </nav>
  </div>
</header>


<div id="content" class="site-content">
