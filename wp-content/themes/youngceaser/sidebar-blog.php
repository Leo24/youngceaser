<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div id="sidebar" class="sidebar widget-area">

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="widget-area" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- .widget-area -->
    <?php endif; ?>

</div>
