<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

function twentyfifteen_comment_nav() {
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php _e( 'コメントナビ', 'twentyfifteen' ); ?></h2>
        <div class="nav-links">
            <?php
                if ( $prev_link = get_previous_comments_link( __('古いコメント') ) ) :
                    printf( '<div class="nav-previous">%s</div>', $prev_link );
                endif;

                if ( $next_link = get_next_comments_link( __('新しいコメント') ) ) :
                    printf( '<div class="nav-next">%s</div>', $next_link );
                endif;
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .comment-navigation -->
    <?php
    endif;
}

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
?>

<div id="comments" class="comment-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comment-area__title"><?php _e('コメント') ?></h2>

        <?php twentyfifteen_comment_nav(); ?>

        <ol class="comment__list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'type'        => 'comment',
                'avatar_size' => 56,
                'callback'    => 'sutara79_comment'
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php twentyfifteen_comment_nav(); ?>

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php _e('コメントは受け付けていません。'); ?></p>
    <?php endif; ?>

    <?php
    // コメントフォーム
    class Template {
        function __construct() {
            $this->commenter = wp_get_current_commenter();
            $this->req = get_option('require_name_email');
            $this->field_req = $this->req ? '<span class="field-required">'.__('必須').'</span>' : '';
            $this->aria_req  = $this->req ? ' aria-required="true"' : '';
        }

        // コメント入力欄のテンプレート
        function comment_field() {
            return <<< EOT
            <p class="comment-form-comment comment__field__wrapper">
                <textarea id="comment" name="comment" class="respond__body" cols="45" rows="8" aria-required="true"></textarea>
            </p>
EOT;
        }

        // 「名前」のテンプレート
        function author() {
            $label = __('名前');
            $value = esc_attr($this->commenter['comment_author']);
            return <<< EOT
            <p class="comment-form-author comment__field__wrapper">
                <label for="author">{$label}{$this->field_req}</label>                
                <input id="author" name="author" class="respond__field" type="text" value="{$value}" size="30"{$aria_req}>
            </p>
EOT;
        }

        // 「メールアドレス」のテンプレート
        function email() {
            $label = __('メールアドレス');
            $value = esc_attr($this->commenter['comment_author_email']);
            return <<< EOT
            <p class="comment-form-email comment__field__wrapper">
                <label for="email">{$label}{$this->field_req}</label>                
                <input id="email" name="email" class="respond__field" type="email" value="{$value}" size="30"{$aria_req}>
            </p>
EOT;
        }

        // 「Webサイト」のテンプレート
        function url() {
            $label = __('Webサイト');
            $value = esc_attr($this->commenter['comment_author_url']);
            return <<< EOT
            <p class="comment-form-url comment__field__wrapper">
                <label for="url">{$label}</label>
                <input id="url" name="url" class="respond__field" type="url" value="{$value}" size="30">
            </p>
EOT;
        }
    }
    $template = new Template();

    $args = array(
        'title_reply_to' => __('%s に返信する'),
        'cancel_reply_link' => __('返信をキャンセル'),
        'comment_field' => $template->comment_field(),
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'fields' => apply_filters('comment_form_default_fields', array(
            'author' => $template->author(),
            'email' => $template->email(),
            'url' => $template->url()
        ))
    );

    comment_form($args);
    ?>
</div><!-- .comments-area -->
