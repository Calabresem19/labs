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
//	print phpinfo();

	$msg = "Name: " .$_POST['Name'] ."\n"
		."Email: " .$_POST['Email'] ."\n"
		."Phone Number: " .$_POST['PhoneNumber'] ."\n"
		."Message: " .$_POST['Message'] ;

	$headers = 'From: webmaster@example.com' ;


	ini_set('display_errors',1);


	$success = mail('mikeclbrs@gmail.com', 'Lead', $msg, $headers, "-t");
//	$success = mail('mikeclbrs@gmail.com', 'Lead', $msg );

	if (!$success) {
	    $errorMessage = error_get_last()['message'];
		echo($errorMessage);	
	}
	
	echo($success );
//	wp_redirect(site_url());
}


add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );
