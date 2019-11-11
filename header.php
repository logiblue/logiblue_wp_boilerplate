<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
	echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
	?>

	<meta name="author" content="Artware">
	<meta name="theme-color" content="">
	<meta name="msapplication-TileColor" content="">
	<meta name="msapplication-navbutton-color" content="">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php echo bloginfo('name'); ?>">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<meta http-equiv="cleartype" content="on">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2, initial-scale=1.0">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="manifest" href="<?php echo bloginfo('wpurl'); ?>/manifest.json">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style.css">

	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/js/simpleLightbox.min.css">
	<script src="<?php echo bloginfo('template_url'); ?>/js/simpleLightbox.min.js"></script>

	<?php if ( !is_page() ) { ?>
	<link rel="stylesheet" id="js_composer_front-css"  href="<?php echo bloginfo('url'); ?>/wp-content/plugins/js_composer/assets/css/js_composer.min.css" type="text/css" media="all">
	<?php } ?>

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->

	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<div href="#0" class="scrollToTop"></div>

<header>

<!--
<div class="header-top">
	<div class="header-top-first">
		<ul>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</ul>
	</div>
	<div class="header-top-second">
		<ul>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</ul>
	</div>
</div>
-->

<div class="header">
	<div class="header-logo">
		<a href="<?php bloginfo('url'); ?>"><img src='http://localhost/artware/wp-content/uploads/2019/11/Artware-logo@4x.png' alt="<?php echo bloginfo('name'); ?>" width="" height="" /></a>
	</div>
	<div class="header-navigation">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</div>
	<div class="header-lang">
		<p class=delete-test-p>EN / GR</p>
		<!-- <?php dynamic_sidebar( 'sidebar-7' ); ?> -->
	</div>
	<div class="header-btn">
		GET STARTED
	</div>
</div>
	
</header>
