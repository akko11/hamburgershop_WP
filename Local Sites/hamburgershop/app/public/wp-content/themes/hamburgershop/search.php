<?php get_header(); ?>
            <div class="l-thumbnail">
                <section class="c-feature p-thumbnail--archive">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail_three-burgers.jpg">
                    <h1 class="c-title--h1">Search:<span>チーズバーガー</span></h1>
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
                    </div>
                </div>
            </div>
        </main>
        <?php get_sidebar(); ?>
   <?php get_footer(); ?>
