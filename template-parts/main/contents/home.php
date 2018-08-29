<div>
    <?php 
    参考: https://teratail.com/questions/142135
    echo apply_filters('the_content', get_queried_object()->post_content);
    ?>
</div>
<div>
    <?php if (have_posts()) : ?>
        <ul class="news-container">
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <span class="news-date"><?php the_time(get_option('date_format')) ?></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <?php echo __('投稿記事はありません。'); ?>
    <?php endif; ?>
</div>