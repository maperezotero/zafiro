<?php
/**
 * Sanitization functions for Zafiro Customizer options.
 * 
 * @package zafiro
 * @since 1.0.0
 */
function zafiro_sanitize_radio( $input, $settings ) {
    // Input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key( $input );

    // Get the list of possible radio box options
    $choices = $settings->manager->get_control( $settings->id )->choices;

    // Return input if valid key or return deafult option
    return ( array_key_exists( $input, $choices ) ? $input : $settings->default );
}
