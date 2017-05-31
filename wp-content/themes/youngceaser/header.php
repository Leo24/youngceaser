<?php
/**
 * The template for displaying the header
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
	<meta name="description" content="Advanced: The Simple Process That Works To Turn Ice Cold Prospects Into Happy Customers (w/ Automated Conversion Funnels &amp; Sequences.)">
	<link rel="canonical" href="http://youngceaser.loc/">
	<link rel="dns-prefetch" href="//72gpf1za5iq428ekh3r7qjc1.wpengine.netdna-cdn.com">
	<link rel="stylesheet" id="youngceaser-comments-css" href="<?php echo get_template_directory_uri().'/css/style-comments.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-popup-exit-css" href="<?php echo get_template_directory_uri().'/css/popup-exit.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-popup-webinarjam-css" href="<?php echo get_template_directory_uri().'/css/popup-webinarjam.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-webinar-intro-css" href="<?php echo get_template_directory_uri().'/css/style-webinar-intro.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-source-sans-pro-css" href="<?php echo get_template_directory_uri().'/css/css.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-v2-css" href="<?php echo get_template_directory_uri().'/css/style-v2.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-about-css" href="<?php echo get_template_directory_uri().'/css/style-about.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="cf7mls-css" href="<?php echo get_template_directory_uri().'/css/cf7mls.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="ion-range-slider-css" href="<?php echo get_template_directory_uri().'/css/ion.rangeSlider.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-popup-form-css" href="<?php echo get_template_directory_uri().'/css/popup-form.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-popup-form-css" href="<?php echo get_template_directory_uri().'/css/style-dywmt.css';?>" type="text/css" media="all">
	<link rel="stylesheet" id="youngceaser-popup-form-css" href="<?php echo get_template_directory_uri().'/css/style-contact.css';?>" type="text/css" media="all">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>"/>
	<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/jquery.js';?>"></script>
	<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/jquery-migrate.min.js';?>"></script>
	<style type="text/css">
		div[id^="wpcf7-f27054-p"] button.cf7mls_next {}

		div[id^="wpcf7-f27054-p"] button.cf7mls_back {}

		div[id^="wpcf7-f25350-p"] button.cf7mls_next {}

		div[id^="wpcf7-f25350-p"] button.cf7mls_back {}

		div[id^="wpcf7-f24149-p"] button.cf7mls_next {}

		div[id^="wpcf7-f24149-p"] button.cf7mls_back {}

		div[id^="wpcf7-f20122-p"] button.cf7mls_next {}

		div[id^="wpcf7-f20122-p"] button.cf7mls_back {}

		div[id^="wpcf7-f20121-p"] button.cf7mls_next {}

		div[id^="wpcf7-f20121-p"] button.cf7mls_back {}
	</style>
	<link rel="alternate" href="http://youngceaser.loc/" hreflang="en">
	<link rel="alternate" href="http://youngceaser.loc/br/" hreflang="pt-br">
	<link rel="alternate" href="http://youngceaser.loc/de/" hreflang="de">
	<link rel="alternate" href="http://youngceaser.loc/it/" hreflang="it">
	<link rel="alternate" href="http://youngceaser.loc/es/" hreflang="es">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script>
		var base_path = 'http://youngceaser.loc';
		var template_path = 'http://72gpf1za5iq428ekh3r7qjc1.wpengine.netdna-cdn.com/wp-content/themes/youngceaser';
		var template_version = '1.2.28';
		var admin_path = 'http://youngceaser.loc/wp-admin/';
		var admin_nonce = '4deee48f99';
		var lang = 'en';
		var visitors_title = 'April&#039;s Monthly Visitors';
		var visitors_counter = '628,428';
	</script>
	<meta name="ROBOTS" content="NOODP">
	<meta name="ROBOTS" content="NOYDIR">
	<meta name="google-site-verification" content="">

</head>


<body class="page-template page-template-templates page-template-page_about page-template-templatespage_about-php page page-id-14040 lang-en"
<?php if(is_home()) :?>
	style="margin-top: 0"
<?php endif; ?>
>

<?php if(!(is_home())) :?>
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

<?php endif; ?>