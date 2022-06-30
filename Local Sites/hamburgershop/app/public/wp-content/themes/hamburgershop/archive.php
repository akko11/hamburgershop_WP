<?php get_header(); ?>
<div class="l-thumbnail">
                <section class="c-feature p-thumbnail--archive">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail_three-burgers.jpg">
                    <h1 class="c-title--h1">Menu:
                    <?php if(is_category(8, 'hamburger')) : ?>
                        <span>ハンバーガー</span>
                    <?php endif; ?>
                    <?php if(is_category(7, 'drink')) : ?>
                        <span>ドリンク</span>
                    <?php endif; ?>
                    <?php if(is_category(6, 'side')) : ?>
                        <span>サイド</span>
                    <?php endif; ?>
                    <?php if(is_category(5, 'takeout')) : ?>
                        <span>テイクアウト</span>
                    <?php endif; ?>
                    <?php if(is_category(4, 'eatin')) : ?>
                        <span>イートイン</span>
                    <?php endif; ?>
                    </h1>
                </section>
            </div>
            <div class="l-contents__wrapper">
                <div class="l-contents">
                    <article class="p-description">
                        <h2 class="c-title--h2">小見出しが入ります</h2>
                        <p>
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </article>
                    <?php
                     $paged = get_query_var('paged') ? get_query_var('paged') : 1;    //pagedに渡す変数
                     query_posts( $query_string.'&posts_per_page=3&paged='.$paged);  //pagedとposts_per_pageの指定 
                    ?>

                     <?php get_template_part('media'); ?>
                     <div class="p-pager">
                    <?php
                    if(function_exists('wp_pagenavi')):
                    wp_pagenavi();    //wp_pagenavi()の呼び出し
                    endif;
                  wp_reset_query(); 
                  ?>

                    <!--    
                    <ul class="p-pager__pagination">
                            <li>page 1/10</li>
                            <li class="pre"><a href="#"><img src="images/pager_pre.png" alt="前へ"><span>前へ</span></a>
                            </li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li class="next"><a href="#"><span>次へ</span><img src="images/pager_next.png" alt="次へ"></a>
                            </li>
                        </ul>
                    -->

                    </div>


                </div>
            </div>
        </main>
        <?php get_sidebar(); ?>
   <?php get_footer(); ?>
