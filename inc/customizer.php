<?php
/**
 * Zafiro Theme Customizer
 *
 * @package zafiro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zafiro_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'zafiro_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'zafiro_customize_partial_blogdescription',
			)
		);
	}

	/* Theme Options panel */
	$wp_customize->add_panel( 'zafiro_theme_options_panel', array(
		'title' => __( 'Theme Options', 'zafiro' ),
		'description' => __( 'Theme modifications like color scheme, layout and other preferences can be done here.', 'zafiro' ),
		'priority' => 30,
	) );

	// Custom colors
	include get_template_directory() . '/inc/customizer/custom-colors.php';

	// Blog options
	include get_template_directory() . '/inc/customizer/custom-blog.php';

	// Footer options
	include get_template_directory() . '/inc/customizer/custom-footer.php';

}
add_action( 'customize_register', 'zafiro_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function zafiro_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function zafiro_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zafiro_customize_preview_js() {
	wp_enqueue_script( 'zafiro-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), ZAFIRO_VERSION, true );
}
add_action( 'customize_preview_init', 'zafiro_customize_preview_js' );

/**
 * Apply customizations
 */
function zafiro_theme_customizations() {

	$header_bg_color = get_theme_mod( 'zafiro_header_bg_color', '#ffffff' );
	$header_color = get_theme_mod( 'zafiro_header_color', '#404040' );
	$header_hover_color = get_theme_mod( 'zafiro_header_hover_color', '#cccccc' );
	?>
		<!-- Zafiro Customizer -->
		<style type="text/css" id="zafiro-custom-css">
			.site-header { 
				background: <?php echo esc_html( $header_bg_color ); ?>;
				border-bottom-color: <?php echo esc_html( $header_bg_color ); ?>;
			}
			.site-header a, .site-header a:visited { color: <?php echo esc_html( $header_color ); ?>; }
            .site-header a:hover, .site-header a:focus { color: <?php echo esc_html( $header_hover_color ); ?>; }
            .main-navigation ul { background-color: <?php echo esc_attr( $header_bg_color ); ?>; }
		</style>
		<!-- End Zafiro Customizer -->
	<?php

}
add_action( 'wp_head', 'zafiro_theme_customizations' );