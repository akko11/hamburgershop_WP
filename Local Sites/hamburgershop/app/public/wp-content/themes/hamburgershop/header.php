<!doctype html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <title>hamburger | <?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="">
</head>
<body>
    <div class="c-layout--grid">
        <main class="l-main">
          <header class="l-header">
                <div class="p-header">
                 <div class="p-header__title">
                  <h1 class="c-title--logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                 </div>
                    <?php get_search_form(); ?>
                </div>
                <button class="p-header__open">Menu</button>
                <?php wp_head(); ?>
            </header>