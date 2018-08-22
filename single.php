<?php
/**
 * ブログ個別ページ
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>
<?php get_header(); ?>
<div class="main">
    <div class="main__title__wrapper">
        <div class="container">
            <h1 class="main__title"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="main__contents__wrapper">
        <div class="container">
            <?php the_post(); ?>
            <div class="post__header">
                <span>カテゴリ：<?php the_category(', ') ?></span>
                <span>投稿日：<?php echo get_the_date(); ?></span>
            </div>
            <div class="post__body">
                <?php the_content(); ?>
            </div>
            <div class="comment__wrapper">
                <?php comments_template(); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>