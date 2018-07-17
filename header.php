<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head> 
		<title>Willowbrook Labs</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/static/stylesheets/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css">


	</head>
	
	<body>

	<div class = "container-fluid">
			<header class = "site-header row">
				<div class="offset-1 col-1">
					<a href="<?php echo get_home_url(); ?>"><img class="logo " src="<?php echo get_template_directory_uri() ?>/static/images/WillowbrookLabsLogoSmall.gif"></a>
				</div>
				<nav class="nav-menu col-md-5 col-lg-4  offset-md-5 offset-lg-6">
					<?php

					$args = array(
						'theme_location' => 'primary'
					);
					
					?>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

				</nav>

			</header>
