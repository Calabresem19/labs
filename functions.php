
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




function sendContactEmail(){
	echo("test");

}
function prefix_send_email_to_admin() {
    /**
     * At this point, $_GET/$_POST variable are available
     *
     * We can do our normal processing here
     */ 

    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email
	wp_redirect("http://192.168.0.13/index.php/blog/");
}



add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );

?>
