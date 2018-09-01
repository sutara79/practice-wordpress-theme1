<?php the_post(); ?>
<div class="post__header">
    <div class="post__date">
        <span class="post__date__created">
            <?php _e('投稿') ?>: <?php echo get_the_date() ?>
        </span>
        <?php if (get_the_date() != get_the_modified_date()) : ?>
            <span class="post__date__modified">
                <?php _e('更新') ?>: <?php the_modified_date() ?>
            </span>
        <?php endif ?>
    </div>
    <div class="post__category">
        <?php the_category() ?>
    </div>
    <div class="post__tags">
        <?php the_tags('', '') ?>
    </div>
</div>
<div class="post__body">
    <?php the_content(); ?>
</div>
<?php comments_template(); ?>