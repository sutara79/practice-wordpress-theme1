<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="main_contents">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>