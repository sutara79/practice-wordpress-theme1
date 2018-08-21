<?php
/**
 * ヘッダー
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */
?>
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
<header class="header">
    <input type="checkbox" id="mobile-gnav__checkbox" class="mobile-gnav__checkbox">
    <div class="header__main">
        <div class="container">
            <div class="header__inner">
                <h2 class="header__logo">
                    <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                </h2>
                <div class="mobile-gnav__btn-wrapper">
                    <label for="mobile-gnav__checkbox" class="mobile-gnav__btn icon-menu"></label>
                </div>
                <nav class="pc-gnav">
                    <h4 class="pc-gnav__header always-hidden">PC向けグローバルメニュー</h4>
                    <?php wp_nav_menu([
                        'container' => false,
                        'menu' => 'globalnavi',
                        'depth' => 3,
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ]); ?>
                </nav>
            </div>
        </div>
    </div>
    <nav class="mobile-gnav">
        <h4 class="mobile-gnav__header always-hidden">モバイル向けグローバルメニュー</h4>
        <div class="container">
            <div class="mobile-gnav__inner">
                <?php wp_nav_menu(array(
                    'container' => false,
                    'menu' => 'globalnavi',
                    'depth' => 3,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                )); ?>
            </div>
        </div>
    </nav>
</header>
<?php
// 最下部に張り付くフッター
// https://coliss.com/articles/build-websites/operation/css/css-sticky-footer.html
?>
<div class="sticky-footer">