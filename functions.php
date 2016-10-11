<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  // Include webfont versions of logos (and opensource Albertus)
  // dev cdn
  // https://clirdlf.github.io/logo-fonts/style.css.min
  wp_enqueue_style( 'clir-logo-fonts', 'https://rawgit.com/clirdlf/logo-fonts/master/style.min.css');
  wp_enqueue_style( 'clir-fonts', 'https://rawgit.com/clirdlf/logo-fonts/master/clir-font/stylesheet.min.css');
  //wp_enqueue_style( 'font-awesome-animation', get_stylesheet_directory_uri() . '/stylesheets/vendor/font-awesome-animation.min.css' );
  // Production CDN
  //wp_enqueue_style( 'clir-fonts', 'https://cdn.rawgit.com/clirdlf/logo-fonts/master/clir-font/stylesheet.min.css');
}






