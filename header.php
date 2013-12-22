<html>
<head>
	<title>IdxPro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script tyep="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom-map.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo-wrap">
				<a href="<?php echo get_site_url(); ?>">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				</a>
				<img src="<?php echo get_template_directory_uri(); ?>/images/sub-logo.png" class="sub-logo">
			</div>
			<nav>
				<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
			</nav>
			<div>
			</header>