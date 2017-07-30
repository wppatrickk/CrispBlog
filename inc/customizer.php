<?php
function crispblog_customizer( $wp_customize ) {
	$wp_customize->add_section( 'crispblog_settings', array(
	    'title' => __( 'General Settings', 'crispblog' ),
	    'priority' => 30,
	));

	$wp_customize->add_setting( 'crispblog_logo', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_img_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'crispblog_logo', array(
	    'label'    => __( 'Logo', 'crispblog' ),
	    'section'  => 'crispblog_settings',
	    'settings' => 'crispblog_logo',
	)));

	$wp_customize->add_setting('crispblog_base', array(
	    'default' => 'red',
	    'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_base', array(
	    'label' => __( 'Base Color', 'crispblog' ),
	    'section' => 'crispblog_settings',
	    'settings' => 'crispblog_base',
	    'type' => 'select',
	    'choices' => array(
	    	'red' => __( 'Red', 'crispblog' ),
			'blue' => __( 'Blue', 'crispblog' ),
	    	'green' => __( 'Green', 'crispblog' ),
			'chocolate' => __( 'Chocolate', 'crispblog' ),
			'dark' => __( 'Dark', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_bg', array(
		'default' => '#fff',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crispblog_bg', array(
		'label' => __( 'Background Color', 'crispblog' ),
		'settings' => 'crispblog_bg',
		'section' => 'crispblog_settings',
	)));

	$wp_customize->add_section( 'crispblog_font', array(
	    'title' => __( 'Font Settings', 'crispblog' ),
	    'priority' => 31,
	));

	$wp_customize->add_setting( 'crispblog_site_font', array(
		'default' => 'open_sans',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_font', array(
	    'label' => __( 'Site Font', 'crispblog' ),
	    'section' => 'crispblog_font',
	    'settings' => 'crispblog_site_font',
	    'type' => 'select',
	    'choices' => array(
	        'droid_sans' => __( 'Droid Sans', 'crispblog' ),
	        'open_sans' => __( 'Open Sans', 'crispblog' ),
	        'oswald' => __( 'Oswald', 'crispblog' ),
	        'pt_sans' => __( 'PT Sans', 'crispblog' ),
	        'lato' => __( 'Lato', 'crispblog' ),
	        'raleway' => __( 'Raleway', 'crispblog' ),
	        'ubuntu' => __( 'Ubuntu', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_font_size', array(
		'default' => '14px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_font_size', array(
	    'label' => __( 'Site Font Size', 'crispblog' ),
	    'section' => 'crispblog_font',
	    'settings' => 'crispblog_site_font_size',
	    'type' => 'select',
	    'choices' => array(
	    	'12px' => __( '12px', 'crispblog' ),
	        '13px' => __( '13px', 'crispblog' ),
			'14px' => __( '14px', 'crispblog' ),
			'15px' => __( '15px', 'crispblog' ),
			'16px' => __( '16px', 'crispblog' ),
			'17px' => __( '17px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'19px' => __( '19px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_font_color', array(
		'default' => '#111',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crispblog_site_font_color', array(
		'label' => __( 'Site Font Color', 'crispblog' ),
		'settings' => 'crispblog_site_font_color',
		'section' => 'crispblog_font',
	)));

	$wp_customize->add_setting( 'crispblog_site_font_style', array(
		'default' => '400',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_font_style', array(
	    'label' => __( 'Site Font Style', 'crispblog' ),
	    'section' => 'crispblog_font',
	    'settings' => 'crispblog_site_font_style',
	    'type' => 'select',
	    'choices' => array(
	    	'300' => __( 'Light', 'crispblog' ),
	        '400' => __( 'Normal', 'crispblog' ),
			'700' => __( 'Bold', 'crispblog' )
	    )
	)));

	$wp_customize->add_section( 'crispblog_hfont', array(
	    'title' => __( 'Header Font Settings', 'crispblog' ),
	    'priority' => 31,
	));

	$wp_customize->add_setting( 'crispblog_site_hfont', array(
		'default' => 'open_sans',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont', array(
	    'label' => __( 'Heading Font', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont',
	    'type' => 'select',
	    'choices' => array(
	        'droid_sans' => __( 'Droid Sans', 'crispblog' ),
	        'open_sans' => __( 'Open Sans', 'crispblog' ),
	        'oswald' => __( 'Oswald', 'crispblog' ),
	        'pt_sans' => __( 'PT Sans', 'crispblog' ),
	        'lato' => __( 'Lato', 'crispblog' ),
	        'raleway' => __( 'Raleway', 'crispblog' ),
	        'ubuntu' => __( 'Ubuntu', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont_color', array(
		'default' => '#111',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crispblog_site_hfont_color', array(
		'label' => __( 'Heading Font Color', 'crispblog' ),
		'settings' => 'crispblog_site_hfont_color',
		'section' => 'crispblog_hfont',
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont_style', array(
		'default' => '700',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont_style', array(
	    'label' => __( 'Heading Font Style', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont_style',
	    'type' => 'select',
	    'choices' => array(
	    	'300' => __( 'Light', 'crispblog' ),
	        '400' => __( 'Normal', 'crispblog' ),
			'700' => __( 'Bold', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont1_size', array(
		'default' => '28px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont1_size', array(
	    'label' => __( 'H1 Font Size', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont1_size',
	    'type' => 'select',
	    'choices' => array(
	    	'16px' => __( '16px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' ),
			'22px' => __( '22px', 'crispblog' ),
			'24px' => __( '24px', 'crispblog' ),
			'26px' => __( '26px', 'crispblog' ),
			'28px' => __( '28px', 'crispblog' ),
			'30px' => __( '30px', 'crispblog' ),
			'32px' => __( '32px', 'crispblog' ),
			'34px' => __( '34px', 'crispblog' ),
			'36px' => __( '36px', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont2_size', array(
		'default' => '24px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont2_size', array(
	    'label' => __( 'H2 Font Size', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont2_size',
	    'type' => 'select',
	    'choices' => array(
	    	'16px' => __( '16px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' ),
			'22px' => __( '22px', 'crispblog' ),
			'24px' => __( '24px', 'crispblog' ),
			'26px' => __( '26px', 'crispblog' ),
			'28px' => __( '28px', 'crispblog' ),
			'30px' => __( '30px', 'crispblog' ),
			'32px' => __( '32px', 'crispblog' ),
			'34px' => __( '34px', 'crispblog' ),
			'36px' => __( '36px', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont3_size', array(
		'default' => '20px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont3_size', array(
	    'label' => __( 'H3 Font Size', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont3_size',
	    'type' => 'select',
	    'choices' => array(
	    	'16px' => __( '16px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' ),
			'22px' => __( '22px', 'crispblog' ),
			'24px' => __( '24px', 'crispblog' ),
			'26px' => __( '26px', 'crispblog' ),
			'28px' => __( '28px', 'crispblog' ),
			'30px' => __( '30px', 'crispblog' ),
			'32px' => __( '32px', 'crispblog' ),
			'34px' => __( '34px', 'crispblog' ),
			'36px' => __( '36px', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont4_size', array(
		'default' => '16px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont4_size', array(
	    'label' => __( 'H4 Font Size', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont4_size',
	    'type' => 'select',
	    'choices' => array(
	    	'12px' => __( '12px', 'crispblog' ),
			'14px' => __( '14px', 'crispblog' ),
	    	'16px' => __( '16px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' ),
			'22px' => __( '22px', 'crispblog' ),
			'24px' => __( '24px', 'crispblog' ),
			'26px' => __( '26px', 'crispblog' ),
			'28px' => __( '28px', 'crispblog' ),
			'30px' => __( '30px', 'crispblog' ),
			'32px' => __( '32px', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont5_size', array(
		'default' => '14px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont5_size', array(
	    'label' => __( 'H5 Font Size', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont5_size',
	    'type' => 'select',
	    'choices' => array(
	    	'12px' => __( '12px', 'crispblog' ),
			'14px' => __( '14px', 'crispblog' ),
	    	'16px' => __( '16px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' ),
			'22px' => __( '22px', 'crispblog' ),
			'24px' => __( '24px', 'crispblog' ),
			'26px' => __( '26px', 'crispblog' ),
			'28px' => __( '28px', 'crispblog' ),
			'30px' => __( '30px', 'crispblog' ),
			'32px' => __( '32px', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting( 'crispblog_site_hfont6_size', array(
		'default' => '12px',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_site_hfont6_size', array(
	    'label' => __( 'H6 Font Size', 'crispblog' ),
	    'section' => 'crispblog_hfont',
	    'settings' => 'crispblog_site_hfont6_size',
	    'type' => 'select',
	    'choices' => array(
	    	'12px' => __( '12px', 'crispblog' ),
			'14px' => __( '14px', 'crispblog' ),
	    	'16px' => __( '16px', 'crispblog' ),
			'18px' => __( '18px', 'crispblog' ),
			'20px' => __( '20px', 'crispblog' ),
			'22px' => __( '22px', 'crispblog' ),
			'24px' => __( '24px', 'crispblog' ),
			'26px' => __( '26px', 'crispblog' ),
			'28px' => __( '28px', 'crispblog' ),
			'30px' => __( '30px', 'crispblog' ),
			'32px' => __( '32px', 'crispblog' )
	    )
	)));

	$wp_customize->add_section( 'crispblog_layouts', array(
	    'title' => __( 'Layout Settings', 'crispblog' ),
	    'priority' => 32,
	));

	$wp_customize->add_setting('crispblog_archive_layout', array(
	    'default' => 'full_width',
	    'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_archive_layout', array(
	    'label' => __( 'Archive Page Layout', 'crispblog' ),
	    'section' => 'crispblog_layouts',
	    'settings' => 'crispblog_archive_layout',
	    'type' => 'select',
	    'choices' => array(
	    	'full_width' => __( 'Full Width', 'crispblog' ),
			'right_sidebar' => __( 'Right Sidebar', 'crispblog' ),
	    	'left_sidebar' => __( 'Left Sidebar', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting('crispblog_home_layout', array(
	    'default' => 'home_grid',
	    'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_home_layout', array(
	    'label' => __( 'Home Page Layout', 'crispblog' ),
	    'section' => 'crispblog_layouts',
	    'settings' => 'crispblog_home_layout',
	    'type' => 'select',
	    'choices' => array(
	    	'home_standard' => __( 'Standard', 'crispblog' ),
			'home_grid' => __( 'Grid', 'crispblog' ),
	    	'home_textless' => __( 'Pictures', 'crispblog' ),
	    	'home_sorting' => __( 'Sorting', 'crispblog' ),
	    	'home_infinite' => __( 'Infinite', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting('crispblog_category_layout', array(
	    'default' => 'category_grid',
	    'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_category_layout', array(
	    'label' => __( 'Category Page Layout', 'crispblog' ),
	    'section' => 'crispblog_layouts',
	    'settings' => 'crispblog_category_layout',
	    'type' => 'select',
	    'choices' => array(
	    	'category_standard' => __( 'Standard', 'crispblog' ),
			'category_grid' => __( 'Grid', 'crispblog' ),
	    	'category_textless' => __( 'Pictures', 'crispblog' ),
	    	'category_infinite' => __( 'Infinite', 'crispblog' )
	    )
	)));

	$wp_customize->add_setting('crispblog_tag_layout', array(
	    'default' => 'tag_grid',
	    'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_fallback',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_tag_layout', array(
	    'label' => __( 'Tag Page Layout', 'crispblog' ),
	    'section' => 'crispblog_layouts',
	    'settings' => 'crispblog_tag_layout',
	    'type' => 'select',
	    'choices' => array(
	    	'tag_standard' => __( 'Standard', 'crispblog' ),
			'tag_grid' => __( 'Grid', 'crispblog' ),
	    	'tag_textless' => __( 'Pictures', 'crispblog' ),
	    	'tag_infinite' => __( 'Infinite', 'crispblog' )
	    )
	)));

	$wp_customize->add_section( 'crispblog_social_media', array(
	    'title' => __( 'Social Media Settings', 'crispblog' ),
	    'priority' => 33,
	));

	$wp_customize->add_setting( 'crispblog_sharing', array(
		'default' => '1',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_checkbox',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_sharing', array(
        'label'     => __('Enable Sharing', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_sharing',
        'type'      => 'checkbox',
    )));

    $wp_customize->add_setting( 'crispblog_facebook', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_url',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_facebook', array(
        'label'     => __('Facebook URL', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_facebook',
        'type'      => 'text',
    )));

    $wp_customize->add_setting( 'crispblog_twitter', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_url',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_twitter', array(
        'label'     => __('Twitter URL', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_twitter',
        'type'      => 'text',
    )));

    $wp_customize->add_setting( 'crispblog_gplus', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_url',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_gplus', array(
        'label'     => __('Google+ URL', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_gplus',
        'type'      => 'text',
    )));

    $wp_customize->add_setting( 'crispblog_instagram', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_url',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_instagram', array(
        'label'     => __('Instragram URL', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_instagram',
        'type'      => 'text',
    )));

    $wp_customize->add_setting( 'crispblog_pinterest', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_url',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_pinterest', array(
        'label'     => __('Pinterest URL', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_pinterest',
        'type'      => 'text',
    )));

    $wp_customize->add_setting( 'crispblog_youtube', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'crispblog_sanitize_url',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'crispblog_youtube', array(
        'label'     => __('YouTube URL', 'crispblog'),
        'section'   => 'crispblog_social_media',
        'settings'  => 'crispblog_youtube',
        'type'      => 'text',
    )));
}

add_action('customize_register','crispblog_customizer');

function crispblog_sanitize_fallback( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function crispblog_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function crispblog_sanitize_url( $input ) {
	return esc_url_raw( $input );
}

function crispblog_img_sanitize_fallback( $image, $setting ) {
	$mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	
	$file = wp_check_filetype( $image, $mimes );
	return ( $file['ext'] ? $image : $setting->default );
}
?>