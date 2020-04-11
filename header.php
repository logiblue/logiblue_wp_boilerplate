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
	<div class="nh">

	<div class="nh-lef">
		<div class="nh-logo">
			<span class="nh-logo-big">K</span>
			<span class="nh-logo-small">K</span>
		</div>
	</div>
	<div class="nh-rig">
		<h3>Konstantinos Karanikolas</h3>
		<p class="nh-rig-txt">
		I enjoy working with web. Building things that works and looks is my passion. I’m currently part of the Artware Digital agency and on the afternoon I'm doing my side projects that’s been postponed for years. In coclusion, that’s not an another technical blog but just a corner that timeline's my findings and thoughts.or just sharing my pinch of knowledge.</p>
	</div>
</div>
<div class="header-container">
	<div class="header-left">&rarr;</div>
	<div class="header-right">
		<?php wp_nav_menu(); ?>
	</div>
</div>

</header>
