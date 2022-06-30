                    <ul>
                    <?php
                      if( have_posts() ) :
                       while( have_posts() ) :
                           the_post(); ?>
                        <li class="p-media">
                            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/section_01.jpg"></div>
                            <div class="p-media__text">
                                <h3 class="p-media__title"><?php the_title(); ?></h3>
                                <h4 class="p-media__subtitle">小見出しが入ります</h4>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <a href="<?php the_permalink(); ?>"><button class="c-button--roundedcorners p-media__button">詳しく見る</button></a>
                            </div>
                        </li>
                        <?php endwhile;
                        else :
                        ?><p>表示する内容がありません</p><?php endif; ?>
                    </ul>
