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
  <h1>
    <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
  </h1>
</header>
<nav id="globalnavi">
  <?php wp_nav_menu(array(
    'theme_location'=>'header-menu',
    'menu' => 'globalnavi',
    'depth' => 3,
    'items_wrap' => '<ul id="%1$s" class="%2$s clearfix">%3$s</ul>'
  )); ?>
</nav>