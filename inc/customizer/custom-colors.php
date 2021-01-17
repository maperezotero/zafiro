<?php
/**
 * Zafiro Theme Customizer - Colors
 * 
 * @package zafiro
 * @since 1.0.0
 */
/* Header Background Color */
$wp_customize->add_setting( 'zafiro_header_bg_color', array(
	'default'            => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zafiro_header_bg_color', array(
	'label'   => __( 'Header Background Color', 'zafiro' ),
	'section' => 'colors',
	'setting' => 'zafiro_header_bg_color',
) ) );

/* Header Links Color */
$wp_customize->add_setting( 'zafiro_header_color', array(
	'default'            => '#404040',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zafiro_header_color', array(
	'label'   => __( 'Header Links Color', 'zafiro' ),
	'section' => 'colors',
	'setting' => 'zafiro_header_color',
) ) );