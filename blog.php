

<?php /* Template Name: Blog*/ ?>

<?php get_header() ?>


<div class="row">
	<div id="posts" class="center-block">
		<?php
		    $args = array(
			'post_type' => 'post'
		    );

		    $post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
			  while($post_query->have_posts() ) {
			    $post_query->the_post();
			    ?>
			    <h2><?php the_title(); ?></h2>
			    <?php
				  }
			}
		?>
	</div>
</div>





<?php get_footer() ?>
