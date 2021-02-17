<?php 
/**
 * Template part for displaying the default footer.
 * 
 * @package zafiro
 * @since 1.0.0
 */
?>
<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>

<footer id="colophon" class="site-footer">

	<div class="container">
		<div class="row">

			<?php 
				$num_columns = get_theme_mod( 'zafiro_footer_setting', '4' );
				echo zafiro_footer_columns( $num_columns ); 
			?>
					
		</div><!-- .row -->
	</div><!-- .container -->

</footer><!-- #colophon -->

<?php endif; ?>
