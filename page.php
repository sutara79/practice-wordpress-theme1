<?php get_header(); ?>
<div id="container-wrapper">
  <div id="container">
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