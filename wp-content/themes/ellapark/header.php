<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css" type="text/css">
	<script type="text/javascript" href="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php // Site header ?>
	<header>
		<div class="container">
			<div class="row">
				
				<?php // Logo ?>
				<div class="col-sm-5 col-xs-12 header-logo">
					<a href="<?php echo home_url(); ?>">Ellapark Elkonsult AB</a>
				</div>

				<?php // Menu ?>
				<nav class="col-sm-7 hidden-xs text-right">
					<?php
						wp_nav_menu( array(
						    'theme_location' => 'main_nav',
						    'container' > 'ul'
						) );
					?>
				</nav>
			</div>
		</div>
	</header>
	<main>
