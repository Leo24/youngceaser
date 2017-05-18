<?php
/**
 * Template Name: Blog Page
 * @package WordPress
 */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US" prefix="og: http://ogp.me/ns#">

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Quick Sprout Blog by Neil Patel</title>
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

    <div id="inner">
        <div id="content-sidebar-wrap">
            <div id="content" class="hfeed">


                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'category'         => '',
                    'category_name'    => 'blog',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'author'	   => '',
                    'author_name'	   => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true
                );
                $posts_array = get_posts( $args ); ?>

                <?php if ( !empty($posts_array) ): ?>
                    <?php foreach($posts_array as $post): ?>

                        <div class="post type-post status-publish format-standard hentry category-general entry">
                            <h2 class="entry-title"><a href="<?php echo get_permalink( $post->ID );?>" rel="bookmark"><?php echo $post->post_name; ?></a></h2>
                            <div class="post-info">by <span class="author vcard"><span class="fn"><?php echo get_the_author_meta('display_name', $post->post_author); ?> </span></span> on <span class="date published time" title="2017-03-10T12:30:43+00:00"><?php echo $post->post_date; ?></span> </div>
                            <div class="entry-content">
                                <div class="trulysocial-horizontal"></div>

                                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $post->post_title; ?>">
                                <?php endif; ?>

                                <?php echo get_the_excerpt($post); ?>
                                <?php echo wpse69204_excerpt( $num_words = 50, $ending = '...', $post_id = $post->ID ); ?>

                            </div>
                            <div class="post-meta"><span class="post-comments"><a href="<?php echo get_comments_link( $post->ID  );?>"><?php echo get_comments_number( $post->ID  );?> Comments</a></span>
                                <div class="clear"></div>
                            </div>
                        </div>

                    <?php endforeach;?>
                <?php endif;?>

