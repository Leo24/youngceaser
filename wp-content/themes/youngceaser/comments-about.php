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
        'class_form' => 'np-form',
        'class_submit' => 'btn btn-rwr',
		'comment_field' => '
                    <h3 id="reply-title" class="size-36 comment-reply-title">Speak Your Mind <small><a rel="nofollow" id="cancel-comment-reply-link" href="/about/#respond" style="display:none;">Cancel reply</a></small></h3>
                       
                       <p class="text">
                            <textarea class="field" name="comment" placeholder="Write Comment" required></textarea>
                        </p>
                        <p class="p-name">
                            <input class="field" name="author" type="text" value="" placeholder="Name" required>
                        </p>
                        <p class="p-email">
                            <input class="field" name="email" type="email" value="" placeholder="Email Address" required>
                        </p>
                        <p style="display: none;">
                            <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="0c4c5c3388">
                        </p>
                        <p style="display: none;">
                            <input type="hidden" id="ak_js" name="ak_js" value="158">
                        </p>
		
		',
	);
	comment_form( $comments_args );
	?>


<!--	--><?php //comment_form(); ?>

</div><!-- .comments-area -->
