/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

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
	// Booking Label.
	wp.customize( 'booking_label', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-search-box-icon a' ).text( to );
		} );
	} );
	// Phone in Footer.
	wp.customize( 'footer_phone', function( value ) {
		value.bind( function( to ) {
			$( '.footer-address span.footer_phone' ).text( to );
		} );
	} );
	// Address in Footer.
	wp.customize( 'footer_address', function( value ) {
		value.bind( function( to ) {
			$( '.footer-address span.footer_address' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
