<?php
/**
 * StarTechNow Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Theme Setup
function startechnow_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
    add_theme_support( 'menus' );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'startechnow' ),
    ));
}
add_action( 'after_setup_theme', 'startechnow_setup' );

// Enqueue Styles & Scripts
function startechnow_scripts() {
    wp_enqueue_style( 'startechnow-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );
    wp_enqueue_script( 'startechnow-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'startechnow_scripts' );

// Customizer Settings
function startechnow_customize_register( $wp_customize ) {
    // Contact Info Section
    $wp_customize->add_section( 'startechnow_contact', array(
        'title'    => __( 'Contact Information', 'startechnow' ),
        'priority' => 30,
    ));

    $fields = array(
        'phone'   => array( 'label' => 'Phone Number',   'default' => '+92 321 1354428' ),
        'email'   => array( 'label' => 'Email Address',  'default' => 'info@startechnow.com' ),
        'website' => array( 'label' => 'Website URL',    'default' => 'www.startechnow.com' ),
    );

    foreach ( $fields as $key => $field ) {
        $wp_customize->add_setting( 'startechnow_' . $key, array( 'default' => $field['default'], 'sanitize_callback' => 'sanitize_text_field' ));
        $wp_customize->add_control( 'startechnow_' . $key, array(
            'label'   => $field['label'],
            'section' => 'startechnow_contact',
            'type'    => 'text',
        ));
    }
}
add_action( 'customize_register', 'startechnow_customize_register' );

// Helper: get contact info
function stn_get( $key, $default = '' ) {
    return get_theme_mod( 'startechnow_' . $key, $default );
}
