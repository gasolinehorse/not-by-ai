<?php
/**
 * Not By AI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Not_By_AI
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
function not_by_ai_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Not By AI, use a find and replace
		* to change 'not-by-ai' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'not-by-ai', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'not-by-ai' ),
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
			'not_by_ai_custom_background_args',
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
}
add_action( 'after_setup_theme', 'not_by_ai_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function not_by_ai_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'not_by_ai_content_width', 640 );
}
add_action( 'after_setup_theme', 'not_by_ai_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function not_by_ai_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'not-by-ai' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'not-by-ai' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'not_by_ai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function not_by_ai_scripts() {
	wp_enqueue_style( 'not-by-ai-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'not-by-ai-style', 'rtl', 'replace' );

	wp_enqueue_script( 'not-by-ai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'not_by_ai_scripts' );

/**
 * 03092024
 */
function nba_theme_enqueue_scripts() {
  wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'theme-style', 'https://notbyai.fyi/style.css' );
  wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' );
}
add_action( 'wp_enqueue_scripts', 'nba_theme_enqueue_scripts' ); 

add_filter( 'post_type_labels_post', 'change_post_labels' );

function change_post_labels( $args ) {
  foreach( $args as $key => $label ){
    if( null === $label ) {
      continue;
    }
    $args->{$key} = str_replace( [ __( 'Posts' ), __( 'Post' ) ], __( 'Project' ), $label );
  }
  return $args;
}
function redirect_non_logged_in_users() {
  if (is_front_page() && !is_user_logged_in()) {
    $signup_page_url = site_url('/signup');
    
    wp_redirect($signup_page_url);
    exit;
  }
}
add_action('template_redirect', 'redirect_non_logged_in_users');


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

