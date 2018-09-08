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
		<div id="about-paragraph">
			<?php the_content();?>
		</div>
	</div>

	<div class="row offset-1 col-10 " id="about-image-row">
		<img id="business-image" class="img-fluid col-5" src="<?php echo get_template_directory_uri() ?>/static/images/class-start.jpg">
		<h1 id="work-with-you"  class=" offset-1 col-6 text-center "> WE WANT TO WORK WITH YOU </h1>
	</div>

	<?php endwhile; ?>

	</div>

	<div id="about-paragraph2" class="row offset-1 col-10">
		<h1> What to Expect </h1>	
		<p> At Willowbrook Labs we will commit ourselves fully to creating your product and developing it to its full potential. We pride ourselves on transparency and trustworthiness. Strong ethics help guide us through the thick and the thin. This commitment to excellence is the bedrock foundation on how we treat our customers, employees, and community members. </p>
	</div>

	<div class="row offset-1 col-10" >
		<h1 id="contact-us-link" class="text-center col-12 text-center"><a href="<?php echo(home_url())?>/index.php/contact/"> Contact Us<span style="color:#e29860;">&#10142</span></a> </h1> 	
	</div>




</div>
<?php get_footer() ?>
