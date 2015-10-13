<?php
/**
 * フッター
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */

/**
 * 著作権の発行年の表示形式に従って文字列を生成する
 */
function getCopyrightYear() {
  $first = get_option('copyright-year');
  $current = date('Y');
  if (
    get_option('copyright-year-current') === 'true' &&
    $first != $current
  ) {
    return "$first-$current";
  }
  return $first;
}
?>
<footer>
  <div class="footer-inner">
    <nav class="footernavi">
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location'=>'footer-menu',
        'menu' => 'footernavi',
        'items_wrap' => '<ul id="%1$s" class="%2$s clearfix">%3$s</ul>'
      )); ?>
    </nav>
    <div class="copyright">&copy; <?php echo getCopyrightYear(); ?> <?php echo get_option('copyright-name'); ?></div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>