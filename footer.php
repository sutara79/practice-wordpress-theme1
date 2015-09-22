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
    <div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>