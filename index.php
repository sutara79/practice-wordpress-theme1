<?php get_header(); ?>
<header>
<h1>
  <?php bloginfo('name'); ?>
  <small><?php wp_title(); ?></small>
</h1>
</header>
<?php wp_nav_menu(array('menu'=>'profile')); ?>
<?php wp_nav_menu(array('menu'=>'access')); ?>
<?php wp_nav_menu(array('menu'=>'contact')); ?>
<div id="main">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="content"> 
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_content(__('続きを読む')); ?>
  </div>
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
<?php get_footer(); ?>