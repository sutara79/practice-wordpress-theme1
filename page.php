<?php get_header(); ?>
<div class="container-wrapper">
  <div class="container">
    <div id="main">
      <?php the_post(); ?>
      <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>
    </div>
  </div>
</div>
<?php get_footer(); ?>