<?php
/**
 * カスタムメニューを登録
 */
function sutara79_register_menu() {
    // ヘッダー部分にグローバルナビを登録
    register_nav_menu('header-menu', __('ヘッダーメニュー'));
    // フッター部分にフッターナビを登録
    register_nav_menu('footer-menu', __('フッターメニュー'));
}
add_action('init', 'sutara79_register_menu');