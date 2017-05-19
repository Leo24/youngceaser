<?php
/**
 * The template for displaying the blog header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(''); ?></title>
	<meta name="robots" content="noodp,noydir">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="dns-prefetch" href="//platform.twitter.com">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//s.w.org">
	<link rel="alternate" type="application/rss+xml" title="Quick Sprout &raquo; Feed" href="https://www.youngceaser.com/feed/">
	<link rel="alternate" type="application/rss+xml" title="Quick Sprout &raquo; Comments Feed" href="https://www.youngceaser.com/comments/feed/">

	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>


	<link rel="stylesheet" id="tm_clicktotweet-css" href="<?php echo get_template_directory_uri().'/blog/css/styles.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="validation_css-css" href="<?php echo get_template_directory_uri().'/blog/css/jquery.validate.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="trulysocial-css" href="<?php echo get_template_directory_uri().'/blog/css/trulysocial.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-yanone-kaffeesatz-css" href="<?php echo get_template_directory_uri().'/blog/css/css.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="child-theme-css" href="<?php echo get_template_directory_uri().'/blog/css/style.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="magnific-popup-css" href="<?php echo get_template_directory_uri().'/blog/css/magnific-popup.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-source-sans-pro-css" href="<?php echo get_template_directory_uri().'/blog/css/css_1.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-source-sans-pro-css" href="<?php echo get_template_directory_uri().'/blog/css/css_2.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-popup-exit-css" href="<?php echo get_template_directory_uri().'/blog/css/popup-exit.css';?>" type="text/css" media="all">

	<link rel="stylesheet" id="youngceaser-v2-css" href="<?php echo get_template_directory_uri().'/css/style-v2.css';?>" type="text/css" media="all">


	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/jquery.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/jquery-migrate.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/jquery.validate.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/widgets.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/jquery.viewport.mini.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/jquery.cookie.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/custom.js';?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/magnific-popup.js';?>"></script>
	<meta name="description" content="Make Better Content">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>"/>

</head>

<body class="blog paged paged-5 header-image content-sidebar">
<div id="wrap">
	<header id="header" role="banner">
		<div class="inner">
			<p class="logo">
				<a href="<?php echo get_home_url(); ?>"><img class="logo-img" src="<?php echo get_header_image(); ?>" width="155" height="17" alt="Neil Patel"></a>
			</p>
			<?php wp_nav_menu( array(
				'menu'       => 'header',
				'menu_class' => 'menu-header',
				'container' => 'nav',
				'container_class' => 'menu-header-nav',
			) );
			?>
		</div>
	</header>

