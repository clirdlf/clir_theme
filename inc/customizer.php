<?php
/**
 * clir Theme Customizer.
 *
 * @package clir
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function clir_customize_register( $wp_customize ) {
	  $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	  $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	  $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'clir_customize_register' );

function clir_customizer_register( $wp_customize )
{
  global $clir_homepage_sections;

// Do stuff with $wp_customize, the WP_Customize_Manager object.
    $wp_customize->add_panel( 'theme_option', array(
      'priority'    => 220,
      'title'       => __( 'CLIR Options', 'clir'),
      'description' => __( 'CLIR Theme Options', 'clir' )
    ));

    //// Main slider section
     //$wp_customize->add_section('main_slider_category',array(
        //'priority' => 50,
        //'title' => __('Slider Categories','clir'),
        //'description' => __('Select the Slide Category for Homepage.','ultrabootstrap'),
        //'panel' => 'theme_option'
      //));

      //$wp_customize->add_setting('slider_category_display', array(
        //'sanitize_callback' => 'ultrabootstrap_sanitize_category',
        //'default' => ''
      //));

      ////$wp_customize->add_section('welcome_text', array(
          ////'priority' => 60
        ////));

      //$wp_customize->add_section('social_section', array(
        //'priority' => 80,
        //'title' => __('Social Info', 'clir'),
        //'description' => __('Customize your Social Info'),
        //'panel' => 'theme_option'
      //));

}

add_action( 'customize_register', 'clir_customizer_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function clir_customize_preview_js() {
  wp_enqueue_script( 'clir_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
  wp_localize_script( 'clir_customizer', 'clir_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'themurl' => get_template_directory_uri(),
        'btn_documentation' => __('Documentation'),
    )
  );
}
add_action( 'customize_preview_init', 'clir_customize_preview_js' );
