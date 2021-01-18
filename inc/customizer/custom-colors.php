<?php
/**
 * Zafiro Theme Customizer - Colors
 * 
 * @package zafiro
 * @since 1.0.0
 */

 /* Colors Section */
 $wp_customize->add_section( 'zafiro_colors_section', array(
	'title' => __( 'Theme Colors', 'zafiro' ),
	'priority' => 1,
	'panel' => 'zafiro_theme_options_panel'
 ) );

/* Header Background Color */
$wp_customize->add_setting( 'zafiro_header_bg_color', array(
	'default'            => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zafiro_header_bg_color', array(
	'label'   => __( 'Header Background Color', 'zafiro' ),
	'section' => 'zafiro_colors_section',
	'setting' => 'zafiro_header_bg_color',
) ) );

/* Header Links Color */
$wp_customize->add_setting( 'zafiro_header_color', array(
	'default'            => '#404040',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zafiro_header_color', array(
	'label'   => __( 'Header Links Color', 'zafiro' ),
	'section' => 'zafiro_colors_section',
	'setting' => 'zafiro_header_color',
) ) );

/* Header Links Hover Color */
$wp_customize->add_setting( 'zafiro_header_hover_color', array(
	'default'            => '#cccccc',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zafiro_header_hover_color', array(
	'label'   => __( 'Header Links Hover Color', 'zafiro' ),
	'section' => 'zafiro_colors_section',
	'setting' => 'zafiro_header_hover_color',
) ) );