<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post
 */
  
 get_header();  ?>

<div class="row">
	<div id="article" class=" col-8 center-block">

		<?php while(have_posts()) : the_post(); ?>
		<h1 id="article-title"><?php the_title();?></h1>

		<hr>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?>


		<?php the_content();?>
		<?php endwhile; ?>

	</div>

</div>

<?php get_footer(); ?>
