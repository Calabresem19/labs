
<?php


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


add_theme_support( 'post-thumbnails' ); 




function test_func() {
	
	echo "this is a test"; 

}



function grapPostFunc() {
					    $args = array(
						'post_type' => 'post',
						'orderby' => 'data'
					    );

					    $post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
						    $post_query->the_post();

							if ($post_query->current_post == 2){ ?>
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
							<?php }

						    ?>

						    <?php
							  }
						}


}
	




?>
