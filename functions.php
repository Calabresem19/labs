
<?php


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


add_theme_support( 'post-thumbnails' ); 




function test_func() {
	
	echo "this is a test"; 

}

add_theme_support( 'post-thumbnails' );




// Function for shirtiking excerpt is the 4 lines below
function custom_excerpt_length( $length ) {
        return 30;
    }
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>
