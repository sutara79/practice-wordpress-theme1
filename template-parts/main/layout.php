<?php
/**
 * メイン部分
 * (フロントページを除く、全てのページのメイン部分として共用する)
 * @package WordPress\sutara79
 * @since 1.0.0
 */

get_header() ?>
<div class="main">
    <div class="main__title__wrapper">
        <div class="container">
            <h1 class="main__title">
                <?php
                // メインコンテンツのタイトル
                echo $sutara79_main['title'];
                ?>
            </h1>
        </div>
    </div>
    <div class="container main__contents__wrapper">
        <div class="main__contents">
            <?php
            // メインコンテンツの本文
            get_template_part(
                $sutara79_main['body-template'][0],
                $sutara79_main['body-template'][1]
            );
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer() ?>