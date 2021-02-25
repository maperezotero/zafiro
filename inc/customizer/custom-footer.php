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

$wp_customize->add_setting( 'zafiro_footer_layout_setting', array(
	'default'              => 'default',
	'sanitize_callback'    => 'esc_html',
) );

$wp_customize->add_control( 'zafiro_footer_layout_control', array(
	'label' => esc_html__( 'Footer Layout', 'zafiro' ),
	'section' => 'zafiro_footer_section',
	'settings' => 'zafiro_footer_layout_setting',
	'type' => 'select',
	'choices' => array(
		'default' => __( 'Default 4 columns', 'zafiro' ),
		'left' => __( '3 columns 2+1+1', 'zafiro' ),
		'right' => __( '3 columns 1+1+2', 'zafiro' )
	),
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
	'active_callback' => 'zafiro_footer_layout_active_callback',
) );

function zafiro_footer_layout_active_callback( $control ){
	if ( $control->manager->get_setting( 'zafiro_footer_layout_setting' )->value() === 'default' ) {
		return true;
	} else {
		return false;
	}
}

/* Copy Section */
$wp_customize->add_setting( 'zafiro_copy_text_setting', array(
	'default'              => __( 'Default copy text &copy; 2010', 'zafiro' ),
	'sanitize_callback'    => 'wp_kses_post',
) );

$wp_customize->add_control( 'zafiro_copy_text_control', array(
	'label'    => __( 'Footer copy text: ', 'zafiro' ),
	'section'  => 'zafiro_footer_section',
	'settings' => 'zafiro_copy_text_setting',
	'type'     => 'textarea',
) );