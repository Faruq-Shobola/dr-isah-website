<?php
/**
 * dr-isah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dr-isah
 */

if ( ! defined( 'DR_ISAH_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DR_ISAH_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dr_isah_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dr_isah_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dr-isah, use a find and replace
		 * to change 'dr-isah' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dr-isah', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'dr-isah' ),
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
				'dr_isah_custom_background_args',
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

		/**
		 * Add responsive embeds and block editor styles.
		 */
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'dr_isah_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dr_isah_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dr_isah_content_width', 640 );
}
add_action( 'after_setup_theme', 'dr_isah_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dr_isah_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dr-isah' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dr-isah' ),
			'before_widget' => '<section id="%1$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dr_isah_widgets_init' );


/**
 * Change excerpt length
 */
if (!function_exists('theme_excerpt_length' && 'theme_excerpt_more')) {
    function theme_excerpt_length($length) {
        return 20; // change the number here according to your requirement
	}
	function theme_excerpt_more($more) {
        return '...'; // change the number here according to your requirement
    }
}
add_filter('excerpt_length', 'theme_excerpt_length');
add_filter('excerpt_more', 'theme_excerpt_more');
// ********* //



/**
 * Enqueue scripts and styles.
 */
function dr_isah_scripts() {
	wp_enqueue_style( 'dr-isah-style', get_stylesheet_uri(), array(), DR_ISAH_VERSION );
	wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), false, 'all');

	wp_enqueue_script( 'dr-isah-script', get_template_directory_uri() . '/js/script.min.js', array(), DR_ISAH_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), true, 'all');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dr_isah_scripts' );

function load_scripts(){
    //Load scripts:
    wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
    //may add more scripts to load like jquery-ui
}
add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * Add the block editor class to TinyMCE.
 *
 * This allows TinyMCE to use Tailwind Typography styles with no other changes.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function dr_isah_tinymce_add_class( $settings ) {
	$settings['body_class'] = 'block-editor-block-list__layout';
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'dr_isah_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
