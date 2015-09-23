<?php
/**
 * カスタムメニューを登録
 */
add_action('init', 'registerMyMenu');
function registerMyMenu() {
  // ヘッダー部分にグローバルナビを登録
  register_nav_menu('header-menu', __('ヘッダーメニュー'));
  // フッター部分にフッターナビを登録
  register_nav_menu('footer-menu', __('フッターメニュー'));
}


function scheduler_admin_actions() {
var_dump('hello');
    add_options_page(
        'Dump-It Scheduling', 
        'Dump-It Schedule', 
        'manage_options', 
        'Dump-It_Master_Schedule', 
        'my_callback'
    );
}
function my_callback()
{
    echo 'hello world';
}
add_action('admin_menu', 'scheduler_admin_actions');
