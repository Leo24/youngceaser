<?php

/**
 * Template Name: Page Contact
 * @package WordPress
 *
 */

$contactInfo = get_contact_info();

get_header();
?>

<article id="article" role="main">
    <div id="page-contact">
        <div class="page-contact-s page-contact-header">
            <div class="inner">
                <h1 class="light border title"><?php echo $contactInfo['first_line'];?><span class="red"><?php echo $contactInfo['second_line'];?></span></h1>
                <p class="light subtitle"><?php echo $contactInfo['third_line'];?></p>
            </div>
        </div>
        <div class="page-contact-s page-contact-in">
            <div class="inner">
                <div class="heading">
                    <p class="heading-img"><img src="<?php echo get_template_directory_uri().'/images/contact';?>/incoming-mail.png" width="138" height="138" alt=""></p>
                    <h2 class="heading-text"><?php echo $contactInfo['heading_text_contact_in'];?></h2></div>
                <ul class="description-list">
                    <?php foreach($contactInfo['description_list'] as $value):?>
                        <li class="description"><span class="text"><?php echo $value['list_item'];?></span></li>
                    <?php endforeach;?>
                </ul>
                <div class="mailbox">
                    <div class="box"><img class="mailbox-img" src="<?php echo get_template_directory_uri().'/images/contact';?>/mailbox-in-en-v2.png" width="856" height="632" alt="">
                        <ul class="details">
                            <li class="week"><span class="number">1450</span> per week</li>
                            <li class="day"><span class="number">207</span> per day</li>
                        </ul>
                        <p class="where">But <em>where</em> do they come from? <span class="locations-title">Location of senders by %</span></p>
                        <p class="who">And <em>who</em> is sending it? <span class="nationality-title">Nationality of senders by %</span></p>
                    </div>
                </div>
                <div class="map">
                    <div class="box"><img class="map-img" src="<?php echo get_template_directory_uri().'/images/contact';?>/map.png" width="1045" height="597" alt="">
                        <div class="locations">
                            <ul class="locations-list">
                                <li class="w north-america">North <span class="nl">America</span> <span class="percent">33<span class="percent-mark">%</span></span>
                                </li>
                                <li class="w europe">Europe <span class="percent">29<span class="percent-mark">%</span></span>
                                </li>
                                <li class="w asia">Asia <span class="percent">27<span class="percent-mark">%</span></span>
                                </li>
                                <li class="africa">Africa <span class="percent">07<span class="percent-mark">%</span></span>
                                </li>
                                <li class="australia">Australia <span class="percent">03<span class="percent-mark">%</span></span>
                                </li>
                                <li class="south-america">South <span class="nl">America</span> <span class="percent">01<span class="percent-mark">%</span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="nationality">
                            <ul class="nationality-list">
                                <li class="w indian">Indian <span class="percent">44<span class="percent-mark">%</span></span>
                                </li>
                                <li class="w american">American <span class="percent">20<span class="percent-mark">%</span></span>
                                </li>
                                <li class="english">English <span class="percent">11<span class="percent-mark">%</span></span>
                                </li>
                                <li class="german">German <span class="percent">07<span class="percent-mark">%</span></span>
                                </li>
                                <li class="chinese">Chinese <span class="percent">05<span class="percent-mark">%</span></span>
                                </li>
                                <li class="nigerian">Nigerian <span class="percent">05<span class="percent-mark">%</span></span>
                                </li>
                                <li class="other">Other <span class="percent">08<span class="percent-mark">%</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-contact-s page-contact-s-red page-contact-s-right page-contact-out">
            <div class="inner">
                <div class="heading">
                    <h2 class="heading-text">Let&rsquo;s talk <span class="nl">outgoing mail</span></h2>
                    <p class="heading-img"><img src="<?php echo get_template_directory_uri().'/images/contact';?>/outgoing-mail.png" width="138" height="138" alt=""></p>
                </div>
                <p class="description"><span class="text">I try to respond to everyone</span></p>
                <div class="mailbox">
                    <div class="box"><img class="mailbox-img" src="<?php echo get_template_directory_uri().'/images/contact';?>/mailbox-out-en-v2.png" width="742" height="377" alt="">
                        <ul class="details">
                            <li class="week"><span class="number">637</span> per week</li>
                            <li class="day"><span class="number">91</span> per day</li>
                        </ul>
                    </div>
                </div>
                <div class="time">
                    <div class="box"><img class="time-img" src="<?php echo get_template_directory_uri().'/images/contact';?>/time-v2.png" width="920" height="518" alt="">
                        <div class="title">
                            <p class="not-enought"><span class="text">There just isn&rsquo;t <em class="nl">enough time</em> in the day</span></p>
                            <p class="how-much"><span class="text">How much time do <span class="nl">I spend in my inbox?</span></span>
                            </p>
                        </div>
                        <ul>
                            <li class="day"><span class="number">4</span> <span class="details"><span class="element">hours</span> <span class="per">per</span> <span class="period">day</span></span>
                            </li>
                            <li class="week"><span class="number">27</span> <span class="details"><span class="element">hours</span> <span class="per">per</span> <span class="period">week</span></span>
                            </li>
                            <li class="month"><span class="number">4½</span> <span class="details"><span class="element">days</span> <span class="per">per</span> <span class="period">month</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="total">That&rsquo;s <em>55 full days</em> spent in my inbox every year</p>
            </div>
        </div>
        <div class="page-contact-s page-contact-s-right page-contact-really">
            <div class="inner">
                <div class="heading">
                    <h2 class="heading-text"><?php echo $contactInfo['heading_text_really'];?></h2>
                    <p class="heading-img"><img src="<?php echo get_template_directory_uri().'/images/contact';?>/want-to-contact.png" width="138" height="138" alt=""></p>
                </div>
                <p class="description"><span class="text"><?php echo $contactInfo['description_really'];?></span></p>
                <div class="respond">
                    <div class="will">
                        <div class="box">
                            <div class="header">
                                <h3 class="title"><?php echo $contactInfo['respond_title_really'];?></h3>
                                <p class="subtitle"><?php echo $contactInfo['respond_subtitle_really'];?></p>
                            </div>
                            <div class="box-inside"><img class="will-img" src="<?php echo get_template_directory_uri().'/images/contact';?>/will-v2.png" width="521" height="437" alt="">
                                <ul class="details">
                                    <li class="my-startup">my startup <span class="percent">36<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="business-questions">business <span class="nl">questions</span> <span class="percent">31<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="my-blog">my blog <span class="percent">15<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="interview-requests">interview <span class="nl">requests</span> <span class="percent">10<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="consulting-inquires">consulting <span class="nl">inquires</span> <span class="percent">08<span class="percent-mark">%</span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="wont">
                        <div class="box">
                            <div class="header">
                                <h3 class="title"><?php echo $contactInfo['respond_wont_title_really'];?></h3>
                                <p class="subtitle"><?php echo $contactInfo['respond_wont_subtitle_really'];?></p>
                            </div>
                            <div class="box-inside"><img class="wont-img" src="<?php echo get_template_directory_uri().'/images/contact';?>/wont-v2.png" width="640" height="562" alt="">
                                <ul class="details">
                                    <li class="product-launch">product <span class="nl">launch</span> <span class="percent">28<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="press-releases">press <span class="nl">releases</span> <span class="percent">26<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="advertising-opportunities">advertising <span class="nl">opportunities</span> <span class="percent">20<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="buying-text-links">buying <span class="nl">text links</span> <span class="percent">17<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="asking-for-money">asking <span class="nl">for money</span> <span class="percent">05<span class="percent-mark">%</span></span>
                                    </li>
                                    <li class="book-launch">book launch <span class="percent">04<span class="percent-mark">%</span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-contact-s page-contact-s-red page-contact-concise">
            <div class="inner">
                <p><?php echo $contactInfo['concise_text'];?></p>
            </div>
        </div>
        <div class="page-contact-s page-contact-form">
            <div class="inner">
                <div class="heading">
                    <p class="heading-img"><img src="<?php echo get_template_directory_uri().'/images/contact';?>/email-me.png" width="138" height="138" alt=""></p>
                    <h2 class="heading-text"><?php echo $contactInfo['heading_text_form'];?></h2></div>
                <p class="description"><span class="text"><?php echo $contactInfo['description_form'];?></span></p>
                <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form for Contact page" html_class="np-form"]');?>

            </div>
        </div>
    </div><span id="tve_leads_end_content" style="display: block; visibility: hidden; border: 1px solid transparent;"></span></article>



<?php get_footer(); ?>