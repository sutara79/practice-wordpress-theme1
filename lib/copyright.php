<?php
/**
 * ダッシュボードに設定項目を追加
 * 著作権情報
 */

function sutara79_copyright() {
    add_options_page(__('著作権情報'), __('著作権情報'), 'manage_options', 'copyright-menu', 'sutara79_copyright_menu');
    add_action('admin_init', 'sutara79_register_copyright');
}
add_action('admin_menu', 'sutara79_copyright');

function sutara79_register_copyright() {
    register_setting('copyright-settings-group', 'copyright-name');
    register_setting('copyright-settings-group', 'copyright-year');
    register_setting('copyright-settings-group', 'copyright-year-current');
}

function sutara79_copyright_menu() {
    $current = '';
    if (get_option('copyright-year-current') === 'true') {
        $current = 'checked="checked"';
    }
    ?>
    <div class="wrap">
        <h1><?php echo __('著作権情報'); ?></h1>
        <form method="post" action="options.php" novalidate="novalidate">
            <?php
                settings_fields('copyright-settings-group');
                do_settings_sections('copyright-settings-group');
            ?>
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row"><label for="copyright-name"><?php echo __('著作権者 (英字)'); ?></label></th>
                        <td><input id="copyright-name" class="regular-text" type="text" name="copyright-name" value="<?php echo get_option('copyright-name'); ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="copyright-year"><?php echo __('初版の公開年'); ?></label></th>
                        <td><input type="number" id="copyright-year" class="regular-text" name="copyright-year" value="<?php echo get_option('copyright-year'); ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="copyright-year-current"><?php echo __('現在の年も表記する'); ?></label></th>
                        <td><input type="checkbox" id="copyright-year-current" name="copyright-year-current" value="true" <?php echo $current ?>></td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/**
 * 著作権情報を生成する
 *
 * @return string 著作権情報
 */
function sutara79_get_copyright() {
    $year = get_option('copyright-year');
    $current = date('Y');
    if (get_option('copyright-year-current') === 'true' &&
        $first < $current) {
        $year = "$first-$current";
    }

    return '&copy; ' . $year . ' ' . get_option('copyright-name');
}
