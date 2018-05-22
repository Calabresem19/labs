	<footer class = "site-footer row">




		<div class="social-media col-5 row "> 
			<p class="Follow-Us col-1"> FOLLOW US | </p>
			<ul class="social-media col-2">
				<li> <a href="#">TWITTER</a> </li>
				<li> <a href="#">INSTAGRAM</a> </li>
			</ul>
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
