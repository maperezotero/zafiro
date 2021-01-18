<?php
/**
 * Zafiro Theme Customizer - Blog Options
 * 
 * @package zafiro
 * @since 1.0.0
 */

 /* Blog Section */
$wp_customize->add_section( 'zafiro_blog_section', array(
    'title' => __( 'Blog Options', 'zafiro' ),
    'priority' => 2,
    'panel' => 'zafiro_theme_options_panel',
) );

