	<footer class = "site-footer">

	</footer>

	<div>
	<footer class="row">


		<div class="col-2"> 
			<p> Willowbrook Labs </p>
			<p> Phone Number</p>
			<p> xxx-xxx-xxxx</p>
		</div>
			<nav class=" col-2 offset-7 nav-menu-footer">
				<?php

				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				<?php wp_nav_menu($args) ?>
			</nav>


	</footer>
	</body>
</html>
