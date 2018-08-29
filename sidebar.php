<?php
/**
 * サイドバー
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>
<div class="sidebar">
    <?php
    // 固定ページの場合
    if (is_page()) {
        if (is_active_sidebar('widget-page')) {
            echo '<div id="widget-page" class="widget-area" role="complementary">';
                dynamic_sidebar('widget-page');
            echo '</div>';
        }
    }
    // 投稿ページの場合
    elseif (is_single() || is_archive() || is_home()) {
        if (is_active_sidebar('widget-blog')) {
            echo '<div id="widget-blog" class="widget-area" role="complementary">';
                dynamic_sidebar('widget-blog');
            echo '</div>';
        }
    }
    ?>
</div>