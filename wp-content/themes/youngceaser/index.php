<?php
$aboutUsInfo = get_about_us_info();
$videoLink = get_video_link();
$steps = get_marketing_steps();

get_header();
?>



<article id="article" role="main">
	<div id="page-home">
		<div class="bg-g page-home-s page-home-header">
			<div class="inner"><img class="logo" src="<?php echo get_header_image(); ?>" width="217" height="24" alt="Neil Patel">
				<p class="size-22 description clock">Training Starts in: <span class="red counter">14 Minutes and 59 Seconds</span></p>
				<p class="size-56 light border heading">How to generate <span class="medium">195,013 visitors</span> a month <span class="medium">without spending</span> a dollar on ads</p>
				<div class="np-video">
					<div class="video">
						<script src="<?php echo get_template_directory_uri().'/yaiosobwvf.jsonp';?>" async></script>
<!--						<script src="--><?php //echo get_template_directory_uri().'/js/E-v1.js';?><!--" async></script>-->
						<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
							<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:-28px;width:100%;">
								<div class="wistia_embed wistia_async_yaiosobwvf videoFoam=true" style="height:100%;width:100%">&nbsp;

									<iframe width="100%" height="100%"
											src="<?php echo $videoLink['video_link'];?>">
									</iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="btn-wrap">
					<button class="btn btn-wrr btn-wj-exit" title="regpopbox_20948_96ca13d3f6">YES, I WANT NEIL TO TEACH ME HOW TO GROW MY BUSINESS!</button>
				</p>
				<p class="size-22 clock">Online Training Starts in: <span class="red medium counter">14 Minutes and 59 Seconds</span></p>
			</div>
		</div>
		<div class="page-home-s page-home-about">
			<div class="inner">
				<p class="size-48 light border heading">Who is Neil Patel?</p>
				<p class="size-16 text">He is a New York Times best selling author. The Wall Street Journal calls him a top influencer on the web, Forbes says he is one of the top 10 marketers, and Entrepreneur Magazine says he created one of the 100 most brilliant companies. He was recognized as a top 100 entrepreneur under the age of 30 by President Obama and a top 100 entrepreneur under the age of 35 by the United Nations.</p>
				<p class="btn-wrap">
					<button class="btn btn-wrr" title="regpopbox_20948_96ca13d3f6">YES, RESERVE MY SEAT NOW!</button>
				</p>
				<p class="size-16 medium clock">Training starts in: <span class="red counter">14 Minutes and 59 Seconds</span></p>
			</div>
		</div>
		<div class="page-home-s page-home-steps">
			<div class="inner">
				<p class="size-36 border light heading">Ready to <span class="medium">start learning marketing</span>?
					<br> Just follow the 4 steps below&#8230;</p>
				<ol class="list">

					<?php foreach($steps as $step):?>
						<li class="list-item">
							<p class="size-20 medium red title"><?php echo $step['step_title'];?></p>
							<p class="text"><?php echo $step['step_content'];?></p>
							<p class="btn-wrap"><a class="btn btn-rwr" href="<?php echo $step['button_href'];?>"><?php echo $step['text_for_button'];?></a></p>
						</li>
					<?php endforeach;?>
				</ol>
			</div>
		</div>
	</div><span id="tve_leads_end_content" style="display: block; visibility: hidden; border: 1px solid transparent;"></span></article>

<?php get_footer(); ?>