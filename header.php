<!DOCTYPE html>
	<!--[if lt IE 7]>
	<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> 
	<![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> 
	<![endif]-->
	<!--[if IE 8]>
	<html class="no-js lt-ie9" <?php language_attributes(); ?>> 
	<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta content="index, follow" name="robots">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/javascripts/slick-carousel/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/javascripts/pixelperfect/src/pixel-perfect.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/css3pie/PIE.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/respond/dest/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/modernizr/modernizr.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="banner-header" role="banner">
			<div class="container">
				<div class="navbar-header float-left">
					<button data-target=".nav-main, .nav-extras" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" /></a>
					</div>
				</div>
				<div class="float-right">
					<nav role="navigation" class="nav-main navbar-collapse collapse">
						<?php
							wp_nav_menu( array(
							  'menu' => 'top_menu',
							  'depth' => 2,
							  'container' => false,
							  'menu_class' => 'nav',
							  'walker' => new wp_bootstrap_navwalker())
							);
						?>
					</nav>
					<div class="fb-btn">
					  <a href="" class="btn btn-fb"><i class="fa fa-facebook"></i>Visit our fanpage</a>
					</div>
				</div>
			</div>
		</header>