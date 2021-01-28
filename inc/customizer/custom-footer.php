<?php
/**
 * Zafiro Theme Customizer - Footer options
 * 
 * @package zafiro
 * @since 1.0.0
 */

 /* Footer Section */
 $wp_customize->add_section( 'zafiro_footer_section', array(
	'title'       => esc_html__(  'Footer Options', 'zafiro' ),
	'description' => esc_html__( 'Configure footer options', 'zafiro' ),
	'panel'       => 'zafiro_theme_options_panel',
) );

$wp_customize->add_setting( 'zafiro_footer_setting', array(
	'default'              => 4,
	'sanitize_callback'    => 'esc_html',
) );

$wp_customize->add_control( 'zafiro_footer_control', array(
	'label'    => esc_html__( 'Footer Columns', 'zafiro' ),
	'section'  => 'zafiro_footer_section',
	'settings' => 'zafiro_footer_setting',
	'type'     => 'select',
	'choices'  => array(
		4 => __( '4', 'zafiro' ),
		3 => __( '3', 'zafiro' ),
		2 => __( '2', 'zafiro' ),
	),
) );