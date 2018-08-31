<?php
/**
 * フッター
 * @package WordPress\sutara79
 * @since 1.0.0
 */
?>
</div><?php // 最下部に張り付くフッターの終了タグ https://coliss.com/articles/build-websites/operation/css/css-sticky-footer.html ?>
<footer class="footer">
    <nav class="site-map">
        <div class="container">
            <h3 class="site-map__title"><?php _e('サイトマップ') ?></h3>
            <div class="site-map__inner">
                <?php wp_nav_menu(array(
                    'container' => false,
                    'menu' => 'globalnavi',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                )); ?>
            </div>
        </div>
    </nav>
    <div class="copyright">
        <div class="container">
            <?php echo sutara79_get_copyright(); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>