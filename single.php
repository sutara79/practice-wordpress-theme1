<?php
/**
 * ブログ個別ページ
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */
?>
<?php get_header(); ?>
<div class="container-wrapper">
    <div class="container">
        <div id="main">
            <?php the_post(); ?>
            <article> 
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <span>カテゴリ：<?php the_category(', ') ?></span>
                <span>投稿日：<?php echo get_the_date(); ?></span>
                <?php the_content(); ?>
            </article>
            <?php comments_template(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>