<!--                <div class="navigation">-->
<!--                    <ul>-->
<!--                        <li class="pages">Page 5 of 187</li>-->
<!--                        <li class="arrow"><a href="https://www.youngceaser.com/blog/page/4/">&laquo;</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/">1</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/2/">2</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/3/">3</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/4/">4</a></li>-->
<!--                        <li class="active"><a href="https://www.youngceaser.com/blog/page/5/">5</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/6/">6</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/7/">7</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/8/">8</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/9/">9</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/10/">10</a></li>-->
<!--                        <li class="dots">&hellip;</li>-->
<!--                        <li class="arrow"><a href="https://www.youngceaser.com/blog/page/6/">&raquo;</a></li>-->
<!--                        <li><a href="https://www.youngceaser.com/blog/page/187/">Last &raquo;</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
            <div id="sidebar" class="sidebar widget-area">
                <div id="featurebox-widget-2" class="widget featurebox">
                    <div class="widget-wrap">
                        <div class="optin-form">

                            <h3><strong>Free Course:</strong> "Double Your Traffic<br> in 30 Days" <strong>+ Secret Bonus</strong> <br> (Valued at $300)</h3>

                            <div class="optin-area">
                                <img style="margin-right: 10px" src="<?php echo get_template_directory_uri().'/blog/images/product.png';?>" width="118" height="91" alt="Product" class="alignleft">This amazing course will teach you, step by step, how to double if not triple your traffic over the next 30 days.
                                <p></p>
                                <div class="form-area">
                                    <h4>Fill out the form below to<br> start your FREE Course</h4>
                                    <form action="http://app.maropost.com/accounts/253/forms/1316/subscribe/ac5ca6d7a3d102e0de734c55e121b35493353138" onsubmit="pageTracker._trackEvent('Maropost', 'Sidebar-Email');" method="post">

                                        <p>

                                            <label for="from">Email</label>

                                            <input name="contact_fields[email]" type="email" value="" id="from" required>

                                        </p>

                                        <p>

                                            <input name="commit" type="submit" class="submit" value="">

                                        </p>

                                        <input name="commit" type="submit" class="send" value="Yes, Let's Start The Free Course">

                                        <span class="privacy">100% Privacy. I will never spam you!</span>

                                    </form>
                                </div>
                            </div>

                            <div class="shadow"></div>

                        </div>

                    </div>
                </div>
                <div id="text-2" class="widget widget_text">
                    <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">About Neil Patel</h4>
                        <div class="textwidget">
                            <p><img src="images/neilpatelsidebar.jpg" width="300" height="239" style="float: left; margin: 0 10px 10px 0;"></p>
                            <p>Neil Patel is a New York Times best selling author. He is the co-founder of <a href="http://www.crazyegg.com">Crazy Egg</a> and <a href="http://www.hellobar.com">Hello Bar</a> and he helps companies like Amazon, NBC, GM, HP and Viacom grow their revenue. The Wall Street Journal calls him a top influencer on the web, Forbes says he is one of the top 10 online marketers, and Entrepreneur Magazine says he created one of the 100 most brilliant companies in the world. He was recognized as a top 100 entrepreneur under the age of 30 by President Obama and one of the top 100 entrepreneurs under the age of 35 by the United Nations. Neil has also been awarded Congressional Recognition from the United States House of Representatives. <a href="http://www.youngceaser.com/about/">Continue reading</a></p>
                        </div>
                    </div>
                </div>
                <div id="text-3" class="widget widget_text">
                    <div class="widget-wrap">
                        <div class="textwidget">
                        </div>
                    </div>
                </div>
                <div id="populartabs-widget-2" class="widget populartabs">
                    <div class="widget-wrap">
                        <div id="popular-tabs">

                            <ul id="pt-nav">

                                <li><a href="#tabs-1" class="active">Guides</a></li>

                                <li><a href="#tabs-2">Current Hits</a></li>
                                <li><a href="#tabs-3">All Time</a></li>

                            </ul>

                            <div id="tabs-1">

                                <ul>
                                    <li><a href="http://www.youngceaser.com/the-beginners-guide-to-online-marketing/">The Beginner's Guide to Online Marketing</a></li>
                                    <li><a href="http://www.youngceaser.com/the-advanced-guide-to-seo/">The Advanced Guide to SEO</a></li>
                                    <li><a href="http://www.youngceaser.com/the-advanced-guide-to-content-marketing/">The Advanced Guide to Content Marketing</a></li>
                                    <li><a href="http://www.youngceaser.com/the-advanced-guide-to-link-building/">The Advanced Guide to Link Building</a></li>
                                    <li><a href="http://www.youngceaser.com/the-complete-guide-to-building-your-blog-audience/">The Complete Guide to Building Your Blog Audience</a></li>
                                    <li><a href="http://www.youngceaser.com/the-definitive-guide-to-growth-hacking/">The Definitive Guide to Growth Hacking</a></li>
                                    <li><a href="http://www.youngceaser.com/the-definitive-guide-to-conversion-optimization/">The Definitive Guide to Conversion Optimization</a></li>
                                    <li><a href="http://www.youngceaser.com/landing-page-optimization/">The Definitive Guide to Landing Page Optimization</a></li>
                                    <li><a href="http://www.youngceaser.com/the-definitive-guide-to-marketing-automation/">The Definitive Guide to Marketing Automation</a></li>
                                    <li><a href="http://www.youngceaser.com/the-definitive-guide-to-copywriting/">The Definitive Guide to Copywriting</a></li>
                                    <li><a href="http://www.youngceaser.com/the-complete-guide-to-understand-customer-psychology/">The Complete Guide to Understanding Consumer Psychology</a></li>
                                    <li><a href="http://www.youngceaser.com/the-complete-guide-to-building-your-personal-brand/">The Complete Guide to Building Your Personal Brand</a></li>
                                </ul>
                            </div>

                            <div id="tabs-2">
                                <!-- WordPress Popular Posts Plugin v3.2.3 [PHP] [daily] [comments] [custom] -->

                                <!-- cached -->

                                <ul class="wpp-list">
                                    <li> <a href="https://www.youngceaser.com/2017/05/15/how-to-gain-more-branded-search-volume-to-your-website/" title="How to Gain More Branded Search Volume to Your Website" class="wpp-post-title" target="_self">How to Gain More Branded Search Volume to Your Website</a> </li>
                                    <li> <a href="https://www.youngceaser.com/2017/05/10/youre-probably-doing-link-building-wrong/" title="You’re Probably Doing Link-Building Wrong" class="wpp-post-title" target="_self">You’re Probably Doing Link-Building Wrong</a> </li>
                                    <li> <a href="https://www.youngceaser.com/2017/05/12/7-ways-to-use-your-personal-brand-to-find-more-clients/" title="7 Ways to Use Your Personal Brand to Find More Clients" class="wpp-post-title" target="_self">7 Ways to Use Your Personal Brand to Find More Clients</a> </li>
                                    <li> <a href="https://www.youngceaser.com/2017/04/24/5-popular-blog-post-topics-that-everyone-loves-to-share/" title="5 Popular Blog Post Topics That Everyone Loves to Share" class="wpp-post-title" target="_self">5 Popular Blog Post Topics That Everyone Loves to Share</a> </li>
                                    <li> <a href="https://www.youngceaser.com/2017/02/17/how-to-improve-your-alexa-ranking-in-30-days-or-less/" title="How to Improve Your Alexa Ranking in 30 Days or Less" class="wpp-post-title" target="_self">How to Improve Your Alexa Ranking in 30 Days or Less</a> </li>

                                </ul>

                                <!-- End WordPress Popular Posts Plugin v3.2.3 -->
                            </div>
                            <div id="tabs-3">
                                <!-- WordPress Popular Posts Plugin v3.2.3 [PHP] [all] [views] [custom] -->

                                <!-- cached -->

                                <ul class="wpp-list">
                                    <li> <a href="https://www.youngceaser.com/2012/11/19/the-science-of-instagram-how-to-get-more-followers-and-likes/" title="The Science of Instagram: How to Get More Followers and Likes" class="wpp-post-title" target="_self">The Science of Instagram: How to Get More Followers and Likes</a> </li>
                                    <li> <a href="https://www.youngceaser.com/pro/" title="Do you want more traffic?" class="wpp-post-title" target="_self">Do you want more traffic?</a> </li>
                                    <li> <a href="https://www.youngceaser.com/the-beginners-guide-to-online-marketing/" title="The Beginners Guide to Online Marketing" class="wpp-post-title" target="_self">The Beginners Guide to Online Marketing</a> </li>
                                    <li> <a href="https://www.youngceaser.com/2015/01/02/what-are-the-best-times-to-post-on-social-media/" title="What Are The Best Times to Post on Social Media" class="wpp-post-title" target="_self">What Are The Best Times to Post on Social Media</a> </li>
                                    <li> <a href="https://www.youngceaser.com/the-complete-guide-to-building-your-personal-brand/" title="The Complete Guide to Building Your Personal Brand" class="wpp-post-title" target="_self">The Complete Guide to Building Your Personal Brand</a> </li>

                                </ul>

                                <!-- End WordPress Popular Posts Plugin v3.2.3 -->
                            </div>
                            <!-- cached -->
                        </div>

                    </div>
                </div>
                <div id="search-4" class="widget widget_search">
                    <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Search</h4>
                        <form method="get" class="searchform search-form" action="https://www.youngceaser.com/" role="search">
                            <input type="text" value="To search, type and hit enter" name="s" class="s search-input" onfocus="if (&#039;To search, type and hit enter&#039; === this.value) {this.value = &#039;&#039;;}" onblur="if (&#039;&#039; === this.value) {this.value = &#039;To search, type and hit enter&#039;;}">
                            <input type="submit" class="searchsubmit search-submit" value="Search">
                        </form>
                    </div>
                </div>
                <div id="text-6" class="widget widget_text">
                    <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Hire me to speak</h4>
                        <div class="textwidget">
                            <p>
                                <a href="http://www.youngceaser.com/speaker/"><img src="images/speaking.png" style="float: left; margin: 0 10px 10px 0;"></a>
                            </p>

                            <p>I speak at over 25 conferences per year on entrepreneurship and Internet marketing. Before you hire me, there are a few things you need to know. <a href="http://www.youngceaser.com/speaker/">Click here to find out what they are.</a></p>

                        </div>
                    </div>
                </div>
                <div id="text-4" class="widget widget_text">
                    <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Subscribe</h4>
                        <div class="textwidget">
                            <p>Even if you don't visit my site on a regular basis, you can get the latest posts delivered to you for free via RSS or Email:</p>
                            <div id="subscribe-form">
                                <form style="text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="pageTracker._trackEvent('RSS', 'Sidebar-Email');window.open('http://feedburner.google.com/fb/a/mailverify?uri=youngceaser', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                                    <table cellspacing="0" cellpadding="0" align="center" style="width: auto;margin: 0 auto;">
                                        <td valign="middle" nowrap="nowrap">
                                            <a rel="nofollow" href="http://feeds.feedburner.com/youngceaser" onclick="pageTracker._trackEvent('RSS', 'Sidebar-Icon');" style="display:block;float:left;margin-right:5px;margin-top:0px;"><img width="28" height="28" src="<?php echo get_template_directory_uri().'/blog/images/feed-icon-28x28.png';?>" align="absmiddle"></a>
                                            &nbsp;or
                                            <input type="text" style="width:150px;font-weight: bold;" name="email" value="email@address.com" onfocus="this.value=''" class="email-input">
                                            <input type="hidden" value="youngceaser" name="uri">
                                        </td>
                                        <td>
                                            <input type="image" src="<?php echo get_template_directory_uri().'/blog/images/subscribe.png';?>" style="width: auto;height: auto;padding: 0;background-color:transparent;border: none;vertical-align: absmiddle;margin-left: 6px;" align="absmiddle">
                                        </td>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="text-5" class="widget widget_text">
                    <div class="widget-wrap">
                        <div class="textwidget">
                            <div class="scroll-wrapper">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="footer">
        <div class="wrap">
            <p class="copyright">Copyright &copy; by Quick Sprout, LLC</p>

            <ul class="menu">

                <li><a href="http://www.youngceaser.com/privacy/">Privacy Policy</a></li>
                <li><a href="http://www.youngceaser.com/terms/">Terms of Service</a></li>

            </ul>

        </div>
    </div>
</div>
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
</body>

</html>
