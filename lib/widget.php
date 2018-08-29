<?php
/**
 * 管理画面の「外観」に「ウィジェット」を追加
 */
function sutara79_widgets_init() {
    register_sidebar(array(
        'name'          => __('固定ページ', 'sutara79'),
        'id'            => 'widget-page',
        'description'   => __('固定ページのサイドバーで表示するウィジェットをここに追加してください。', 'sutara79'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => __('投稿', 'sutara79'),
        'id'            => 'widget-blog',
        'description'   => __('投稿ページのサイドバーで表示するウィジェットをここに追加してください。', 'sutara79'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'sutara79_widgets_init');
