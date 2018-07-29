<?php
/**
 * ダッシュボードに設定項目を追加
 * ジャンボトロンの背景画像
 */
add_action('admin_menu', 'jumbotronImgMenu');

function jumbotronImgMenu() {
  add_options_page('ジャンボトロン', 'ジャンボトロン', 'manage_options', 'jumbotron-img-menu', 'jumbotronImgMenuPage');
  add_action('admin_init', 'registerjumbotronImg');
}

function registerjumbotronImg() {
  register_setting('jumbotron-img-group', 'jumbotron-img');
  register_setting('jumbotron-img-group', 'jumbotron-position');
}

function jumbotronImgMenuPage() {
?>
  <div class="wrap">
    <h1>ジャンボトロン</h1>
    <form method="post" action="options.php" novalidate="novalidate">
      <?php
        settings_fields('jumbotron-img-group');
        do_settings_sections('jumbotron-img-group');
      ?>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="jumbotron-img">背景画像 (URL)</label></th>
            <td>
              <input id="jumbotron-img" type="text" class="regular-text" name="jumbotron-img" value="<?php echo get_option('jumbotron-img'); ?>">
            </td>
          </tr>
          <tr>
            <th scope="row">位置</th>
            <td>
              <p>
                <label>
                  <input type="radio" name="jumbotron-position" value="top" <?php isChecked('top') ?>>
                  上端
                </label>
              </p>
              <p>
                <label>
                  <input type="radio" name="jumbotron-position" value="center" <?php isChecked('center') ?>>
                  中央
                </label>
              </p>
              <p>
                <label>
                  <input type="radio" name="jumbotron-position" value="bottom" <?php isChecked('bottom') ?>>
                  下端
                </label>
              </p>
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
  echo (get_option('jumbotron-position') == $position) ? 'checked' : '';
}