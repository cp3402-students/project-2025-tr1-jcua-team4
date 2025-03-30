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

<header class="site-header" style="text-align: center; padding: 2rem 0; background-color: #f8f9fa;">
	<div class="site-branding">
		<h1 class="site-title" style="margin: 0;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; color: #333;">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<p class="site-description" style="margin-top: 0.5rem; color: #666;">
			Nurturing a Love for Learning in Maths & Science
		</p>
	</div>

	<nav class="main-navigation" style="margin-top: 1rem;">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav-menu',
				'container'      => false,
			)
		);
		?>
	</nav>
</header>

<div id="content" class="site-content">
