<?php get_header(); ?>
            <div class="l-thumbnail">
                <section class="c-feature p-thumbnail--archive">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail_three-burgers.jpg">
                    <h1 class="c-title--h1">Search:<span><?php the_search_query(); ?></span></h1>
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
                    <?php query_posts($query_string.'&posts_per_page=5'); ?>
                    <?php
                    if (isset($_GET['s']) && empty($_GET['s'])) {
                    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
                    } else {
                    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
                    }
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
