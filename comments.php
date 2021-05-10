<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zafiro
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$zafiro_comment_count = get_comments_number();
			if ( '1' === $zafiro_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'zafiro' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $zafiro_comment_count, 'comments title', 'zafiro' ) ),
					number_format_i18n( $zafiro_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'zafiro' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$args = array(
		'fields' => apply_filters(
			'comment_form_default_fields', array(
				'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
					'<label for="author">' . __( 'Your Name' ) . '</label> ' .
					( $req ? '<span class="required">*</span>' : '' )  .
					'</p>'
					,
				'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' />'  .
					'<label for="email">' . __( 'Your Email' ) . '</label> ' .
					( $req ? '<span class="required">*</span>' : '' ) 
					 .
					'</p>',
				'url'    => '<p class="comment-form-url">' .
				 '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
				'<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
				   '</p>'
			)
		),
		'comment_field' => '<p class="comment-form-comment">' .
			'<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
			'<textarea id="comment" name="comment" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="45" rows="8" aria-required="true"></textarea>' .
			'</p>',
		'comment_notes_after' => '',
		'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>'
	);

	comment_form( $args );
	?>

</div><!-- #comments -->
