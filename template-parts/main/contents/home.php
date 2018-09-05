<div>
    <?php 
    参考: https://teratail.com/questions/142135
    echo apply_filters('the_content', get_queried_object()->post_content);
    ?>
</div>
<div>
    <?php get_template_part('template-parts/main/contents/archive'); ?>
</div>