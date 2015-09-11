<?php get_header(); ?>
<div id="container-wrapper">
  <div id="container">
    <div id="main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <?php the_content(__('続きを読む')); ?>
          </article>
        <?php endwhile; ?>
        <div class="navigation">
          <?php next_posts_link(trim(__('&laquo; 前へ', 'default'))) ?>
          <?php previous_posts_link(trim(__('次へ &raquo;', 'default'))) ?>
        </div>
      <?php else : ?>
        記事はありません
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>