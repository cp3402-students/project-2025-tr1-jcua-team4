<?php
/**
 * baizonntheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package baizonntheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function baizonntheme_setup() {
	add_theme_support( 'title-tag' );
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'baizonntheme' ),
		)
	);
}	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on baizonntheme, use a find and replace
		* to change 'baizonntheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'baizonntheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'baizonntheme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'baizonntheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

add_action( 'after_setup_theme', 'baizonntheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function baizonntheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'baizonntheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'baizonntheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function baizonntheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'baizonntheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'baizonntheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'baizonntheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function baizonntheme_scripts() {
	wp_enqueue_style( 'baizonntheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'baizonntheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'baizonntheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baizonntheme_scripts' );


###------------- THIS IS CODE FOR ADDING FOOTER WIDGET CUSTOMISATION OPTIONS ----------------###
# AI DISCLAIMER: The following contains AI generated code for adding footer customisation (logo, text, etc.)!

/*
Prompt 1: Can I edit the footer in WordPress editor and not on the page itself?
Prompt 2: I'm looking in Appearance->Themes->MyTheme(I pressed the customized button for it) and there's no option
for a footer, is there a setting I need to change
Prompt 4: No im creating my own custom theme
*/

# Additional Info On Widgets: https://developer.wordpress.org/themes/functionality/widgets/

# STEP 1: REGISTER FOOTER WIDGETS
# Allows users to add widgets like text, images etc. Users will be able to do so in the WordPress interface itself
function mytheme_widgets_init() {
	// Register footer widget areas
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer-widget-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

}
add_action( 'widgets_init', 'mytheme_widgets_init' );

# STEP-2: See footer.php


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

