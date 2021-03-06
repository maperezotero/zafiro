<?php
/**
 * Zafiro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zafiro
 */

if ( ! defined( 'ZAFIRO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ZAFIRO_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'zafiro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zafiro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on zafiro, use a find and replace
		 * to change 'zafiro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zafiro', get_template_directory() . '/languages' );

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
		add_image_size( 'zafiro-blog-large', 850, 478, true);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'zafiro' ),
				'menu-2' => esc_html__( 'Copy Menu', 'zafiro' ),
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

		/**
		 * Add support for core custom logo.
		 * 
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom_logo',
			array(
				'height'               => 40,
				'width'                => 250,
				'flex-height'          => true,
				'flex-width'           => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Set up the WordPress core custom background feature.
		 */
		add_theme_support(
			'custom-background',
			apply_filters(
				'zafiro_custom_background_args',
				array(
					'default-color' => 'ffffff',
				)
			)
		);

		require get_template_directory() . '/inc/blocks-support.php';
	}
endif;
add_action( 'after_setup_theme', 'zafiro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zafiro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zafiro_content_width', 640 );
}
add_action( 'after_setup_theme', 'zafiro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widgets-init.php';

/**
 * Enqueue scripts and styles.
 */
function zafiro_scripts() {
	wp_enqueue_style( 'zafiro-style', get_stylesheet_uri(), array(), ZAFIRO_VERSION );
	wp_enqueue_style( 'slicknav', get_template_directory_uri(  ) . '/assets/css/slicknav.css' );
	wp_style_add_data( 'zafiro-style', 'rtl', 'replace' );

	wp_enqueue_script( 'slicknav', get_template_directory_uri(  )  . '/assets/js/jquery.slicknav.min.js', array( 'jquery' ), ZAFIRO_VERSION, true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri(  )  . '/assets/js/custom.js', array( 'jquery' ), ZAFIRO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zafiro_scripts' );

/**
 * Gutenberg scripts and styles
 */
function zafiro_gutenberg_scripts() {
	wp_enqueue_script( 
		'zafiro-editor', 
		get_stylesheet_directory_uri() . '/assets/js/editor.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ), 
		true 
	);
}
add_action( 'enqueue_block_editor_assets', 'zafiro_gutenberg_scripts' );

/**
 * Zafiro custom block patterns
 */
require get_template_directory() . '/inc/block-patterns/hero-pattern.php';

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
 * Zafiro custom function helpers
 */
require get_template_directory() .'/inc/helpers.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
