<?php
/**
 * The template for displaying Comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package applayers
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php 
    // You can start editing here -- including this comment!
        if ( have_comments() ) : 
    ?>
        <h3 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'applayers' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h3><!-- .comments-title -->
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                    'callback'    => 'applayers_list_comment',
                    'max_depth'   => '2'
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'applayers' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( esc_html__( '&amp;larr; Older Comments', 'applayers' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &amp;rarr;', 'applayers' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'applayers' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
 	<div class="contact_form">

    <?php 

	    $comments_args = array(
	    	'fields' => array(
	    		'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . esc_html__( 'Full Name', 'applayers' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
					'<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',

				'email'  => '<div class="form-group comment-form-email"><label for="email">' . esc_html__( 'Email Address', 'applayers' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
				'<input id="email" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
	    	),

	    	'class_submit'  => 'btn btn-default',
	    	'submit_field'  => '<div class="section_sub_btn">%1$s %2$s</div>',
	    	'comment_field' => '<div class="form-group comment-form-comment"><label for="comment">' . esc_html_x( 'Message', 'applayers' ) . '</label> <textarea id="comment" class="form-textarea" name="comment" rows="3" aria-required="true"></textarea></div>'
	    );

	    comment_form($comments_args); 
    ?>

 	</div><!-- .contact_form -->
</div><!-- #comments .comments-area -->

