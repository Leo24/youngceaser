<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$data = get_about_us_page();
get_header(); ?>

<article id="article" role="main">
	<div id="page-about">
		<div class="page-about-video">
			<div class="inner">
				<h1 class="size-56 border title"><?php echo wp_title();?></h1>
				<div class="np-video">
					<div class="video">
						<script src="<?php echo get_template_directory_uri().'/yaiosobwvf.jsonp';?>" async></script>
						<!--						<script src="--><?php //echo get_template_directory_uri().'/js/E-v1.js';?><!--" async></script>-->
						<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
							<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:-28px;width:100%;">
								<div class="wistia_embed wistia_async_yaiosobwvf videoFoam=true" style="height:100%;width:100%">&nbsp;

									<iframe width="100%" height="100%"
											src="<?php echo $data['about_page_video_link'];?>">
									</iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p></p>
			</div>
			<p></p>
		</div>
		<div class="page-about-btn">
			<div class="inner">
			</div>
		</div>
	</div><span id="tve_leads_end_content" style="display: block; visibility: hidden; border: 1px solid transparent;"></span> </article>

<?php get_footer(); ?>
