<?php
/**
 * アーカイブ
 * (コンテンツの本文)
 * @package WordPress\sutara79
 * @since 1.0.0
 */

while (have_posts()) : the_post(); ?>
    <li>
        <span class="news-date"><?php the_time(get_option('date_format')) ?></span>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
<?php endwhile; ?>

<?php
the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'twentysixteen' ),
    'next_text'          => __( 'Next page', 'twentysixteen' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
) );
?>