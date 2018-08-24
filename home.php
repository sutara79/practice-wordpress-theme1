<?php
/**
 * 投稿ページ: フロントページ
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<div class="main">
    <div class="main__title__wrapper">
        <div class="container">
            <h1 class="main__title">
                <?php echo apply_filters('the_title', get_queried_object()->post_title) ?>
            </h1>
        </div>
    </div>
    <div class="container main__contents__wrapper">
        <div class="main__contents">
            <div>
                <?php 
                参考: https://teratail.com/questions/142135
                echo apply_filters('the_content', get_queried_object()->post_content);
                ?>
            </div>
            <div>
                <?php if (have_posts()) : ?>
                    <ul class="news-container">
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <li>
                                <span class="news-date"><?php the_time(get_option('date_format')) ?></span>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <?php echo __('投稿記事はありません。'); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>