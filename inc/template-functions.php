<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package zafiro
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function zafiro_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Mapo - Adds a class of yes-sidebar when the user choose to display the sidebar.
	get_theme_mod( 'display_sidebar', false ) ? $classes[] = 'yes-sidebar' : '';

	return $classes;
}
add_filter( 'body_class', 'zafiro_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function zafiro_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'zafiro_pingback_header' );
