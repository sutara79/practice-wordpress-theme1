<?php
/**
 * ヘルパー関数
 * (テーマが独自に定義するグローバル関数)
 */

/**
 * 著作権情報を生成する (テンプレート内で使用)
 *
 * @return string 著作権情報
 */
function sutara79_get_copyright() {
    $year = get_option('sutara79-copyright-year');
    $current = date('Y');
    if (get_option('sutara79-copyright-year-current') == 'true' &&
        intval($year) < $current) {
        $year .= '-'.$current;
    }
    return '&copy; '.$year.' '.get_option('sutara79-copyright-name');
}

/**
 * ロゴを生成する
 * @return string ロゴのimg要素またはWebサイト名
 */
function sutara79_logo() {
    $src = get_option('sutara79-logo-src');
    $txt = get_bloginfo('name');
    if ($src) {
        $txt = '<img class="header__logo__img" src="'.$src.'" alt="'.$txt.'">';
    }
    echo $txt;
}

/**
 * ループ外で、現在のページの抜粋を表示する
 */
function sutara79_this_excerpt() {
    global $post;
    $post = get_queried_object();
    setup_postdata($post);
    echo get_the_excerpt();
    wp_reset_postdata();
}

/**
 * og:image 用のURLを表示する
 */
function sutara79_og_image() {
    global $post;
    $post = get_queried_object();
    setup_postdata($post);

    if (has_post_thumbnail()) {
        // そのページにアイキャッチ画像があれば、それを表示する
        the_post_thumbnail_url();
    } else {
        // なければ、管理画面で設定した、共通の画像を表示する
        echo get_option('sutara79-fimg-src');
    }

    wp_reset_postdata();
}