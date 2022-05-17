( function( $ ) {
    wp.customize( 'button_bg', function( value ) {
		value.bind( function( newval ) {
			$( '.header__button' ).css( 'background-color', newval );
		} );
	} );
      wp.customize( 'color_button_text', function( value ) {
        value.bind( function( newval ) {
            $( '.header__button' ).css( 'color', newval );
        } );
      } );
      wp.customize( 'cd_button_text', function( value ) {
        value.bind( function( newval ) {
          $( '.header__button' ).html( newval );
        } );
      } );
      wp.customize( 'cd_title_text', function( value ) {
        value.bind( function( newval ) {
          $( '.header__title' ).html( newval );
        } );
      } );
      wp.customize( 'cd_subtitle_text', function( value ) {
        value.bind( function( newval ) {
          $( '.header__text' ).html( newval );
        } );
      } );
      wp.customize( 'about_title_text1', function( value ) {
        value.bind( function( newval ) {
          $( '.about__year' ).html( newval );
        } );
      } );
      wp.customize( 'about_subtitle_text1', function( value ) {
        value.bind( function( newval ) {
          $( '.about__text' ).html( newval );
        } );
      } );
      wp.customize( 'about_title_text2', function( value ) {
        value.bind( function( newval ) {
          $( '.about__year' ).html( newval );
        } );
      } );
      wp.customize( 'about_subtitle_text2', function( value ) {
        value.bind( function( newval ) {
          $( '.about__text' ).html( newval );
        } );
      } );
      wp.customize( 'about_title_text3', function( value ) {
        value.bind( function( newval ) {
          $( '.about__year' ).html( newval );
        } );
      } );
      wp.customize( 'about_subtitle_text3', function( value ) {
        value.bind( function( newval ) {
          $( '.about__text' ).html( newval );
        } );
      } );
      wp.customize( 'about_title_text4', function( value ) {
        value.bind( function( newval ) {
          $( '.about__year' ).html( newval );
        } );
      } );
      wp.customize( 'about_subtitle_text4', function( value ) {
        value.bind( function( newval ) {
          $( '.about__text' ).html( newval );
        } );
      } );
      wp.customize( 'provide_title', function( value ) {
        value.bind( function( newval ) {
          $( '.block__title' ).html( newval );
        } );
      } );
      wp.customize( 'provide_subtitle', function( value ) {
        value.bind( function( newval ) {
          $( '.ablock__text' ).html( newval );
        } );
      } );
      wp.customize( 'contact_title', function( value ) {
        value.bind( function( newval ) {
          $( '.block__title' ).html( newval );
        } );
      } );
      wp.customize( 'contact_subtitle', function( value ) {
        value.bind( function( newval ) {
          $( '.ablock__text' ).html( newval );
        } );
      } );
      wp.customize( 'copiright_title', function( value ) {
        value.bind( function( newval ) {
          $( '.footer__text' ).html( newval );
        } );
      } );

   } )( jQuery );
   