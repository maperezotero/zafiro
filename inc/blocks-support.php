<?php
/**
 * Add support for Gutenber block editor
 * 
 * @package zafiro
 * @since 1.0.0
 */

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
$color__green            = '#16a2bb';

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
