<?php
/**
 * Zafiro Theme Customizer - Blog Options
 * 
 * @package zafiro
 * @since 1.0.0
 */

 /* Blog Section */
$wp_customize->add_section( 'zafiro_blog_section', array(
	'title'       => esc_html__(  'Blog Options', 'zafiro' ),
	'description' => esc_html__( 'Configure blog options', 'zafiro' ),
	'panel'       => 'zafiro_theme_options_panel',
) );

$wp_customize->add_setting( 'zafiro_sidebar_setting', array(
	'default'              => 'right',
	// 'sanitize_callback' => 'zafiro_sanitize_radio',
	'sanitize_callback'    => 'esc_html',
) );

$wp_customize->add_control( 'zafiro_sidebar_control', array(
	'label'      => esc_html__( 'Sidebar Position', 'zafiro' ),
	'section'    => 'zafiro_blog_section',
	'settings'   => 'zafiro_sidebar_setting',
	'type'       => 'radio',
	'choices'    => array(
		'nosidebar' => esc_html__( 'No sidebar', 'zafiro' ),
		'right'     => esc_html__( 'Right sidebar', 'zafiro' ),
		'left'      => esc_html__( 'Left sidebar', 'zafiro' ),
	),
) );
