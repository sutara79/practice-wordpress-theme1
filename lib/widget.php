<?php
/**
 * 管理画面の「外観」に「ウィジェット」を追加
 */
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('ウィジェット領域', 'My_Theme'),
        'id'            => 'sidebar1',
        'description'   => __('サイドバーで表示するウィジェットをここに追加してください。', 'My_Theme'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
