<?php
/**
 * コメント欄に独自のテンプレートを適用する
 * 
 * 参照: https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/wp_list_comments
 * @param  object $comment コメント
 * @param  array  $args    wp_list_comments の引数
 * @param  number $depth   現在のコメントの階層
 */
function sutara79_comment($comment, $args, $depth) {
    ?>
    <li <?php comment_class(empty($args['has_children']) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
        <div class="comment__header">
            <div class="comment__header__main">
                <div class="comment__avatar">
                    <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
                </div>
                <div class="comment__info">
                    <div class="comment__info__author">
                        <?php printf( __('<cite class="fn">%s</cite>'), get_comment_author_link() ); ?>
                    </div>
                    <div class="comment__info__date">
                        <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                            <?php
                            /* translators: 1: date, 2: time */
                            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() );
                            ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="comment__header__sub">
                <div class="comment__edit"><?php edit_comment_link(__('編集'), '  ', ''); ?></div>
                <div class="comment__reply"><?php comment_reply_link(array_merge($args, array('add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('返信')))); ?></div>
            </div>
        </div>
        <div class="comment__body"><?php comment_text(); ?></div>
    <?php
    // 階層化のため、終了タグ </li> を記述してはダメ。
}