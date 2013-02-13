<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<title><?php bloginfo('name');wp_title(); ?></title>
	
 	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width; initial-scale=0.5; maximum-scale=1.0;">
 	<meta name="generator" content="BBEdit 10.1" />
 	<meta name="description" content="Intrator Website and Home of Excessive Technology" />
	<meta name="keywords" content="Audio, B1 Buffer, Preamp, Differential, Intrator, Excessive, Technology, Tom, Gabriel" />
	
	<link rel="icon" href="http://intrator.us/wp-content/images/favicon.png" type="image/x-icon">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head(); ?>
	<?php wp_enqueue_script() ?>
	

</head>

<body>
 
	<div id="wrapper">

		<div id="header">
	
			<img src="<?php echo get_option('home'); ?>/wp-content/images/logo.png" alt="<?php bloginfo('name'); ?>" />
  
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		
		</div>

	<?php wp_nav_menu( array( 
		'sort_column' => 'menu_order',
		'container_class' => 'nav-container',
		'menu_class' => 'nav-list',
		'theme_location' => 'primary-menu',
	) ); ?>