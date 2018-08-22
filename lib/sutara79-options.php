<?php
/**
 * 管理画面でテーマの設定の一部を変更する。
 * クラスとして定義。
 * See https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_options_page
 */
class Sutara79Options {
    function __construct() {
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    function adminMenu() {
        add_options_page('sutara79', 'sutara79', 'manage_options', 'options-sutara79', [$this, 'showContent']);
        add_action('admin_init', [$this, 'adminInit']);
    }

    function adminInit() {
        $group = 'sutara79-settings-group';
        register_setting($group, 'sutara79-copyright-name');
        register_setting($group, 'sutara79-copyright-year');
        register_setting($group, 'sutara79-copyright-year-current');
        register_setting($group, 'sutara79-jumbotron-img');
        register_setting($group, 'sutara79-jumbotron-position');
    }

    function showContent() { 
        ?>
        <div class="wrap">
            <h1><?php echo __('テーマ').' sutara79'; ?></h1>
            <form method="post" action="options.php" novalidate="novalidate">
                <?php
                    // オプションページのフォームタグの内側で呼ばれなければならない
                    // See: https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/settings_fields
                    settings_fields('sutara79-settings-group');
                    do_settings_sections('sutara79-settings-group');
                ?>

                <h2><?php echo __('著作権情報'); ?></h2>
                <p><?php echo __('フッターに表示します。'); ?></p>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="sutara79-copyright-name"><?php echo __('著作権者 (英字)'); ?></label></th>
                            <td><input id="sutara79-copyright-name" class="regular-text" type="text" name="sutara79-copyright-name" value="<?php echo get_option('sutara79-copyright-name'); ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="sutara79-copyright-year"><?php echo __('初版の公開年'); ?></label></th>
                            <td><input type="number" id="sutara79-copyright-year" class="regular-text" name="sutara79-copyright-year" value="<?php echo get_option('sutara79-copyright-year'); ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="sutara79-copyright-year-current"><?php echo __('現在の年も表記する'); ?></label></th>
                            <td><input type="checkbox" id="sutara79-copyright-year-current" name="sutara79-copyright-year-current" value="true" <?php echo (get_option('sutara79-sutara79-copyright-year-current')) ? 'checked="checked"' : '' ?>></td>
                        </tr>
                    </tbody>
                </table>

                <h2><?php echo __('ジャンボトロン'); ?></h2>
                <p><?php echo __('Webサイトのフロントページで表示します。'); ?></p>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="jumbotron-img">背景画像 (URL)</label></th>
                            <td><input id="sutara79-jumbotron-img" type="text" class="regular-text" name="sutara79-jumbotron-img" value="<?php echo get_option('sutara79-jumbotron-img'); ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">位置</th>
                            <td>
                                <p><label><input type="radio" name="sutara79-jumbotron-position" value="top" <?php $this->isChecked('top') ?>> 上端
                                    </label></p>
                                <p><label><input type="radio" name="sutara79-jumbotron-position" value="center" <?php $this->isChecked('center') ?>> 中央</label></p>
                                <p><label><input type="radio" name="sutara79-jumbotron-position" value="bottom" <?php $this->isChecked('bottom') ?>> 下端</label></p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }

    function isChecked($position) {
        echo (get_option('sutara79-jumbotron-position') == $position) ? 'checked' : '';
    }
}
new Sutara79Options();
