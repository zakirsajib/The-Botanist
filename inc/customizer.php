<?php
/**
 * botanist Theme Customizer
 *
 * @package Botanist
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function botanist_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->get_setting( 'booking_label' )->transport = 'postMessage';
	$wp_customize->get_setting( 'footer_phone' )->transport = 'postMessage';
	$wp_customize->get_setting( 'footer_address' )->transport = 'postMessage';
	

	// Remove Existing sections
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');	
	
	// Remove Existing controls
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	// Booking in > title_tagline section
	//Booking text
	$wp_customize->add_setting( 'booking_label', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'booking_label', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'title_tagline',
	    'label' => __( 'Booking Field', 'botanist' ),
	    'description' => 'Booking Label text',
	) );
	
	// Booking URL
	$wp_customize->add_setting( 'booking_url', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'booking_url', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'title_tagline',
	    'label' => __( 'Booking URL Field', 'botanist' ),
	    'description' => 'Booking URL text',
	) );
	
	
	
	
	
	// Add Footer panel
	$wp_customize->add_panel( 'footer_panel_botanist', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'botanist' ),
	    'description' => __( 'Add supporters logo and web link', 'botanist' ),
	) );
	
	// Footer Background
	$wp_customize->add_section( 'footer_logo_section', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer Background', 'botanist' ),
	    'description' => '',
	    'panel' => 'footer_panel_botanist',
	) );
	$wp_customize->add_setting( 'footer_background', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'footer_background',
	        array(
	            'label' => 'Background Image',
	            'section' => 'footer_logo_section',
	            'settings' => 'footer_background',
	            'description' => 'Recommended Max. Size: 1400 x 310 pixels. Preferred Image format is SVG',
	        )
	    )
	);
	
	// Footer Logo
	$wp_customize->add_section( 'footer_logo_section_two', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer Logo', 'botanist' ),
	    'description' => '',
	    'panel' => 'footer_panel_botanist',
	) );
	$wp_customize->add_setting( 'footer_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'footer_logo',
	        array(
	            'label' => 'Logo',
	            'section' => 'footer_logo_section_two',
	            'settings' => 'footer_logo',
	            'description' => 'Preferred Image format is PNG/SVG',
	        )
	    )
	);
	
	
	// Add About panel
	$wp_customize->add_panel( 'location_panel_botanist', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'About', 'botanist' ),
	    'description' => __( '', 'botanist' ),
	) );
	
	// About Background
	$wp_customize->add_section( 'location_logo_section', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'About Background', 'botanist' ),
	    'description' => '',
	    'panel' => 'location_panel_botanist',
	) );
	$wp_customize->add_setting( 'location_background', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'location_background',
	        array(
	            'label' => 'Background Image',
	            'section' => 'location_logo_section',
	            'settings' => 'location_background',
	            'description' => 'Recommended Max. Size: 1400 x 310 pixels. Preferred Image format is SVG',
	        )
	    )
	);
	
	
	// Copyright section
	$wp_customize->add_section( 'footer_copyright_section', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Copyright', 'botanist' ),
	    'description' => '',
	    'panel' => 'footer_panel_botanist',
	) );
	//copyright text
	$wp_customize->add_setting( 'footer_copyright', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'footer_copyright', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'footer_copyright_section',
	    'label' => __( 'Copyright Field', 'botanist' ),
	    'description' => 'Footer Copyright text',
	) );
	//Address section
	$wp_customize->add_section( 'footer_address_section', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Address', 'botanist' ),
	    'description' => '',
	    'panel' => 'footer_panel_botanist',
	) );
	
	
	
	// Address
	$wp_customize->add_setting( 'footer_address', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'footer_address', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'footer_address_section',
	    'label' => __( 'Address Field', 'botanist' ),
	    'description' => 'Footer Address text',
	) );
	//Phone Number section
	$wp_customize->add_section( 'footer_phone_section', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Phone Number', 'botanist' ),
	    'description' => '',
	    'panel' => 'footer_panel_botanist',
	) );
	
	
	
	// Phone Number
	$wp_customize->add_setting( 'footer_phone', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'footer_phone', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'footer_phone_section',
	    'label' => __( 'Phone Number Field', 'botanist' ),
	    'description' => 'Footer Phone Number',
	) );
	
	
	
	// Add Social panel
	$wp_customize->add_panel( 'social_panel_botanist', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Social Media', 'botanist' ),
	    'description' => __( 'Add social web link', 'botanist' ),
	) );
	$wp_customize->add_section( 'social_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Social Media URLs', 'botanist' ),
	    'description' => '',
	    'panel' => 'social_panel_botanist',
	) );
	// Twitter URL
	$wp_customize->add_setting( 'url_field_twitter', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_twitter', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Twitter URL Field', 'botanist' ),
	    'description' => '',
	) );
	// Facebook URL
	$wp_customize->add_setting( 'url_field_fb', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_fb', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Facebook URL Field', 'botanist' ),
	    'description' => '',
	) );
	// Pintrest URL
	$wp_customize->add_setting( 'url_field_pin', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_pin', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Pinterest URL Field', 'botanist' ),
	    'description' => '',
	) );
	// Instagram URL
	$wp_customize->add_setting( 'url_field_inst', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_inst', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Instagram URL Field', 'botanist' ),
	    'description' => '',
	) );

	
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'botanist_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'botanist_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'booking_label', array(
			'selector'        => '.navbar-search-box-icon a',
			'render_callback' => 'botanist_customize_partial_booking_label',
		) );
		$wp_customize->selective_refresh->add_partial( 'footer_phone', array(
			'selector'        => '.footer-address span.footer_phone',
			'render_callback' => 'botanist_customize_partial_footer_phone',
		) );
		$wp_customize->selective_refresh->add_partial( 'footer_address', array(
			'selector'        => '.footer-address span.footer_address',
			'render_callback' => 'botanist_customize_partial_footer_address',
		) );
	}
}
add_action( 'customize_register', 'botanist_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function botanist_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function botanist_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the Booking Label for the selective refresh partial.
 *
 * @return void
 */
function botanist_customize_partial_booking_label() {
	echo get_theme_mod('booking_label');
}
/**
 * Render the Phone and Address for the selective refresh partial.
 *
 * @return void
 */
function botanist_customize_partial_footer_phone(){
	echo get_theme_mod('footer_phone');
}
function botanist_customize_partial_footer_address(){
	echo get_theme_mod('footer_address');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function botanist_customize_preview_js() {
	wp_enqueue_script( 'botanist-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'botanist_customize_preview_js' );
