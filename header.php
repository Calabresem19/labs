<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head> 
		<title>Willowbrook Labs</title>
		<link rel="stylesheet" type="text/css" src="<?php echo get_template_directory_uri() ?>/static/stylsheets/css/bootstrap.css">
	</head>
	
	<body>

	<div class = "container">
	
		<header class = "site-header">
			<img src="<?php echo get_template_directory_uri() ?>/static/images/WillowBrookLabsLogo.png">
			<img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-footer-callout-image')) ?>>

			<?php echo wp_get_attachment_url(get_theme_mod('WillowBrookLabsLogo.png')) ?>"



			<nav class="site-nav">
				<?php

				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				<?php wp_nav_menu($args) ?>
			</nav>

		</header>
	
