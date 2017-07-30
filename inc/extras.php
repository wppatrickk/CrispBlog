<?php
function crispblog_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'crispblog_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function crispblog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'crispblog_pingback_header' );

add_filter('widget_text', 'do_shortcode');

function crispblog_comment_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
        wp_enqueue_script( 'comment-reply' ); 
    }
}

add_action( 'wp_enqueue_scripts', 'crispblog_comment_reply' );

function crispblog_textarea_placeholder( $args ) {
	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="' . __( 'Comment', 'crispblog' ) . '"', $args['comment_field'] );
	return $args;
}

add_filter( 'comment_form_defaults', 'crispblog_textarea_placeholder' );

function crispblog_form_fields( $fields ) {
	$fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
            . _x(
                'Your Name',
                'comment form placeholder',
                'crispblog'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        '<input type="email" placeholder="'. _x(
                'Your Email',
                'comment form placeholder',
                'crispblog'
                )
            . '"  id="email" name="email"',
        $fields['email']
    );
    unset($fields['url']);
	return $fields;
}

add_filter( 'comment_form_default_fields', 'crispblog_form_fields' );

function crispblog_comment_form_below( $fields ) { 
    $comment_field = $fields['comment']; 
    unset( $fields['comment'] ); 
    $fields['comment'] = $comment_field; 
    return $fields; 
} 

add_filter( 'comment_form_fields', 'crispblog_comment_form_below' );

function crispblog_reset_options() { 
    remove_theme_mods();
}

add_action( 'after_switch_theme', 'crispblog_reset_options' );

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});