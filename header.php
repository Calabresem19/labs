<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head> 
		<title>Willowbrook Labs</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/static/stylesheets/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css">


	</head>
	
	<body>

	<div class = "container-fluid">

	<header class = "site-header">
			<img class="logo offset-1" src="<?php echo get_template_directory_uri() ?>/static/images/WillowbrookLabsLogoSmall.gif">

			<nav class="nav-menu col-3 offset-5">
				<?php

				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

			</nav>

		</header>
	
