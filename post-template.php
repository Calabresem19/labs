<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post
 */
  
 get_header();  ?>

<div class="row">
	<div class=" col-8 center-block">

		<?php while(have_posts()) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>

	</div>

</div>

<?php get_footer(); ?>
