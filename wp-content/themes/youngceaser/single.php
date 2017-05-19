<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('blog'); ?>
<?php the_post(); ?>


<div id="inner">
    <div id="content-sidebar-wrap">
        <div id="content" class="hfeed">
            <div class="post-37370 post type-post status-publish format-standard hentry category-general entry">
                <?php the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
                <div class="post-info">by <span class="author vcard"><span class="fn"><?php echo get_the_author_meta('display_name', $post->post_author); ?> </span></span> on <span class="date published time" title="2017-03-10T12:30:43+00:00"><?php echo date("F j, Y", strtotime($post->post_date)); ?></span> </div>
                <div class="entry-content">
                    <div class="trulysocial-horizontal"></div>
                    <?php
                    the_content( sprintf(
                        __( 'Continue reading %s', 'youngceaser' ),
                        the_title( '<span class="screen-reader-text">', '</span>', false )
                    ) );
                    ?>

                </div>
            </div>

            <?php comments_template();?>

        </div>
        <?php get_sidebar('blog');?>
    </div>
</div>



















































<?php get_footer('blog'); ?>
