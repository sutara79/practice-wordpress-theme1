<?php
/**
 * 固定ページ: 個別
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */
?>
<?php get_header(); ?>
<div class="main">
    <div class="main__title__wrapper">
        <div class="container">
            <h1 class="main__title"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container main__contents__wrapper">
        <div class="main__contents">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>