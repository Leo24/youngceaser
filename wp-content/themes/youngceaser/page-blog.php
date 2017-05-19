<?php
/**
 * Template Name: Blog Page
 * @package WordPress
 */
get_header('blog');
?>



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
                            <div class="post-info">by <span class="author vcard"><span class="fn"><?php echo get_the_author_meta('display_name', $post->post_author); ?> </span></span> on <span class="date published time" title="2017-03-10T12:30:43+00:00"><?php echo date("F j, Y", strtotime($post->post_date)); ?></span> </div>

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
            </div>
            <?php get_sidebar('blog');?>
        </div>
    </div>



<?php get_footer('blog'); ?>