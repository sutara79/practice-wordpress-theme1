<?php
class Sutara79SettingsSuper {
    var $section;
    var $page;
    var $group;
    var $title; // 継承クラスで定義
    var $description; // 継承クラスで定義
    var $fields; // 継承クラスで定義

    function __construct($page, $group) {
        $this->page = $page;
        $this->group = $group;

        add_settings_section(
            $this->section, // セクション名
            __($this->title), // タイトル
            [$this, 'showContent'], // コールバック関数。この関数の実行結果が出力される
            $this->page // このセクションを表示するページ名。do_settings_sectionsで設定
        );
        $this->addFields();
    }

    function showContent() {
        echo '<p>'.__($this->description).'</p>';
    }

    function addFields() {
        foreach ($this->fields as $field) {
            $id = $field['id'];
            register_setting($this->group, $id);
            add_settings_field(
                $id, // フィールド名
                __($field['title']), // タイトル
                [$this, $field['callback']], // コールバック関数。この関数の実行結果が出力される
                $this->page,
                $this->section,
                ['id' => $id]
            );
        }
    }
}