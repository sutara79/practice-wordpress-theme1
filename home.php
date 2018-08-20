<?php
/**
 * フロントページ (投稿)
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
    <div class="main__contents__wrapper">
        <div class="container">
            <?php the_post(); ?>
            <div>
                <?php the_content(); ?>
            </div>
            <div>
                <h3 class="title-news"><?php echo get_the_title(get_option('page_for_posts')); ?></h3>
                <?php $postslist = get_posts(array('posts_per_page' => 10)); ?>
                <?php if (count($postslist) > 0) : ?>
                    <ul class="news-list">
                        <?php foreach ($postslist as $post) : setup_postdata( $post ); ?>
                            <li>
                                <span class="news-date"><?php the_time(get_option('date_format')); ?></span>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </ul>
                <?php else : ?>
                    <?php echo __('投稿記事はありません。'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>