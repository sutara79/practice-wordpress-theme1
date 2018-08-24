<?php
/**
 * 関数群
 * @package WordPress\sutara79
 * @since 1.0.0
 */

// 複数のファイルに分散している関数を読み込む
require_once locate_template('lib/admin-menu.php');
require_once locate_template('lib/widget.php');
require_once locate_template('lib/custom-menu.php');
require_once locate_template('lib/javascript.php');
require_once locate_template('lib/helpers.php');

// アドミンバーを非表示にする
add_filter('show_admin_bar', '__return_false');

// アイキャッチ画像を有効にする
add_theme_support('post-thumbnails'); 
