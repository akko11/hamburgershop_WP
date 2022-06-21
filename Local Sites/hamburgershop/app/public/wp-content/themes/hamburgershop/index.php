<!doctype html>
<html lang="UTF-8">

<head>
    <meta charset="UTF-8">
    <title>hamburger | ダミーサイト</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="">
</head>

<body <?php body_class( $class ); ?>>
    <div class="c-layout--grid">
        <main class="l-main">
            <?php get_header(); ?>
            <div class="l-thumbnail">
                <section class="c-feature p-thumbnail--top">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail_01.jpg">
                    <h2>ダミーサイト</h2>
                </section>
            </div>
            <div class="l-contents__wrapper">
                <div class="p-card__wrapper">
                    <section class="p-card01">
                        <h3 class="c-title--underbar">Take Out</h3>
                        <ul class="p-card__inner">
                            <li>
                                <h4>Take Out</h4>
                                <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                            </li>
                            <li>
                                <h4>Take Out</h4>
                                <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                            </li>
                        </ul>
                    </section>
                    <section class="p-card02">
                        <h3 class="c-title--underbar">Eat In</h3>
                        <ul class="p-card__inner">
                            <li>
                                <h4>Take Out</h4>
                                <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                            </li>
                            <li>
                                <h4>Take Out</h4>
                                <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="p-map__wrapper">
                    <section class="p-map">
                        <div class="p-map__overlay"></div>
                        <h3 class="c-title--underbar">見出しが入ります</h3>
                        <p>
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </section>
                </div>
            </div>
        </main>
        <?php get_sidebar(); ?>
   <?php get_footer(); ?>
