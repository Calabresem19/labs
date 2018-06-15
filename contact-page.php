<?php /* Template Name: CustomPageT1 */ ?>


<?php

	get_header();
?>
<div id="contact-header" class="row">
	<h1 class="center-block"> Contact Us</h1>
</div>


<div id="contact-form-row"  class="row">
	<div id="contact-form" class= "offset-2 col-8 "> 
		
		<div id="message-row" class="row">
			<h3 class="center-block">Message</h3>		
		</div>
		<div class="row">

			<form class="col-12">
				<div class="row">
					<div class="col-5">
						<div id="name-div" class="form-divs">
							<label class="col-3 ">Name:</label>
							<input class="col-6 "type="text" name="Name"><br>
						</div>
						<div id="phone-div" class="form-divs">
							<label class="col-3 ">Phone:</label>
							<input class="col-6" type="text" name="PhoneNumber"><br>
						</div>
						<div id="email-div" class="form-divs">
							<label class="col-3 ">Email:</label>
							<input class="col-6 " type="text" name="Email"><br>
						</div>
					</div>	
					<div id="message-input" class="col-7 ">
						<div class="row">
							<textarea rows="12" class="col-11" name="Message" ></textarea>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>

<div class="row">
	<div id="button-div" class="center-block">
		<button id="send-button" class="btn btn-primary" type="button center">Send</button>	
	</div>
</div>



<?php get_footer();?>
