<?php
if ( ! function_exists( 'crispblog_setup' ) ) :

function crispblog_setup() {
	load_theme_textdomain( 'crispblog', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'crispblog' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	$GLOBALS['content_width'] = apply_filters( 'crispblog_content_width', 1000 );
}
endif;

add_action( 'after_setup_theme', 'crispblog_setup' );

/* Crispblog Theme Customizer Settings */
require get_template_directory() . '/inc/customizer.php';

/* Crispblog Theme Sidebars */
require get_template_directory() . '/inc/theme-sidebars.php';

/* Crispblog Theme CSS/JS */
require get_template_directory() . '/inc/theme-scripts.php';

/* Crispblog Theme Template Tags */
require get_template_directory() . '/inc/template-tags.php';

/* Crispblog Theme Miscellaneous Functions */
require get_template_directory() . '/inc/extras.php';
