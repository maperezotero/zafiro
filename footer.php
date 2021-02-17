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
				<div class="col-md-12">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zafiro' ) ); ?>" target="_blank">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'zafiro' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'zafiro' ), 'Zafiro', '<a href="https://maperez.es/" target="_blank">@maperezotero</a>' );
							?>
					</div><!-- .site-info -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->	
	</div><!-- .copy -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
