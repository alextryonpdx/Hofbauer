<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon"> -->
        <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" type="image/x-icon">

		<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

		<!-- bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" type='text/css' href="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.css">
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/gmap3.min.js"></script>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scrollreveal.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>

		<link rel="stylesheet" type='text/css' href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fonts.css">
		<link rel="stylesheet" type='text/css' href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<link rel="stylesheet" type='text/css' href="<?php echo get_stylesheet_directory_uri(); ?>/custom.css">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_stylesheet_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<!-- <div class="wrapper"> -->

			<!-- header -->
			<header class="header">

				<nav class="nav gradient centered" role="navigation">
					<a class="homelink menuLogo smoothScroll" href="#home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-bw.svg" alt="Logo" class="logo-img grey">
							<div id="menuTitle">
								<h1><?php the_field('heading', 5); ?></h1>
								<h2><?php the_field('subheading', 5); ?></h2>
							</div>
						</a>
					<a id="close-menu" class="smoothScroll" onclick="hideMenu()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/x-icon.png"></a>
					<?php wp_nav_menu(array('menu'=>'main')); ?>
				</nav>

				<div class="row" id="phonebar"><a href="tel:+15034749888">503.474.9888</a></div>

				<div class="row menu-row">
					<div class="col-md-1"></div>
					<div class="col-md-1">
						<a id="show-menu" onclick="showMenu()">
							<div id="burger">
								<div id="burger1"></div>
								<div id="burger2"></div>
								<div id="burger3"></div>
								<p>MENU</p>
							</div>
						</a>
					</div>
					<div class="col-md-8 centered">
						
						<a class="smoothScroll topLogo" href="#home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-color.png" alt="Logo" class="logo-img color">
							<div id="topTitle">
								<h1><?php the_field('heading', 5); ?></h1>
								<h2><?php the_field('subheading', 5); ?></h2>
							</div>
						</a>
					</div>
					<div class="col-md-2"></div>
				</div>

			</header>
			<!-- /header -->

