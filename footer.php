<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zafiro
 */

?>

	<?php
		$footer_layout = get_theme_mod( 'zafiro_footer_layout_setting', 'default' );
		get_template_part( 'template-parts/footer/footer', $footer_layout );
	?>

	<div id="mapo" class="copy">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="site-info">
						<?php echo wp_kses_post( get_theme_mod( 'zafiro_copy_text_setting', 'Custom Copy Text' ) ); ?>
					</div><!-- .site-info -->
				</div><!-- .col-md-6 -->
				<div class="col-md-6">
					<div class="copy-menu">
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'menu-2',
								'container' => '',
							) ); 
						?>
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->	
	</div><!-- .copy -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
