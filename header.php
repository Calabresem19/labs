<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head> 
		<title>Willowbrook Labs</title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/static/stylesheets/css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css">


	</head>
	
	<body>

	<div class = "container">

	<header class = "site-header">
			<img class="col-4" src="<?php echo get_template_directory_uri() ?>/static/images/WillowBrookLabsLogo.png">

			<nav class="nav-menu">
				<?php

				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				<?php wp_nav_menu($args) ?>
			</nav>

		</header>
	
