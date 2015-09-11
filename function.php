<?php
/**
 * カスタムメニューを登録
 */
function registerMyMenu() {
  // ヘッダー部分にグローバルナビを登録
  register_nav_menu('header-menu', __('ヘッダーメニュー'));
  // フッター部分にフッターナビを登録
  register_nav_menu('footer-menu', __('フッターメニュー'));
}
add_action('init', 'registerMyMenu');