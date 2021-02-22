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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'zafiro' ),
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

		/**
		 * Add support for block styles.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
		 */
		add_theme_support( 'wp-block-styles' );

		/**
		 * Add support for full and wide align in Gutenberg blocks that support this feature.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
		 */
		add_theme_support( 'align-wide' );

		/**
		 * Add support for Gutenberg editor styles.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
		 */
		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );

		/**
		 * Add default font sizes and disable custom font sizes.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
		 */
		// add_theme_support( 'disable-custom-font-sizes' );  // Uncomment to allow disable custom font sizes
		
		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => esc_attr__( 'Small', 'zafiro' ),
				'size' => 14,
				'slug' => 'small',
			),
			array(
				'name' => esc_attr__( 'Normal', 'zafiro' ),
				'size' => 16,
				'slug' => 'normal',
			),
			array(
				'name' => esc_attr__( 'Bigger', 'zafiro' ),
				'size' => 18,
				'slug' => 'bigger',
			),
			array(
				'name' => esc_attr__( 'Medium', 'zafiro' ),
				'size' => 24,
				'slug' => 'medium',
			),
			array(
				'name' => esc_attr__( 'Large', 'zafiro' ),
				'size' => 32,
				'slug' => 'large',
			),
			array(
				'name' => esc_attr__( 'Huge', 'zafiro' ),
				'size' => 40,
				'slug' => 'huge',
			),
			array(
				'name' => esc_attr__( 'Giant', 'zafiro' ),
				'size' => 60,
				'slug' => 'giant',
			),
			array(
				'name' => esc_attr__( 'Monster', 'zafiro' ),
				'size' => 80,
				'slug' => 'monster',
			),
		) );

		/**
		 * Editor color custom palette colors.
		 */
		// Colors
		$color__main             = '#12232e';
		$color__secondary        = '#203647';
		$color__accent           = '#007cc7';
		$color__accent_secondary = '#4da8da';
		$color__gray_dark        = '#586971';
		$color__gray_light       = '#8b9ca4';
		$color__gray_lighter     = '#eefbfb';
		$color__red              = '#ed3330';
		$color__orange           = '#ff4500';
		$color__green            = '#28a745';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html( 'Text main', 'zafiro' ),
					'slug'  => 'text-main',
					'color' => $color__main,
				),
				array(
					'name'  => esc_html( 'Text secondary', 'zafiro' ),
					'slug'  => 'text-secondary',
					'color' => $color__secondary,
				),
				array(
					'name'  => esc_html( 'Gray dark', 'zafiro' ),
					'slug'  => 'gray-dark',
					'color' => $color__gray_dark,
				),
				array(
					'name'  => esc_html( 'Gray medium', 'zafiro' ),
					'slug'  => 'gray-medium',
					'color' => $color__gray_light,
				),
				array(
					'name'  => esc_html( 'Gray light', 'zafiro' ),
					'slug'  => 'gray-light',
					'color' => $color__gray_lighter,
				),
				array(
					'name'  => esc_html( 'Accent', 'zafiro' ),
					'slug'  => 'accent',
					'color' => $color__accent,
				),
				array(
					'name'  => esc_html( 'Accent secondary', 'zafiro' ),
					'slug'  => 'accent-secondary',
					'color' => $color__accent_secondary,
				),
				array(
					'name'  => esc_html( 'Red', 'zafiro' ),
					'slug'  => 'red',
					'color' => $color__red,
				),
				array(
					'name'  => esc_html( 'Orange', 'zafiro' ),
					'slug'  => 'orange',
					'color' => $color__orange,
				),
				array(
					'name'  => esc_html( 'Green', 'zafiro' ),
					'slug'  => 'green',
					'color' => $color__green,
				),
			)
		);

		/**
		 * Editor gradient custom presets.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
		 */
		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name' => esc_html( 'Blue', 'zafiro' ),
					'gradient' => 'linear-gradient(160deg,' . $color__accent . ' 0%, ' . $color__accent_secondary . ' 100%)',
					'slug' => 'blue-lightblue',
				),
			)
		);

		 /**
		 * Support for responsive embeds.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#responsive-embedded-content
		 */
		add_theme_support( 'responsive-embeds' );

		/**
		 * Support for custom line heights.
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
		 */
		add_theme_support( 'custom-line-height' );

		/**
		 * Support for using other units appart from px to define sizes, paddings... (px, em, rem, vh, vw).
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units 
		 */
		add_theme_support( 'custom-units' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

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
