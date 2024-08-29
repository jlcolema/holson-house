<?php

	if ( post_password_required() ) {

		return;

	}

?>

<?php

	// If comments are closed and there are comments, let's leave a little note, shall we?

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

?>

	<p class="no-comments"><?php _e( 'Comments are closed.', 'bloom' ); ?></p>

<?php endif; ?>

<div class="comment-form-wrap">

	<?php

		$comment_fields =  array(

			'author' => '<ul><li class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" name="author" type="text" placeholder="Name" size="30"' . $aria_req . ' /></li>',

			'email' => '<li class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="email" name="email" type="text" placeholder="Email" size="30"' . $aria_req . ' /></li>',

			'url' => '<li class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' . '<input id="url" name="url" type="text" placeholder="URL" size="30" /></li>',

		);

	?>

	<?php

		$comment_form_options = array(

			'fields'					=> apply_filters( 'comment_form_default_fields', $comment_fields ),
			'comment_field'				=> '<li class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment" aria-required="true"></textarea></li></ul>',
			// 'must_log_in'			=> '',
			// 'logged_in_as'			=> '',
			// 'comment_notes_before'	=> '',
			// 'comment_notes_after'	=> '',
			// 'id_form'				=> '',
			// 'id_submit'				=> '',
			// 'class_submit'			=> '',
			'title_reply'				=> __( 'Leave a Comment' ),
			// 'title_reply_to'			=> '',
			// 'cancel_reply_link'		=> '',
			'label_submit'				=> __( 'Submit' )

		);


	?>

	<?php comment_form( $comment_form_options ); ?>

</div>

<?php if ( have_comments() ) : ?>

	<div class="comments">

		<h3 class="comments-title">Comments</h3>

		<ol class="comment-list">

			<?php

				wp_list_comments( array(

					// 'walker'				=> null,
					// 'max_depth'			=> '',
					'style'					=> 'ol',
					// 'callback'			=> null,
					// 'end-callback'		=> null,
					// 'type'				=> 'all',
					'reply_text'			=> 'Reply',
					// 'page'				=> '',
					// 'per_page'			=> '',
					'avatar_size'			=> 56,
					// 'reverse_top_level'	=> null,
					// 'reverse_children'	=> '',
					// 'format'				=> 'html5',
					'short_ping'			=> true,
					// 'echo'				=> true

				) );

			?>

		</ol>

	</div>

<?php endif; // have_comments() ?>
