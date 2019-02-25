$( document ).scroll(function() {
	fixNav();
	$( '#nav-menu' ).removeClass( 'open' );
});
$( window ).resize(function(){
	fixNav();
});

fixNav();

$( '.post-load' ).each( function(){
	console.log( $( this ) );
	$( this ).css( 'background-image', 'url("/img/' + $( this ).data( 'background' ) + '")');
});

$( '#nav-toggle' ).on( 'click', function(){
	$( '#nav-menu' ).toggleClass('open');
});
$( '#wrapper' ).on( 'click', function(){
	if( $( '#nav-menu' ).hasClass( 'open' ) ) {
		$( '#nav-menu' ).removeClass( 'open' );
	}
});

function fixNav() {
  if( $( document ).scrollTop() > 50 && $( window ).width() < 750 ) {
    $( 'nav' ).addClass( 'shrink' );
  } else {
    $( 'nav' ).removeClass( 'shrink' );
  }
}