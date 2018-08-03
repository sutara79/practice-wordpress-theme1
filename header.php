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
    <input type="checkbox" id="mobile-gnav-checkbox" class="mobile-gnav-checkbox">
    <h1 class="header-logo">
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <div class="mobile-gnav-btn-wrapper">
      <label for="mobile-gnav-checkbox" class="mobile-gnav-btn icon-menu"></label>
    </div>
    <label for="mobile-gnav-checkbox" class="mobile-gnav-cover"></label>
    <nav class="mobile-globalnavi">
      <div class="mobile-gnav-close-wrapper">
        <label for="mobile-gnav-checkbox" class="mobile-gnav-close icon-cross"></label>
      </div>
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