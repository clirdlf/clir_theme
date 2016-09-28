<?php
/**
 * Handle front-end customization
 */

class Clir_Customizer_Front
{
  public function __construct()
  {
    add_action( 'wp_head', array( $this, 'custom_css' ), 200);
  }

  public static function get_palettes()
  {
    $palettes = apply_filters('clir_color_palettes', array(
      'db8f0e' => array( '#db8f0e' ),
      
    ));

    return $palettes;
  }
}
