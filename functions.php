<?php
/**
 * カスタムメニューを登録
 */
add_action('init', 'registerMyMenu');
function registerMyMenu() {
  // ヘッダー部分にグローバルナビを登録
  register_nav_menu('header-menu', __('ヘッダーメニュー'));
  // フッター部分にフッターナビを登録
  register_nav_menu('footer-menu', __('フッターメニュー'));
}

/**
 * ダッシュボードでの設定項目を追加
 */
add_action('admin_menu', 'copyrightMenu');

function copyrightMenu() {
  add_options_page('著作権情報', '著作権情報', 'manage_options', 'copyright-menu', 'copyrightMenuPage');
  add_action( 'admin_init', 'registerCopyrightSettings' );
}

function registerCopyrightSettings() {
  register_setting( 'copyright-settings-group', 'copyright-name' );
  register_setting( 'copyright-settings-group', 'copyright-year' );
}

function copyrightMenuPage() {
?>
  <div class="wrap">
    <h2>著作権情報</h2>
    <form method="post" action="options.php">
      <?php
        settings_fields( 'copyright-settings-group' );
        do_settings_sections( 'copyright-settings-group' );
      ?>
      <p>
        <label for="copyright-name">著作権者</label>
        <input type="text" id="copyright-name" class="regular-text" name="copyright-name" value="<?php echo get_option('copyright-name'); ?>">
      </p>
      <p>
        <label for="copyright-year">最初の発行年</label>
        <input type="text" id="copyright-year" class="regular-text" name="copyright-year" value="<?php echo get_option('copyright-year'); ?>">
      </p>
      <?php submit_button(); ?>
    </form>
  </div>
<?php
}
?>
