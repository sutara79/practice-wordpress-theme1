<?php the_post(); ?>
<div class="post__header">
    <span>カテゴリ：<?php the_category(', ') ?></span>
    <span>投稿日：<?php echo get_the_date(); ?></span>
</div>
<div class="post__body">
    <?php the_content(); ?>
</div>
<?php comments_template(); ?>