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
			set_post_thumbnail_size( 1200, 1200); 
			the_post_thumbnail();
		} ?>


		<?php the_content();?>
		<?php endwhile; ?>

	</div>

		<h1 id="contact-us-link" class="text-center col-12 text-center"><a href="<?php echo(home_url())?>/index.php/contact/"> Contact Us<span style="color:#e29860;">&#10142</span></a> </h1> 
</div>

<?php get_footer(); ?>
