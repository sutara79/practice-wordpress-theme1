<?php
/**
 * 投稿ページ: フロントページ
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */

$sutara79_main = array(
    'title' => apply_filters('the_title', get_queried_object()->post_title),
    'body-template' => array(
        'template-parts/main/contents/home'
    )
);
include locate_template('template-parts/main/layout.php');
