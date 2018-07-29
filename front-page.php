<?php get_header(); ?>
<div class="jumbotron" style="background-image: url(<?php echo get_option('jumbotron-img') ?>); background-position: center <?php echo get_option('jumbotron-position') ?>">
  <div class="container">
    <div class="jumbotron-text-wrapper">
      <div class="jumbotron-main">
        TODO: メッセージ
      </div>
      <div class="jumbotron-sub">
        TODO: サブ
      </div>
    </div>
  </div>
</div>
<div class="container-wrapper">
  <div class="container">
    <div id="main-home">
      <?php the_post(); ?>
      <article>
        <?php the_content(); ?>
      </article>
      <aside>
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
          <?php echo __('ニュースはありません。'); ?>
        <?php endif; ?>
      </aside>
    </div>
  </div>
</div>
<?php get_footer(); ?>