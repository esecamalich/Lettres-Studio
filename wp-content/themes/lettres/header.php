<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
		<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- HEADER -->
		<header class="main-header" style="background-image: url(<?php the_field('header-background'); ?>);">
			<a href="index.php" class="main-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-lettres.png" alt="Lettres Studio" />
			</a>
			<?php
			
			$defaults = array(
				'theme_location'  => 'primary',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => 'main-nav',
				'container_id'    => '',
				'menu_class'      => 'nav-list',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			
			wp_nav_menu( $defaults );
			
			?>
				<hgroup class="header-intro sec-header">
					<h1><?php the_field('heading-principal'); ?></h1>
					<h2><?php the_field('heading-secundario'); ?></h2>
				</hgroup>
		</header>
		<!-- /HEADER -->