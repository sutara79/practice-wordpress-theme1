<?php
require_once locate_template('lib/custom-menu.php');
require_once locate_template('lib/copyright.php');
require_once locate_template('lib/jumbotronImg.php');

/**
 * 独自のJavaScriptを使えるようにする
 */
function my_enqueue_scripts() {
  wp_enqueue_script( 
    'main-script', 
    get_template_directory_uri() . '/assets/js/main.js' 
  );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// アドミンバーを非表示にする
add_filter('show_admin_bar', '__return_false');