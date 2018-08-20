<?php
/**
 * サイドバー
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */
?>
<div id="sidebar">
    <ul>
        <li>
            <h3 class="title-sidebar">Categories</h3>
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
        </li>
    </ul>
</div>