<?php
function crispblog_inspire_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crispblog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'crispblog' ),
		'before_widget' => '<section id="%1$s" class="sidepanel widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'crispblog_inspire_widgets_init' );
?>