<?php
/**
 * EmeraldJA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EmeraldJA
 */

if ( ! function_exists( 'emerald_ja_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function emerald_ja_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on EmeraldJA, use a find and replace
	 * to change 'emerald_ja' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'emerald_ja', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'emerald_ja' ),
		'header-menu' => esc_html__( 'Header Menu', 'emerald_ja' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'emerald_ja_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'emerald_ja_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function emerald_ja_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'emerald_ja_content_width', 640 );
}
add_action( 'after_setup_theme', 'emerald_ja_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function emerald_ja_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'emerald_ja' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'emerald_ja' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'emerald_ja_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function emerald_ja_scripts() {
	wp_enqueue_style( 'emerald_ja-style', get_stylesheet_uri() );

	wp_enqueue_script( 'emerald_ja-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'emerald_ja-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'slick', get_template_directory_uri() . '/dist/js/slick/slick.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/js/app.js', array('jquery'), '1', true );
}
add_action( 'wp_enqueue_scripts', 'emerald_ja_scripts' );

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
require get_template_directory() . '/inc/jetpack.php';

//------------ MY ADDTIONAL FUNCTIONS ---------------//

// Register Custom Navigation Walker
require get_template_directory() . '/wp-bootstrap-navwalker.php';

// Header navigation
function header_nav() {

	wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav navbar-right navbar-links--underline',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
};