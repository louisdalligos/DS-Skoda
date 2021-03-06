<?php
/**
 * ds-skoda Theme Customizer
 *
 * @package ds-skoda
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ds_skoda_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ds_skoda_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ds_skoda_customize_partial_blogdescription',
		) );
	}


	// sections
	$wp_customize->add_section('footer_widgets_section', array(
		'title' => __("Footer Widgets", 'ds-skoda')
	));

	$wp_customize->add_section('footer_social_media_links', array(
		'title' => __("Social Media Links", 'ds-skoda')
	));

	// settings
	$wp_customize->add_setting('site_address', array(
		'default' => __("Add your address here"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('site_contact_number', array(
		'default' => __("Add your contact number here"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('site_email', array(
		'default' => __("Add your email here"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('site_schedule', array(
		'default' => __("Add your business schedule"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('site_about_desc', array(
		'default' => __("Add content of about section"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('facebook_link', array(
		'default' => __("Add your facebook profile"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('twitter_link', array(
		'default' => __("Add your twitter profile"),
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('youtube_link', array(
		'default' => __("Add your youtube profile"),
		'transport' => 'refresh'
	));


	// control
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_address',
		array(
			'label' => __("Address", 'ds-skoda'),
			'section' => 'footer_widgets_section',
			'settings' => 'site_address'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_contact_number',
		array(
			'label' => __("Contact Number", 'ds-skoda'),
			'section' => 'footer_widgets_section',
			'settings' => 'site_contact_number'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_email',
		array(
			'label' => __("Email", 'ds-skoda'),
			'section' => 'footer_widgets_section',
			'settings' => 'site_email'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_schedule',
		array(
			'label' => __("Business Schedule", 'ds-skoda'),
			'section' => 'footer_widgets_section',
			'settings' => 'site_schedule',
			'type' => 'textarea'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_about',
		array(
			'label' => __("About Description", 'ds-skoda'),
			'section' => 'footer_widgets_section',
			'settings' => 'site_about_desc',
			'type' => 'textarea'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_fb_link',
		array(
			'label' => __("Facebook Profile URL", 'ds-skoda'),
			'section' => 'footer_social_media_links',
			'settings' => 'facebook_link'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_twitter_link',
		array(
			'label' => __("Twitter Profile URL", 'ds-skoda'),
			'section' => 'footer_social_media_links',
			'settings' => 'twitter_link'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'theme_footer_youtube_link',
		array(
			'label' => __("Youtube Profile URL", 'ds-skoda'),
			'section' => 'footer_social_media_links',
			'settings' => 'youtube_link'
		)
	));
}
add_action( 'customize_register', 'ds_skoda_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ds_skoda_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ds_skoda_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ds_skoda_customize_preview_js() {
	wp_enqueue_script( 'ds-skoda-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ds_skoda_customize_preview_js' );
