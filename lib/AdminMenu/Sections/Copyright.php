<?php
/**
 * セクション: 著作権情報
 */
class Copyright extends Section {
    var $section = 'sutara79-settings-copyright';
    var $title = '著作権情報';
    var $description = 'フッターに表示します。';
    var $fields = [
        [
            'id' => 'sutara79-copyright-name',
            'title' => '著作権者 (英字)',
            'callback' => 'copyrightName'
        ],
        [
            'id' => 'sutara79-copyright-year',
            'title' => '初版の公開年',
            'callback' => 'copyrightYear'
        ],
        [
            'id' => 'sutara79-copyright-year-current',
            'title' => '現在の年も表記する',
            'callback' => 'copyrightYearCurrent'
        ]
    ];

    function copyrightName($id) {
        echo '<input id="'.$id.'" class="regular-text" type="text" name="'.$id.'" value="';
        form_option($id);
        echo '" >';
    }

    function copyrightYear($id) {
        $val = get_option($id) ? get_option($id) : date('Y');
        echo '<input id="'.$id.'" class="regular-text" type="number" name="'.$id.'" value="'.$val.'">';
    }

    function copyrightYearCurrent($id) {
        $checked = get_option($id) ? 'checked="checked"' : '';
        echo '<input id="'.$id.'" class="regular-text" type="checkbox" name="'.$id.'" value="true" '.$checked.'>';
    }
}