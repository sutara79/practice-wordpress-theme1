<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description'); ?>">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head(); ?>
</head>
<body>
<header>
  <div class="container header-inner">
    <h1 class="site-logo">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <div class="mobile-menu-btn-wrapper">
      <label for="mobile-menu-checkbox" class="mobile-menu-btn icon-menu"></label>
    </div>
    <input type="checkbox" id="mobile-menu-checkbox">
    <label for="mobile-menu-checkbox" class="mobile-menu-cover"></label>
    <nav class="mobile-globalnavi">
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location'=>'header-menu',
        'menu' => 'globalnavi',
        'depth' => 3,
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
      )); ?>
    </nav>
    <nav class="globalnavi">
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location'=>'header-menu',
        'menu' => 'globalnavi',
        'depth' => 3,
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
      )); ?>
    </nav>
  </div>
</header>