<?php
/**
 * baizonntheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package baizonntheme
 */

if ( ! defined( 'BAIZONNTHEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BAIZONNTHEME_VERSION', '1.0.0' );
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
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-spacing' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'baizonntheme' ),
            'footer'  => __( 'Footer Menu', 'baizonntheme' ),
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
add_action( 'widgets_init', 'baizonntheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function baizonntheme_scripts() {
    wp_enqueue_style( 'baizonntheme-style', get_stylesheet_uri(), array(), BAIZONNTHEME_VERSION );

    wp_style_add_data( 'baizonntheme-style', 'rtl', 'replace' );

    wp_enqueue_script( 'baizonntheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), BAIZONNTHEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baizonntheme_scripts' );


###------------- THIS IS CODE FOR ADDING FOOTER WIDGET CUSTOMISATION OPTIONS ----------------###
// Additional Info On Widgets: https://developer.wordpress.org/themes/functionality/widgets/

// DESIGN CHOICE EXPLANATION
/* The footer has been set up with re-usability in mind so that users of this theme can easily update the footer
widget within WordPress dashboard rather than having to navigate through the footer file (and manually add any
details they desire, for example contact information). */


// STEP 1: REGISTER FOOTER WIDGETS (steps are in order given)
// Allows users to add widgets like text, images etc. Users will be able to do so in the WordPress interface itself

// STEP-2: See footer.php

// STEP-3: ADD FOOTER CUSTOMISATION OPTIONS
// Allows users to add custom text, logos and other options via the WordPress customizer
function baizonntheme_customize_footer_register( $wp_customize ) {
	// Add a section for the footer
	$wp_customize->add_section( 'footer_section', array(
		'title'       => __( 'Footer Settings', 'baizonntheme' ),
		'description' => __( 'Customize the footer content', 'baizonntheme' ),
		'priority'    => 160,
	));

	// Add a setting for footer text
	$wp_customize->add_setting( 'footer_text', array(
		'default'           => __( 'Your footer text here', 'baizonntheme' ),
		'sanitize_callback' => 'sanitize_text_field',
	));

	// Change background colour
	$wp_customize->add_setting( 'footer_background_color', array(
		'default'   => '#000000',
		'transport' => 'refresh',
	));

	// Add a control to edit footer text
	$wp_customize->add_control( 'footer_text_control', array(
		'label'    => __( 'Footer Text', 'baizonntheme' ),
		'section'  => 'footer_section',
		'settings' => 'footer_text',
		'type'     => 'text',
	));

	// Add colour control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color_control', array(
		'label'    => __( 'Footer Background Color', 'baizonntheme' ),
		'section'  => 'colors',
		'settings' => 'footer_background_color',
	)));
}
add_action( 'customize_register', 'baizonntheme_customize_footer_register' );

function baizonntheme_custom_footer_styles() {
	$footer_bg_color = get_theme_mod( 'footer_background_color', '#f8f9fa' ); // Get the color from the Customizer.
	echo '<style>
        footer {
            background-color: ' . esc_html( $footer_bg_color ) . ';
            text-align: center;
        }
        
        .footer-widget-area {
        	text-align: center;
        }
        
        footer div p {
        	text-align: center;
        }
        
    </style>';
}
add_action( 'wp_head', 'baizonntheme_custom_footer_styles' );



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

function baizonn_add_dropdown_arrow($item_output, $item, $depth, $args) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $arrow = '<span class="dropdown-arrow"> ▼</span>';
        $item_output = str_replace('</a>', $arrow . '</a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'baizonn_add_dropdown_arrow', 10, 4);