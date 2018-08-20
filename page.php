<?php
/**
 * 固定ページ
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */
?>
<?php get_header(); ?>
<article class="article">
    <div class="article__title__wrapper">
        <div class="container">
            <h1 class="article__title"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="article__contents__wrapper">
        <div class="container">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>