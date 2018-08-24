<?php
/**
 * セクション: 画像関連
 */
class Img extends Section {
    var $section = 'sutara79-settings-img';
    var $title = '画像関連';
    var $description = '';
    var $fields = [
        [
            'id' => 'sutara79-logo-src',
            'title' => 'ロゴ (URL)',
            'callback' => 'commonUrl'
        ],
        [
            'id' => 'sutara79-favicon-src',
            'title' => 'ファビコン (URL)',
            'callback' => 'commonUrl'
        ],
        [
            'id' => 'sutara79-fimg-src',
            'title' => 'デフォルトのSNSシェア用画像 (URL)',
            'callback' => 'commonUrl'
        ],
        [
            'id' => 'sutara79-jumbotron-src',
            'title' => 'ジャンボトロン (URL)',
            'callback' => 'commonUrl'
        ],
        [
            'id' => 'sutara79-jumbotron-position',
            'title' => 'ジャンボトロンの位置',
            'callback' => 'jumbotronPosition'
        ]
    ];

    function commonUrl($id) {
        echo '<input id="'.$id.'" class="regular-text" type="url" name="'.$id.'" value="';
        form_option($id);
        echo '" >';
    }

    function jumbotronPosition($id) {
        echo '<p><label><input type="radio" name="'.$id.'" value="top" '   .$this->isChecked($id, 'top').   '> '.__('上端').'</label></p>'.
             '<p><label><input type="radio" name="'.$id.'" value="center" '.$this->isChecked($id, 'center').'> '.__('中央').'</label></p>'.
             '<p><label><input type="radio" name="'.$id.'" value="bottom" '.$this->isChecked($id, 'bottom').'> '.__('下端').'</label></p>';
    }

    function isChecked($id, $position) {
        return (get_option($id) == $position) ? 'checked' : '';
    }
}