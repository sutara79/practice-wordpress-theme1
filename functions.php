<?php
/**
 * 関数群
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */

// 複数のファイルに分散している関数を読み込む
require_once locate_template('lib/widget.php');
require_once locate_template('lib/custom-menu.php');
require_once locate_template('lib/copyright.php');
require_once locate_template('lib/jumbotron.php');
require_once locate_template('lib/javascript.php');

// アドミンバーを非表示にする
add_filter('show_admin_bar', '__return_false');
