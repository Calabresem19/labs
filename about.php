<?php /* Template Name: About*/ ?>


<?php get_header() ?>
<div id="about-wrapper" class= "center-block">
<div class="row">
	<div class="about-title offset-3 col-6 text-center">
		<h1>Building Your Products of the Future</h1>
	</div>
</div>




<div id="about-info" class="row ">
	<div class="offset-1 col-10 row ">
		<?php while(have_posts()) : the_post(); ?>
		<div id="about-paragraph"><?php the_content();?></div>
	</div>
		<div class="row offset-1 col-10 " id="about-image-row">
			<img id="business-image" class="img-fluid col-5" src="<?php echo get_template_directory_uri() ?>/static/images/class-start.jpg">
			<h1 id="work-with-you"  class=" offset-1 col-6 text-center "> WE WANT TO WORK WITH YOU </h1>
		</div>
		<?php endwhile; ?>

		<div class="row offset-1 col-10" >
			<h1 id="contact-us-link" class="text-center col-12 text-center"><a href="<?php echo(home_url())?>/index.php/contact/"> Contact Us<span style="color:#e29860;">&#10142</span></a> </h1> 	
		</div>

</div>
<?php get_footer() ?>
