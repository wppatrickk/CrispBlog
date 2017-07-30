<?php
function crispblog_scripts() {
	$fonts = array();
	$fonts[] = get_theme_mod('crispblog_site_font', 'open_sans');
	$fonts[] = get_theme_mod('crispblog_site_hfont', 'open_sans');
	
	if (in_array("droid_sans", $fonts)) {
		wp_enqueue_style( 'crispblog-droid', 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700' );
	} 

	if (in_array("open_sans", $fonts)) {
		wp_enqueue_style( 'crispblog-open', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i' );
	} 

	if (in_array("oswald", $fonts)) {
		wp_enqueue_style( 'crispblog-oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,700' );
	} 

	if (in_array("pt_sans", $fonts)) {
		wp_enqueue_style( 'crispblog-pt', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i' );
	} 

	if (in_array("lato", $fonts)) {
		wp_enqueue_style( 'crispblog-lato', 'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i' );
	} 

	if (in_array("raleway", $fonts)) {
		wp_enqueue_style( 'crispblog-raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,700,700i' );
	} 

	if (in_array("ubuntu", $fonts)) {
		wp_enqueue_style( 'crispblog-ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,700,700i' );
	} 

	if (empty($fonts)) {
		wp_enqueue_style( 'crispblog-open', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i' );
	}

	wp_enqueue_style( 'crispblog-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', '1.0.0' );
	wp_enqueue_style( 'crispblog-style', get_stylesheet_uri(), '1.0.0' );

	if (get_theme_mod('crispblog_base') == 'blue') {
		wp_enqueue_style( 'crispblog-blue', get_template_directory_uri() . '/css/colors/blue.css', '1.0.0' );
	} elseif (get_theme_mod('crispblog_base') == 'green') {
		wp_enqueue_style( 'crispblog-green', get_template_directory_uri() . '/css/colors/green.css', '1.0.0' );
	} elseif (get_theme_mod('crispblog_base') == 'chocolate') {
		wp_enqueue_style( 'crispblog-brown', get_template_directory_uri() . '/css/colors/brown.css', '1.0.0' );
	} elseif (get_theme_mod('crispblog_base') == 'dark') {
		wp_enqueue_style( 'crispblog-black', get_template_directory_uri() . '/css/colors/black.css', '1.0.0' );
	}

    if (is_home()) {
		$posts_layout = get_theme_mod('crispblog_home_layout', 'home_grid');
		if ($posts_layout == 'home_grid') {
			wp_enqueue_style( 'crispblog-grid', get_template_directory_uri() . '/css/grid.css', '1.0.0' );
		} elseif ($posts_layout == 'home_textless') {
			wp_enqueue_style( 'crispblog-pictures', get_template_directory_uri() . '/css/pictures.css', '1.0.0' );
		} elseif ($posts_layout == 'home_sorting') {
			wp_enqueue_style( 'crispblog-sorting', get_template_directory_uri() . '/css/sorting.css', '1.0.0' );
			wp_enqueue_script( 'crispblog-isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery'), '3.0.1', true );
			wp_enqueue_script( 'crispblog-load-posts', get_template_directory_uri() . '/js/load-posts-sorting.js', array('crispblog-isotope'), '1.0.0', true );
		} elseif ($posts_layout == 'home_infinite') {
			wp_enqueue_style( 'crispblog-infinite', get_template_directory_uri() . '/css/infinite.css', '1.0.0' );
			wp_enqueue_script( 'crispblog-isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery'), '3.0.1', true );
			wp_enqueue_script( 'imagesloaded' );
			wp_enqueue_script( 'crispblog-infinite', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('crispblog-isotope'), '2.0b2.11', true );
			wp_enqueue_script( 'crispblog-load-posts', get_template_directory_uri() . '/js/load-posts.js', array('crispblog-isotope'), '1.0.0', true );
			wp_localize_script( 'crispblog-load-posts', 'objectL10n', array(
				'finished' => esc_html__( 'All posts loaded', 'crispblog' ),
				'loading' => esc_html__( 'Loading posts', 'crispblog' ),
				'templateUrl' => get_template_directory_uri(),
			));
		}
	}
	
	if (is_category()) {
		$posts_layout = get_theme_mod('crispblog_category_layout', 'category_grid');
		if ($posts_layout == 'category_grid') {
			wp_enqueue_style( 'crispblog-grid', get_template_directory_uri() . '/css/grid.css', '1.0.0' );
		} elseif ($posts_layout == 'category_textless') {
			wp_enqueue_style( 'crispblog-pictures', get_template_directory_uri() . '/css/pictures.css', '1.0.0' );
		} elseif ($posts_layout == 'category_sorting') {
			wp_enqueue_style( 'crispblog-sorting', get_template_directory_uri() . '/css/sorting.css', '1.0.0' );
		} elseif ($posts_layout == 'category_infinite') {
			wp_enqueue_style( 'crispblog-infinite', get_template_directory_uri() . '/css/infinite.css', '1.0.0' );
		}

		if ($posts_layout == 'category_infinite') {
			wp_enqueue_script( 'crispblog-isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery'), '3.0.1', true );
			wp_enqueue_script( 'imagesloaded' );
			wp_enqueue_script( 'crispblog-infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('crispblog-isotope'), '2.0b2.11', true );
			wp_enqueue_script( 'crispblog-load-posts', get_template_directory_uri() . '/js/load-posts.js', array('crispblog-isotope'), '1.0.0', true );
			wp_localize_script( 'crispblog-load-posts', 'objectL10n', array(
				'finished' => esc_html__( 'All posts loaded', 'crispblog' ),
				'loading' => esc_html__( 'Loading posts', 'crispblog' ),
				'templateUrl' => get_template_directory_uri(),
			));
		}
	}

	if (is_tag()) {
		$posts_layout = get_theme_mod('crispblog_tag_layout', 'tag_grid');
		if ($posts_layout == 'tag_grid') {
			wp_enqueue_style( 'crispblog-grid', get_template_directory_uri() . '/css/grid.css', '1.0.0' );
		} elseif ($posts_layout == 'tag_textless') {
			wp_enqueue_style( 'crispblog-pictures', get_template_directory_uri() . '/css/pictures.css', '1.0.0' );
		} elseif ($posts_layout == 'tag_sorting') {
			wp_enqueue_style( 'crispblog-sorting', get_template_directory_uri() . '/css/sorting.css', '1.0.0' );
		} elseif ($posts_layout == 'tag_infinite') {
			wp_enqueue_style( 'crispblog-infinite', get_template_directory_uri() . '/css/infinite.css', '1.0.0' );
		}

		if ($posts_layout == 'tag_infinite') {
			wp_enqueue_script( 'crispblog-isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery'), '3.0.1', true );
			wp_enqueue_script( 'imagesloaded' );
			wp_enqueue_script( 'crispblog-infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('crispblog-isotope'), '2.0b2.11', true );
			wp_enqueue_script( 'crispblog-load-posts', get_template_directory_uri() . '/js/load-posts.js', array('crispblog-isotope'), '1.0.0', true );
			wp_localize_script( 'crispblog-load-posts', 'objectL10n', array(
				'finished' => esc_html__( 'All posts loaded', 'crispblog' ),
				'loading' => esc_html__( 'Loading posts', 'crispblog' ),
				'templateUrl' => get_template_directory_uri(),
			));
		}
	}

	if (is_page('infinite-blog-layout')) {
		wp_enqueue_style( 'crispblog-infinite', get_template_directory_uri() . '/css/infinite.css', '1.0.0' );
		wp_enqueue_script( 'crispblog-isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery'), '3.0.1', true );
		wp_enqueue_script( 'imagesloaded' );
		wp_enqueue_script( 'crispblog-infinite', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('crispblog-isotope'), '2.0b2.11', true );
		wp_enqueue_script( 'crispblog-load-posts', get_template_directory_uri() . '/js/load-posts.js', array('crispblog-isotope'), '1.0.0', true );
		wp_localize_script( 'crispblog-load-posts', 'objectL10n', array(
			'finished' => esc_html__( 'All posts loaded', 'crispblog' ),
			'loading' => esc_html__( 'Loading posts', 'crispblog' ),
			'templateUrl' => get_template_directory_uri(),
		));
	}

	if (is_page('pictures-blog-layout')) {
		wp_enqueue_style( 'crispblog-pictures', get_template_directory_uri() . '/css/pictures.css', '1.0.0' );
	}

	if (is_page('sorting-blog-layout')) {
		wp_enqueue_style( 'crispblog-sorting', get_template_directory_uri() . '/css/sorting.css', '1.0.0' );
		wp_enqueue_script( 'crispblog-isotope', get_template_directory_uri() . '/js/isotope.min.js', array('jquery'), '3.0.1', true );
		wp_enqueue_script( 'crispblog-load-posts', get_template_directory_uri() . '/js/load-posts-sorting.js', array('crispblog-isotope'), '1.0.0', true );
	}

	wp_enqueue_style( 'crispblog-custom', get_template_directory_uri() . '/css/crispblog-custom.css', '1.0.0' );
	wp_enqueue_script( 'crispblog-lazy-load', get_template_directory_uri() . '/js/jquery.lazyload.min.js', array('jquery'), '1.9.7', true );
	wp_enqueue_script( 'crispblog-script', get_template_directory_uri() . '/js/crispblog-script.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'crispblog_scripts' );

if ( ! isset( $content_width ) ) {
	$content_width = 1170;
}

add_filter( 'use_default_gallery_style', '__return_false' );

function crispblog_custom_css() {
    $font_stack = array('droid_sans' => 'Droid Sans, sans-serif', 'open_sans' => 'Open Sans, sans-serif', 'oswald' => 'Oswald, sans-serif', 'pt_sans' => 'PT Sans, sans-serif', 'lato' => 'Lato, sans-serif', 'raleway' => 'Raleway, sans-serif', 'ubuntu' => 'Ubuntu, sans-serif');

    $background = get_theme_mod('crispblog_bg');
    $site_font = get_theme_mod('crispblog_site_font', 'open_sans');
	$site_size = get_theme_mod('crispblog_site_font_size', '14px');
    $site_style = get_theme_mod('crispblog_site_font_style', '400');
    $site_color = get_theme_mod('crispblog_site_font_color', '#111');
    
    $site_css = 'body {';
    if ($background) {
    	$site_css .= ' background: ' . $background .'; ';
    }
    if(isset($font_stack[$site_font])){
    	$site_font_face = $font_stack[$site_font];
    	$site_css .= ' font-family:' . $site_font_face .'; ';
	}
    if ($site_size) {
    	$site_css .= ' font-size:' . $site_size .'; ';
    }
    if ($site_style) {
    	$site_css .= ' font-weight:' . $site_style .'; ';
    }
    if ($site_color) {
    	$site_css .= ' color:' . $site_color .'; ';
    }
    $site_css .= '}';

    $site_bh_font = get_theme_mod('crispblog_site_hfont', 'open_sans');
    $site_bh_font_style = get_theme_mod('crispblog_site_hfont_style', '700');
    $site_bh_font_color = get_theme_mod('crispblog_site_hfont_color', '#111');

    $site_css .= 'h1, h2, h3, h4, h5, h6 {';
    if ($site_bh_font_style) {
    	$site_css .= ' font-weight:' . $site_bh_font_style .'; ';
    }
    if(isset($font_stack[$site_bh_font])){
    	$site_bh_font_face = $font_stack[$site_bh_font];
    	$site_css .= ' font-family:' . $site_bh_font_face .'; ';
	}
    if ($site_bh_font_color) {
    	$site_css .= ' color:' . $site_bh_font_color .'; ';
    }
    $site_css .= '}';

    $crispblog_site_hfont1_size = get_theme_mod('crispblog_site_hfont1_size');

    $site_css .= 'h1 {';
    if ($crispblog_site_hfont1_size) {
    	$site_css .= ' font-size:' . $crispblog_site_hfont1_size .'; ';
    }
    $site_css .= '}';

    $crispblog_site_hfont2_size = get_theme_mod('crispblog_site_hfont2_size');

    if ($crispblog_site_hfont2_size) {
        $site_css .= 'h2 {';
    	$site_css .= ' font-size:' . $crispblog_site_hfont2_size .'; ';
        $site_css .= '}';
    }

    $crispblog_site_hfont3_size = get_theme_mod('crispblog_site_hfont3_size');

    $site_css .= 'h3 {';
    if ($crispblog_site_hfont3_size) {
    	$site_css .= ' font-size:' . $crispblog_site_hfont3_size .'; ';
    }
    $site_css .= '}';

    $crispblog_site_hfont4_size = get_theme_mod('crispblog_site_hfont4_size');

    $site_css .= 'h4 {';
    if ($crispblog_site_hfont4_size) {
    	$site_css .= ' font-size:' . $crispblog_site_hfont4_size .'; ';
    }
    $site_css .= '}';

    $crispblog_site_hfont5_size = get_theme_mod('crispblog_site_hfont5_size');

    $site_css .= 'h5 {';
    if ($crispblog_site_hfont5_size) {
    	$site_css .= ' font-size:' . $crispblog_site_hfont5_size .'; ';
    }
    $site_css .= '}';

    $crispblog_site_hfont6_size = get_theme_mod('crispblog_site_hfont6_size');

    $site_css .= 'h6 {';
    if ($crispblog_site_hfont6_size) {
    	$site_css .= ' font-size:' . $crispblog_site_hfont6_size .'; ';
    }
    $site_css .= '}';

    $site_css .= get_theme_mod('crispblog_custom_css');

    wp_add_inline_style( 'crispblog-custom', $site_css );
	
}

add_action( 'wp_enqueue_scripts', 'crispblog_custom_css' );
?>