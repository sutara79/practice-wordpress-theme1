<?php
/**
 * アーカイブ
 * @package WordPress\sutara79
 * @since 1.0.0
 */

$sutara79_main = array(
    'title' => get_the_archive_title(),
    'body-template' => array(
        'template-parts/main/contents/archive'
    )
);
include locate_template('template-parts/main/layout.php');
