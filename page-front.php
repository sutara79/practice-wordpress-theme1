<?php
/**
 * フロントページ (ホームページ)
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<?php echo sutara79_get_jumbotron(); ?>
<div class="main">
    <div class="container main__contents__wrapper">
        <div class="main__contents">
        <div class="container">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>