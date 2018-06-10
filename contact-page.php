<?php /* Template Name: CustomPageT1 */ ?>


<?php

	get_header();
?>
<div id="contact-header" class="row">
	<h1 class="center-block"> Contact Us</h1>
</div>


<div id="contact-form-row"  class="row">
	<div id="contact-form" class= "offset-3 col-6 "> 
		
		<div id="message-row" class="row">
			<h3 class="offset-7">Message</h3>		
		</div>
		<div class="row">

			<form>
			Name:<br>
			<input type="text" name="Name"><br>
			Phone Number:<br>
			<input type="text" name="PhoneNumber"><br>
			Email:<br>
			<input type="text" name="Email"><br>
			<input type="text" name="Message"><br>


			

			</form>
		</div>

	</div>
</div>


<?php get_footer();?>
