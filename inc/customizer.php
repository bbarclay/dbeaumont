<?php
/**
 * dale_beaumont Theme Customizer support
 *
 * @package dale_beaumont
 * @since 1.0
 */

function daleb_register_custiomizer_controls( $wp_customize ) {
	$wp_customize->add_section( 'footer' , array(
		'title'    => 'Footer',
		'priority' => 110,
	) );

	$wp_customize->add_setting( 'footer_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'    => 'Logo',
		'section'  => 'footer',
		'settings' => 'footer_logo',
	) ) );

	$wp_customize->add_setting( 'signup_form_footer_title' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'signup_form_footer_title', array(
		'label'    => 'Signup Form Title',
		'type'     => 'text',
		'section'  => 'footer',
		'settings' => 'signup_form_footer_title',
	) ) );

	$wp_customize->add_setting( 'signup_form_footer_description' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'signup_form_footer_description', array(
		'label'    => 'Signup Form Description',
		'type'     => 'text',
		'section'  => 'footer',
		'settings' => 'signup_form_footer_description',
	) ) );

	$wp_customize->add_setting( 'signup_form_footer' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'signup_form_footer', array(
		'label'    => 'Signup Form Code',
		'type'     => 'textarea',
		'section'  => 'footer',
		'settings' => 'signup_form_footer',
	) ) );

	$wp_customize->add_setting( 'footer_tagline' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_tagline', array(
		'label'    => 'Tagline',
		'type'     => 'text',
		'section'  => 'footer',
		'settings' => 'footer_tagline',
	) ) );
}
