<?php
/**
 * Zafiro custom hero block pattern
 * 
 * @link https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
 * 
 * @package zafiro
 * @since 1.0.0
 */

register_block_pattern(
	'zafiro/hero-pattern',
	array(
		'title'       => __( 'Hero Section', 'zafiro' ),
		'description' => _x( 'A hero section with a cover image, a big text, a smaller text and a CTA button.', 'Block pattern description', 'zafiro' ),
		'content'     => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/img/hero-bg.jpg' ) ) . '","id":17,"hasParallax":true,"minHeight":100,"minHeightUnit":"vh","align":"full"} -->
		<div class="wp-block-cover alignfull has-background-dim has-parallax" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/img/hero-bg.jpg' ) ) . ');min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-extrabold","fontSize":"monster"} -->
		<h1 class="has-text-align-center is-style-extrabold has-monster-font-size">Write something really important here</h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":33}}} -->
		<p class="has-text-align-center" style="font-size:33px">And something less important here</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer {"height":30} -->
		<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"align":"center"} -->
		<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":3,"style":{"color":{"background":"#33bbcc"}},"textColor":"white","className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-text-color has-background" href="#" style="border-radius:3px;background-color:#33bbcc">Tell me more</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:cover -->',
		'categories'  => array( 'hero' ),
	)
);

register_block_pattern_category(
	'hero',
	array( 'label' => __( 'Hero', 'zafiro' ) )
);
