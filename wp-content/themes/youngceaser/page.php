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

				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</div>
		<div class="page-about-btn">
			<div class="inner">
			</div>
		</div>
	</div><span id="tve_leads_end_content" style="display: block; visibility: hidden; border: 1px solid transparent;"></span> </article>

<?php get_footer(); ?>
