/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

  // TODO: this isn't getting appended correctly
  $('#customize-theme-controls > ul').append('<li id="accordion-section-documentation" class="accordion-section control-section control-section-alchem-documentation" style="display: list-item;padding: 10px 10px 20px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;background: #fff;"><a href="https://clirdlf.github.io/clir_theme" target="_blank" class="">'+clir_params.btn_documentation+'</a></li>');

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
  } );

  // Documentation

} )( jQuery );
