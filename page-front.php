<?php
/**
 * フロントページ (ホームページ)
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<div class="jumbotron" style="background-image: url(<?php echo get_option('jumbotron-img') ?>); background-position: center <?php echo get_option('jumbotron-position') ?>">
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
    <div class="main__contents__wrapper">
        <div class="container">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>