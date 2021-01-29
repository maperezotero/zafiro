<?php
/**
 * Zafiro Theme Customizer - Colors
 * 
 * @package zafiro
 * @since 1.0.0
 */

/* Colors Section */
$wp_customize->add_section( 'zafiro_colors_section', array(
	'title'    => __( 'Theme Colors', 'zafiro' ),
	'priority' => 1,
	'panel'    => 'zafiro_theme_options_panel',
) );

// Header
$colors[] = array(
	'slug'    => 'zafiro_header_bg_color',
	'default' => '#fff',
	'label'   => 'Header Background Color',
);

$colors[] = array(
	'slug'    => 'zafiro_header_color',
	'default' => '#12232e',
	'label'   => 'Header Links Color',
);

$colors[] = array(
	'slug'    => 'zafiro_header_hover_color',
	'default' => '#cad8db',
	'label'   => 'Header Links Hover Color',
);

// Footer
$colors[] = array(
	'slug'    => 'zafiro_footer_bg_color',
	'default' => '#203647',
	'label'   => 'Footer Background Color',
);

$colors[] = array(
	'slug'    => 'zafiro_footer_color',
	'default' => '#cad8db',
	'label'   => 'Footer Links Color',
);

$colors[] = array(
	'slug'    => 'zafiro_footer_hover_color',
	'default' => '#4da8da',
	'label'   => 'Footer Links Hover Color',
);



/**
 * Add the settings and controls for each color
 */
foreach( $colors as $color ) {

	// Settings
	$wp_customize->add_setting( $color['slug'], array(
		'default' => $color['default'],
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	// Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array(
		'label'   => __( $color['label'], 'zafiro' ),
		'section' => 'zafiro_colors_section',
		'setting' => $color['slug'],
	) ) );

}
