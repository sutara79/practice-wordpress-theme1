<?php
/**
 * アーカイブ
 * (コンテンツの本文)
 * @package WordPress\sutara79
 * @since 1.0.0
 */

?>
<ol class="archive">
    <?php while (have_posts()) : the_post(); ?>
        <li class="archive__post">
            <div class="archive__post__date">
                <?php the_time(get_option('date_format')) ?>
            </div>
            <h3 class="archive__post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="archive__post__excerpt">
                <?php the_excerpt() ?>
            </div>
        </li>
    <?php endwhile; ?>
</ol>

<?php
the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'twentysixteen' ),
    'next_text'          => __( 'Next page', 'twentysixteen' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
) );
?>