<?php
/**
 * サイドバー
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */
?>
<div class="sidebar">
<!--     <ul>
        <li>
            <h3 class="title-sidebar">Categories</h3>
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
        </li>
    </ul> -->
    <?php if (is_active_sidebar('sidebar1')) : ?>
        <div id="widget-area" class="widget-area" role="complementary">
            <?php dynamic_sidebar('sidebar1'); ?>
        </div><!-- .widget-area -->
    <?php endif; ?>
</div>