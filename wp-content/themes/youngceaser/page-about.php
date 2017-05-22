<?php
the_post();
$videoLink = get_video_link();
/**
 * Template Name: Page About
 * @package WordPress
 *
 */

get_header();
?>

<article id="article" role="main">
    <div id="page-about">
        <div class="page-about-video">
            <div class="inner">
                <h1 class="size-56 border title">Who is <span class="medium">Neil Patel</span>?</h1>

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
                <p></p>
            </div>
            <p></p>
        </div>
        <div class="page-about-btn">
            <div class="inner">
                <p class="btn-wrap">
                    <button class="btn btn-wrr btn-popup-form">Yes, I Want Neil To Help Me Grow My Business!</button>
                </p>
                <div role="form" class="wpcf7" id="wpcf7-f24149-p14040-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/about/#wpcf7-f24149-p14040-o1" method="post" class="wpcf7-form np-form popup-form demo" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="24149">
                            <input type="hidden" name="_wpcf7_version" value="4.7">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f24149-p14040-o1">
                            <input type="hidden" name="_wpnonce" value="f4dd87976a">
                        </div>
                        <fieldset class="fieldset-cf7mls">
                            <p class="size-36 light border title">Let's get <span class="medium red">started...</span></p>
                            <p class="field-p"><span class="wpcf7-form-control-wrap cf-url"><input type="text" name="cf-url" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required field" aria-required="true" aria-invalid="false" placeholder="Website URL"></span></p>
                            <p class="btn-wrap">
                                <button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next">Continue</button>
                            </p>
                        </fieldset>
                        <fieldset class="fieldset-cf7mls">
                            <p></p>
                            <p class="size-36 light border title">What are your <span class="medium red">overall goals?</span></p>
                            <p class="size-18 q q-first">I need help with:</p>
                            <p class="field-p"><span class="wpcf7-form-control-wrap cf-goals"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required wpcf7-exclusive-checkbox field-radio"><span class="wpcf7-list-item first"><label><input type="checkbox" name="cf-goals" value="Getting more traffic"><span class="wpcf7-list-item-label">Getting more traffic</span></label>
                                    </span><span class="wpcf7-list-item"><label><input type="checkbox" name="cf-goals" value="Converting visitors into sales"><span class="wpcf7-list-item-label">Converting visitors into sales</span></label>
                                    </span><span class="wpcf7-list-item last"><label><input type="checkbox" name="cf-goals" value="Both"><span class="wpcf7-list-item-label">Both</span></label>
                                    </span>
                                    </span>
                                    </span>
                            </p>
                            <p class="size-18 q">What's your current monthly marketing budget?</p>
                            <p class="field-p"><span class="wpcf7-form-control-wrap cf-budget"><select name="cf-budget" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required field field-select field-budget" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Under $5000">Under $5000</option><option value="$5000 to $10,000">$5000 to $10,000</option><option value="$10,000 to $50,000">$10,000 to $50,000</option><option value="$50,000 to $100,000">$50,000 to $100,000</option><option value="Above $100,000">Above $100,000</option></select></span></p>
                            <p class="btn-wrap">
                                <button type="button" class="cf7mls_back action-button" name="cf7mls_back">Go Back</button>
                                <button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next">Continue</button>
                            </p>
                        </fieldset>
                        <fieldset class="fieldset-cf7mls">
                            <p></p>
                            <p class="size-36 light border title">How do we get in <span class="nl medium red">touch with you?</span></p>
                            <p class="field-p"><span class="wpcf7-form-control-wrap cf-name"><input type="text" name="cf-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required field" aria-required="true" aria-invalid="false" placeholder="Name"></span></p>
                            <p class="lastname"><span class="wpcf7-form-control-wrap lastname-9811-wrap" style="display:none !important; visibility:hidden !important;"><input class="wpcf7-form-control wpcf7-text" type="text" name="lastname-9811" value="" size="40" tabindex="-1"><span class="hp-message">Please leave this field empty.</span></span>
                            </p>
                            <p class="field-p"><span class="wpcf7-form-control-wrap cf-email"><input type="email" name="cf-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email field" aria-required="true" aria-invalid="false" placeholder="Work Email"></span></p>
                            <p class="field-p"><span class="wpcf7-form-control-wrap cf-phone"><input type="text" name="cf-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required field" aria-required="true" aria-invalid="false" placeholder="Phone number"></span></p>
                            <p class="submit">
                                <input type="submit" value="Reserve Your Confidential Consultation with Neil" class="wpcf7-form-control wpcf7-submit btn btn-wrr">
                            </p>
                            <input type="button" value="Back" class="cf7mls_back action-button" name="cf7mls_back">
                        </fieldset>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div><span id="tve_leads_end_content" style="display: block; visibility: hidden; border: 1px solid transparent;"></span> </article>
<div id="comments">
    <div class="comment-heading">
        <div class="inner">
            <h3 class="entry-subtitle">Comments (<span><?php echo get_comment_pages_count();?></span>)</h3></div>
    </div>




    <?php comments_template('/comments-about.php');?>



</div>
<?php get_footer(); ?>
