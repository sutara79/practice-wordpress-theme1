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
 * ジャンボトロンを生成する (テンプレート内で使用)
 *
 * @return string ジャンボトロンのHTML
 */
function sutara79_get_jumbotron() {
    ?>
    <div class="jumbotron" style="background-image: url(<?php echo get_option('sutara79-jumbotron-src') ?>); background-position: center <?php echo get_option('sutara79-jumbotron-position') ?>">
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
    <?php
}