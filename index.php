<?php
/**
 * index.php
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>
<?php get_header(); ?>
<div class="container-wrapper">
    <div class="container">
        <div id="main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <h3 class="title-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        <?php the_content(__('詳しく')); ?>
                    </article>
                <?php endwhile; ?>
                <div class="navigation">
                    <?php next_posts_link(trim(__('&laquo; 前へ', 'default'))) ?>
                    <?php previous_posts_link(trim(__('次へ &raquo;', 'default'))) ?>
                </div>
            <?php else : ?>
                <?php _e('記事はありません。') ?>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>