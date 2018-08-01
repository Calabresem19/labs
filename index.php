<?php

	get_header();
?>


	<img id="jumbo-image" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/static/images/finalJumbo.png">


<div class="row statment">
	<div class="center-block">
		<h3 class="text-center "> Willowbrook Labs Provides State Of The Arc Technology Solutions</h3>
	</div>
</div>

<div class="row info-boxes">
	
	<div class=" col-4 offset-1 main-boxes contact-box row"> 
				<h1 class="contact-box-header col-12 text-center">Services</h1>
			<p class="text-center "> Willowbrook Labs offer a variety of digital solutions that help you make your organization more productive. Let us help build your technology infrastructure so you can get back to the important business of running your organization.  </p>
			<h1 id="about-us-link" class="text-center col-12 text-center"><a href="<?php echo(home_url())?>/index.php/about/"> About Us<span style="color:#e29860;">&#10142</span></a> </h1> 
		
	</div>

	<div class=" col-4 offset-2 main-boxes quote-box row" > 
			<h1 class=" quote-box-header col-12 text-center"> Get A Free Quote</h1>

		<p class="text-center col-12 text-center"> Feel free to reach out and get a quote </p>
		<h1 id="contact-us-link" class="text-center col-12 text-center"><a href="<?php echo(home_url())?>/index.php/contact/"> Contact Us<span style="color:#e29860;">&#10142</span></a> </h1> 

	</div>
</div>



<?php get_footer();?>


