<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
	echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
	?>
	<meta name="author" content="karanikolas">
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
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>


<header>

<div class="header-container">
	<div class="header-left">
		<a href= "<?php bloginfo('url'); ?>">
		<svg width="334" height="208" viewBox="0 0 334 208" fill="none" xmlns="http://www.w3.org/2000/svg">
		<ellipse cx="105.5" cy="104" rx="105.5" ry="104" fill="white"/>
		<ellipse cx="105.5" cy="104" rx="50.5" ry="49" fill="black"/>
		<ellipse cx="283.5" cy="104" rx="50.5" ry="49" fill="white"/>
		</svg>
		</a>
	</div>
	<div class="header-right">
		<?php wp_nav_menu(); ?>
	</div>
</div>

</header>
