<?php
/**
 * 投稿ページ: フロントページ
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<?php $page_id = get_option('page_for_posts'); ?>
<div class="main">
    <div class="main__title__wrapper">
        <div class="container">
            <h1 class="main__title"><?php echo get_the_title($page_id); ?></h1>
        </div>
    </div>
    <div class="container main__contents__wrapper">
        <div class="main__contents">
            <div>
                <?php
                // 参考: https://teratail.com/questions/142135
                $no_br_text = get_post($page_id)->post_content; // 改行が画面に反映されない
                echo apply_filters('the_content', $no_br_text); // 改行が画面に反映される
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