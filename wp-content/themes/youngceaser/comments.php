<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'youngceaser' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<?php youngceaser_comment_nav(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php youngceaser_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'youngceaser' ); ?></p>
	<?php endif; ?>


	<?php
	$comments_args = array(
		// Change the title of send button
		'label_submit' => __( 'Post Comment', 'textdomain' ),
		// Change the title of the reply section
		'title_reply' => __( '', 'textdomain' ),
		// Remove "Text or HTML to be displayed after the set of comment fields".
		'comment_notes_after' => '',
		// Redefine your own textarea (the comment body).
		'fields' => '',
		'comment_field' => '
		<div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">Speak Your Mind <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2017/03/10/how-to-run-your-first-facebook-ppc-campaign-if-you-have-no-experience/#respond" style="display:none;">Cancel reply</a></small></h3>
                    <p class="comment-form-comment">
                        <textarea id="comment" name="comment" cols="45" rows="8" tabindex="4" aria-required="true"></textarea>
                    </p>
                    <p class="comment-form-author">
                        <input id="author" name="author" type="text" value="" size="30" tabindex="1" aria-required="true">
                        <label for="author">Name</label> <span class="required">*</span></p>
                    <p class="comment-form-email">
                        <input id="email" name="email" type="text" value="" size="30" tabindex="2" aria-required="true">
                        <label for="email">Email</label> <span class="required">*</span></p>
                    <p class="form-submit">
                        <input type="hidden" name="comment_post_ID" value="'.$post->ID.'" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" value="" id="comment_parent">
                    </p>
            </div>
		
		',
	);
	comment_form( $comments_args );
	?>


<!--	--><?php //comment_form(); ?>

</div><!-- .comments-area -->
