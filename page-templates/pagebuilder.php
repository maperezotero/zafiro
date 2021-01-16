<?php
/**
 * Template Name: Page Builder
 * 
 * @package zafiro
 * @since 1.0.0
 */
get_header();
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<main id="primary-builder" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();
					?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="entry-content-builder">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

							<?php if ( get_edit_post_link() ) : ?>
								<footer class="entry-footer">
									<?php
									edit_post_link(
										sprintf(
											wp_kses(
												/* translators: %s: Name of current post. Only visible to screen readers */
												__( 'Edit <span class="screen-reader-text">%s</span>', 'mapo' ),
												array(
													'span' => array(
														'class' => array(),
													),
												)
											),
											wp_kses_post( get_the_title() )
										),
										'<span class="edit-link">',
										'</span>'
									);
									?>
								</footer><!-- .entry-footer -->
							<?php endif; ?>

						</article><!-- #post-<?php the_ID(); ?> -->

					<?php
					endwhile; // End of the loop.
					?>

				</main><!-- #main -->

			</div><!-- .col-md-12 -->

		</div><!-- .row -->
    </div><!-- .container -->
<?php
get_footer();