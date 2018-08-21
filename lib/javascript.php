<?php
/**
 * 独自のJavaScriptを使えるようにする
 */
function sutara79_enqueue_scripts() {
    wp_enqueue_script( 
        'main-script', 
        get_template_directory_uri() . '/assets/js/main.js' 
    );
}
add_action('wp_enqueue_scripts', 'sutara79_enqueue_scripts');
