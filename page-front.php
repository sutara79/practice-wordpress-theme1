<?php
/**
 * フロントページ (ホームページ)
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<div class="jumbotron" style="background-image: url(<?php echo get_option('sutara79-jumbotron-src') ?>); background-position: center <?php echo get_option('sutara79-jumbotron-position') ?>">
    <div class="container">
        <div class="jumbotron-text-wrapper">
            <div class="jumbotron-main">
                TODO: メッセージ
            </div>
            <div class="jumbotron-sub">
                TODO: サブ
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container main__contents__wrapper">
        <div class="main__contents">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>