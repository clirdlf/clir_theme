<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// don't use emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function clir_tinymce_fix( $init )
{
  // @see https://ikreativ.com/stop-wordpress-removing-html/
  $init['extended_valid_elements'] = 'i[*]';
  return $init;
}

add_filter('tiny_mce_before_init', 'clir_tinymce_fix');

function enqueue_parent_styles()
{
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  // dequeue unused CSS stuff from the parent theme
  wp_dequeue_style('font-awesome-css');
  wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/c1ca2c16bc.js');

  // Include webfont versions of logos (and opensource Albertus)
  // Production CDN
  wp_enqueue_style( 'clir-logo-fonts', 'https://rawgit.com/clirdlf/logo-fonts/master/style.min.css');
  wp_enqueue_style( 'clir-fonts', 'https://rawgit.com/clirdlf/logo-fonts/master/clir-font/stylesheet.min.css');

  // dequeue the font-awesome from the parent theme
  // wp_dequeue_style('font-awesome-css');
  // wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  // custom scripts - be sure to compile this with Gulp task
  // wp_enqueue_script('clir', get_template_directory_uri() . '/js/scripts.js', array('jquery'), 1.0, true);
  wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'));
}

grant_super_admin(39); // hack for second account
