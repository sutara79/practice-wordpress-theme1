<?php get_header(); ?>
<div id="main">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="content"> 
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <span>カテゴリ：<?php the_category(', ') ?></span>
    <span>投稿日：<?php echo get_the_date(); ?></span>
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
  <?php else : ?>
　　記事はありません
  <?php endif; ?>

  <?php comments_template(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>