<footer>
  <div id="footer-inner">
    <nav id="footernavi">
      <?php wp_nav_menu(array(
        'theme_location'=>'footer-menu',
        'menu' => 'footernavi',
        'items_wrap' => '<ul id="%1$s" class="%2$s clearfix">%3$s</ul>'
      )); ?>
    </nav>
    <div id="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>