<?php
// ページ内で使うセクションを読み込む
require_once 'Sections/Section.php';
require_once 'Sections/Copyright.php';
require_once 'Sections/Img.php';

/**
 * 管理画面の新規ページ
 */
class Page {
    var $name = 'sutara79';
    var $page = 'sutara79-settings';
    var $group = 'sutara79-settings-group';

    function __construct() {
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    function adminMenu() {
        add_options_page(
            $this->name, // ページのタイトル
            $this->name, // メニューのタイトル
            'manage_options', // 権限 (管理画面のどの項目にメニューを追加するか)
            $this->page, // ページのスラッグ
            [$this, 'showContents'] // コールバック関数
        );
        add_action('admin_init', [$this, 'addSections']);
    }

    function showContents() { 
        ?>
        <div class="wrap">
            <h1><?php echo __('テーマ').' '.$this->name; ?></h1>
            <form method="post" action="options.php" novalidate="novalidate">
                <?php
                settings_fields($this->group);
                do_settings_sections($this->page);
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    function addSections() {
        new Copyright($this->page, $this->group);
        new Img($this->page, $this->group);
    }
}
