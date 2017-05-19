<?php
/**
 * The template for displaying the blog footer
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
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_header_image(); ?>" width="155" height="17" alt="Neil Patel"></a>
			</p>
			<p class="copyright">© 2017, YoungCeaser</p>
		</div>
		<?php wp_nav_menu( array(
			'menu_class' => 'menu-footer'
		) );
		?>
	</div>
</footer>

<div id="tve_notification_box"></div>
<script type="text/javascript">
	/* <![CDATA[ */
	jQuery(function() {
		jQuery("#author").validate({
			expression: "if (VAL) return true; else return false;",
			message: "Please Enter your name"
		});

		jQuery("#email").validate({
			expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
			message: "Please Enter Valid Email Address"
		});

		jQuery("#comment").validate({
			expression: "if (VAL) return true; else return false;",
			message: "Please Enter your Comment"
		});

	});

	/* ]]> */
</script>
<!--validation ends-->


<!-- page generated time: 12:32:25 -->
<script type="text/javascript">
	/* <![CDATA[ */
	var np_vars_pe = {
		"popup_exit_title": "From \u201caha\u201d to \u201coh shit\u201d, I\u2019m sharing everything on my journey to <span> 100,000 <\/span> monthly visitors.",
		"popup_exit_description": "I\u2019m learning a lot and so will you.",
		"popup_exit_first_name": "First name",
		"popup_exit_email_address": "Email address",
		"popup_exit_submit": "Send me lessons on traffic building"
	};
	/* ]]> */
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/popup-exit.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/blog/js/wp-embed.min.js';?>"></script>

<?php wp_footer(); ?>

</body>
</html>



