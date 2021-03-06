<?php
/**
 * Displays site branding.
 * 
 * @package zafiro
 * @since 1.0.0
 */
?>
<div class="site-branding">
	<!-- <div> -->
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$zafiro_description = get_bloginfo( 'description', 'display' );
			if ( $zafiro_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $zafiro_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	<!-- </div> -->
</div><!-- .site-branding -->