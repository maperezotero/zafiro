<?php 
/**
 * Template part for displaying the footer with 1/4 1/4 2/4 columns layout.
 * 
 * @package zafiro
 * @since 1.0.0
 */
?>
<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>

<footer id="colophon" class="site-footer">

	<div class="container">
		<div class="row">

			<div class="col-sm-6 col-md-3"><?php dynamic_sidebar( 'footer-sidebar-1' ); ?></div>
			<div class="col-sm-6 col-md-3"><?php dynamic_sidebar( 'footer-sidebar-2' ); ?></div>
			<div class="col-sm-6 col-md-6"><?php dynamic_sidebar( 'footer-sidebar-3' ); ?></div>
					
		</div><!-- .row -->
	</div><!-- .container -->

</footer><!-- #colophon -->

<?php endif; ?>
