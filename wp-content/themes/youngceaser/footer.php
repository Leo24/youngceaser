<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer id="footer" role="contentinfo">
	<div class="inner">
		<div class="author">
			<p class="logo">
				<a href="http://youngceaser.loc/"><img src="<?php echo get_header_image(); ?>" width="155" height="17" alt="Neil Patel"></a>
			</p>
			<p class="copyright">&copy; 2017, by I'm Kind of a Big Deal, LLC</p>
		</div>
		<?php wp_nav_menu( array(
			'menu_class' => 'menu-footer'
		) );
		?>
	</div>
</footer>
<div id="tve_notification_box"></div>

<script type="text/javascript">
	document.getElementsByTagName('body')[0].className += ' spp'
</script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/form.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/paypal-ipn-for-wordpress-public-bn.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/jquery.form.min.js';?>"></script>
<script type="text/javascript">
	var _wpcf7 = {
		"recaptcha": {
			"messages": {
				"empty": "Please verify that you are not a robot."
			}
		},
		"cached": "1"
	};
</script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/scripts.js';?>"></script>
<!--<script type="text/javascript" defer="defer" src="--><?php //echo get_template_directory_uri().'/js/script-comments.js';?><!--"></script>-->
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/comment-reply.min.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/jquery.magnific-popup.min.js';?>"></script>
<script type="text/javascript">
//	var np_vars_pe = {
//		"popup_exit_title": "From \u201caha\u201d to \u201coh shit\u201d, I\u2019m sharing everything on my journey to <span> 100,000 <\/span> monthly visitors.",
//		"popup_exit_description": "I\u2019m learning a lot and so will you.",
//		"popup_exit_first_name": "First name",
//		"popup_exit_email_address": "Email address",
//		"popup_exit_submit": "Send me lessons on traffic building"
//	};
</script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/popup-exit.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/popup-webinarjam-bundles.min.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/popup-webinarjam.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/jquery.tooltipster.min.js';?>"></script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/script-tooltipster.js';?>"></script>
<script type="text/javascript">
	var np_vars = {
		"seo_analyzer_dont_compare": "Don\u2019t Compare Pages"
	};
</script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/script.js';?>"></script>
<script type="text/javascript">
//	var cf7mls_object = {
//		"ajax_url": "http:\/\/neilpatel.com\/wp-admin\/admin-ajax.php",
//		"cf7mls_error_message": "",
//		"scroll_step": ""
//	};
</script>
<!--<script type="text/javascript" defer="defer" src="--><?php //echo get_template_directory_uri().'/js/cf7mls.js';?><!--"></script>-->
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/ion.rangeSlider.min.js';?>"></script>
<script type="text/javascript">
	var np_vars_pf = {
		"step_1_title": "Get Started",
		"step_2_title": "Your Goals",
		"step_3_title": "About You",
		"go_back": "Go Back"
	};
</script>
<script type="text/javascript" defer="defer" src="<?php echo get_template_directory_uri().'/js/popup-form.js';?>"></script>
<script type="text/javascript">
//	if (!window.TL_Const) var TL_Const = {
//		"security": "8d6b7fbe6a",
//		"ajax_url": "\/\/neilpatel.com\/wp-admin\/admin-ajax.php",
//		"forms": [],
//		"action_conversion": "tve_leads_ajax_conversion",
//		"action_impression": "tve_leads_ajax_impression",
//		"ajax_load": 1,
//		"custom_post_data": {
//			"http_referrer": "http:\/\/neilpatel.com\/v2\/?utm_expid=32141967-3.3z7c8mZcTgqcxN-KQ-mCHA.1&utm_referrer=https%3A%2F%2Fwww.google.co.jp%2F"
//		},
//		"current_screen": {
//			"screen_type": 3,
//			"screen_id": 14040
//		},
//		"ignored_fields": ["email", "_captcha_size", "_captcha_theme", "_captcha_type", "_submit_option", "_use_captcha", "g-recaptcha-response", "__tcb_lg_fc", "__tcb_lg_msg", "_state", "_form_type", "_error_message_option", "_back_url", "_submit_option", "url", "_asset_group", "_asset_option", "mailchimp_optin"]
//	}
</script>

<?php wp_footer(); ?>

</body>
</html>

