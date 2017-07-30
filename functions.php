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
		'alt-head-nav' => esc_html__( 'Alt Header Menu', 'emerald_ja' ),
		'portfolio-section-menu' => esc_html__( 'Portfolio Section Menu', 'emerald_ja' ),
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
		'name'          => esc_html__( 'Standard Sidebar', 'emerald_ja' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'emerald_ja' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Sidebar', 'emerald_ja' ),
		'id'            => 'sidebar-front-page',
		'description'   => esc_html__( 'Add widgets here.', 'emerald_ja' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Blog Page Sidebar', 'emerald_ja' ),
		'id'            => 'sidebar-blog-page',
		'description'   => esc_html__( 'Add widgets here.', 'emerald_ja' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'emerald_ja' ),
		'id'            => 'sidebar-footer',
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

	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/dist/js/slick/slick.css' );

	wp_enqueue_script( 'emerald_ja-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'emerald_ja-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/dist/js/slick/slick.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/js/app.js', array( 'jquery' ), '1', true );

	wp_localize_script( 'app', 'ajaxportfolio', array( 
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'query_vars' => json_encode( $wp_query->query ) 
	));

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

// Header Center style navigation
function alt_head_nav() {

	wp_nav_menu( array(
            'theme_location'    => 'alt-head-nav',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav navbar-links--underline',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
};

// Portfolio section navigation
function portfolio_section_nav() {

	wp_nav_menu( array(
            'theme_location'    => 'portfolio-section-menu',
            'depth'             => 1,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
};


// Change the layout of the COMMENTS in comment.php
function mytheme_comment($comment, $args, $depth) {

   $GLOBALS['comment'] = $comment; ?>

   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

     <div id="comment-<?php comment_ID(); ?>">

      <div class="comment-author vcard">

         <?php echo get_avatar($comment,$size='48'); ?>

         <?php printf(__('<span class="says">by: </span><b class="fn">%s</b>'), get_comment_author_link()) ?>

      </div>

      <?php if ($comment->comment_approved == '0') : ?>

         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />

      <?php endif; ?>

      <div class="comment-metadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <div class="comment-content"><?php comment_text() ?></div>

      <div class="reply">

			 <?php 
				$myclass = 'icon-reply-mail-2';
				echo preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $myclass, 
					get_comment_reply_link(array_merge( $args, array(
						//'add_below' => $add_below, 
						'depth' => $depth,
						'reply_text' => ' ', 
						'max_depth' => $args['max_depth']))), 1 ); 
			?>

      </div>

     </div>
	 
<?php
}

// 	Change the layout of the default get_search_form();

function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . home_url( '/' ) . '" >
    <div>
    <input class="search-field" type="text" placeholder="Search..."  name="s" id="s" />
    <button class="search-submit icon-search" id="searchsubmit" value="" /></button>
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

// 	Help child categories recognise and go to their parents category-{slug}.php 
function new_subcategory_hierarchy() { 
    $category = get_queried_object();

    $parent_id = $category->category_parent;

    $templates = array();

    if ( $parent_id == 0 ) {
        // Use default values from get_category_template()
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
        $templates[] = 'category.php';     
    } else {
        // Create replacement $templates array
        $parent = get_category( $parent_id );

        // Current first
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";

        // Parent second
        $templates[] = "category-{$parent->slug}.php";
        $templates[] = "category-{$parent->term_id}.php";
        $templates[] = 'category.php'; 
    }
    return locate_template( $templates );
}

add_filter( 'category_template', 'new_subcategory_hierarchy' );

//# Finding out current template being used

add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}

//----------- AJAX CALLS -------------------//

function ajax_portfolio_section() {

	$category_name = $_POST[ 'category_name' ];

	//+++	 IF STATEMENT TO EITHER DISPLAY ALL CATEGORIES OR ONE CATEGORY DEPENDING ON LINK's STRING NAME 	+++//

	if( $category_name == 'All' ) {

		$args = array(
			'post_type' => 'portfolio_post',
			'orderby'   => 'post_id',
			'order'     => 'DESC',
		);

		$loop = new WP_QUERY( $args );

			if( $loop->have_posts() ) :
							
			while( $loop->have_posts() ) : $loop->the_post();
							
				get_template_part( 'template-parts/post/content', 'portfolio-section-panel' );

			endwhile; wp_reset_query();

			else : ?>

				<p>There are currently no portfolio post's to display.</p>

			<?php endif; wp_reset_query(); ?>

			<?php

		die();

	} else {

		$args = array(
			'post_type' => 'portfolio_post',
			'orderby'   => 'post_id',
			'order'     => 'DESC',
			'topics' => $category_name,
		);

		$loop = new WP_QUERY( $args );

			if( $loop->have_posts() ) :
							
			while( $loop->have_posts() ) : $loop->the_post();
							
				get_template_part( 'template-parts/post/content', 'portfolio-section-panel' );

			endwhile; wp_reset_query();

			else : ?>

				<p>There are currently no portfolio post's to display.</p>

			<?php endif; wp_reset_query(); ?>

			<?php

		die();

	}
}

add_action( 'wp_ajax_ajax_portfolio_section', 'ajax_portfolio_section');
add_action( 'wp_ajax_nopriv_ajax_portfolio_section', 'ajax_portfolio_section');


//----------------- Register new TAXONOMIES ------------------------//

//# Creation of 'topics' for categorising custom post type 'portfolio_post's.

add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

function create_topics_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => __( 'Parent Topic' ),
    'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Edit Topic' ),
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'Topics' ),
  );   

  register_taxonomy('topics',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
}

//# Creation of 'webtags' for listing within 'portfolio_post' the web languages a project has used. 

add_action( 'init', 'create_webtags_nonhierarchical_taxonomy', 0 );

function create_webtags_nonhierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Web Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Web Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Web Tags' ),
    'popular_items' => __( 'Popular Web Tags' ),
    'all_items' => __( 'All Web Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Web Tag' ),
    'update_item' => __( 'Update Web Tag' ),
    'add_new_item' => __( 'Add New Web Tag' ),
    'new_item_name' => __( 'New Web Tag Name' ),
    'separate_items_with_commas' => __( 'Separate web tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove web tags' ),
    'choose_from_most_used' => __( 'Choose from the most used web tags' ),
    'menu_name' => __( 'Web Tags' ),
  );

  register_taxonomy('web_tags','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'web_tags' ),
  ));
}
