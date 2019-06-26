<?php
/**
 * Alphapay functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alphapay
 */

if ( ! function_exists( 'alpay_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alpay_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Alphapay, use a find and replace
		 * to change 'alpay' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alpay', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'alpay' ),
			'footer' => esc_html__( 'Footer', 'alpay'),
			'social' => esc_html__( 'Social', 'alpay')
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
		add_theme_support( 'custom-background', apply_filters( 'alpay_custom_background_args', array(
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
add_action( 'after_setup_theme', 'alpay_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alpay_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alpay_content_width', 640 );
}
add_action( 'after_setup_theme', 'alpay_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alpay_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alpay' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alpay' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alpay_widgets_init' );


/**
 *  Enable Option ACF
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
 * Enqueue scripts and styles.
 */
function alpay_scripts() {

	wp_enqueue_style( 'dashicons' );
	
	wp_enqueue_style( 'alpay-boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );	

	wp_enqueue_style( 'alpay-slick', get_template_directory_uri() . '/assets/slick/slick.css' );	

	wp_enqueue_style( 'alpay-slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css' );	

	wp_enqueue_style( 'alpay-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.3'   );

	wp_enqueue_style( 'alpay-style', get_stylesheet_uri(), array(), '2.29'  );

	wp_enqueue_script( 'alpay-boostrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20190101', true );

	wp_enqueue_script( 'alpay-tools', get_template_directory_uri() . '/assets/js/tools.js', array('jquery'), '', true);

	wp_enqueue_script( 'alpay-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true);
	//wp_enqueue_script( 'alpay-bodymovin', get_template_directory_uri() . '/assets/js/bodymovin.min.js', array('jquery'), '1.1', true);
	//wp_enqueue_script( 'alpay-anim-icon', get_template_directory_uri() . '/assets/js/anim-icon.js', array('jquery'), '1.1', true);

	wp_enqueue_script( 'alpay-sidebar', get_template_directory_uri() . '/assets/js/sticky-sidebar.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'alpay-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alpay-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'alpay-slick', get_template_directory_uri() .'/assets/slick/slick.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alpay_scripts' );

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
 * Product
 */
require get_template_directory() . '/inc/post-type-produk.php';

/**
 * How to
 */
require get_template_directory() . '/inc/post-type-cara.php';

/**
 * Promo
 */
require get_template_directory() . '/inc/post-type-promo.php';

/**
 * FAQ
 */
require get_template_directory() . '/inc/post-type-faq.php';
function alp_post_type_faq( $query ) {
    if ($query->is_main_query() ) {
    	if (is_post_type_archive( 'faq' )) {
    		$query->set( 'orderby', 'date' );
    		$query->set( 'order', 'ASC' );
    	}
    }
}
add_filter( 'pre_get_posts', 'alp_post_type_faq' );

/**
 * Taxonomy META
 */ 
require get_template_directory() . '/inc/class-taxonomy-meta.php';

/**
 * Image
 */
require get_template_directory() . '/inc/class-image.php';

/**
 * Comments
 */
require get_template_directory() . '/inc/class-comments.php';

/**
 * Ads
 */
require get_template_directory() . '/inc/class-ads.php';


/**
 * Breadcrumb
 */
// require get_template_directory() . '/inc/class-breadcrumb.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// FUNCTION
// search only post type 
function alp_search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','alp_search_filter');

// navigation
function alpay_navigation($nav_id) {
	$id = get_nav_menu_locations()[$nav_id];
	$objects = wp_get_nav_menu_items($id);
	return $objects;
}

// blurb
function alpay_blurb($trim = 20, $contents = null) {
	global $post;

	if ($contents) {
		$content = strip_tags($contents);
	} else {
		$content = strip_tags($post->post_content);
	}

	if ($content) {
		$old_arr = array_map('trim', explode(' ', $content));
		$new_arr = array_slice($old_arr, 0, $trim);

		$content = implode(' ',$new_arr).' ...';
		echo '<p>'.$content.'</p>';
	}
	
}  


/**
 * ALTER BLOG
 */
add_action( 'pre_get_posts', 'alpay_alter_blog' );
function alpay_alter_blog( $query ) {
 
    if ( ! is_admin() && $query->is_main_query() ) {
        // Not a query for an admin page.
        // It's the main query for a front end page of your site.
        if (@is_page('blog')){
            // It's the main query for a category archive.
            // Let's change the query for category archives.
            $query->set( 'cat', 0 );
        }
    }
}

