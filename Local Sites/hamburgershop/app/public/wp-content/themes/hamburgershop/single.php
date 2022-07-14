<?php get_header(); ?>    
       <div class="l-thumbnail">
                <section class="c-feature">
                <?php if (has_post_thumbnail()) : ?>
                <?php else : ?>
	            <?php the_post_thumbnail('full', array('class' => '')); ?>
               <?php endif ; ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail_cheeseburger.jpg">
                    <h1 class="c-title--h1"><?php the_title(); ?></h1>
                </section>
            </div>
            <div class="l-contents__wrapper">
                <div class="l-contents">
                    <div class="p-format">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
            <div class="page-links">
+            <?php wp_link_pages(); // 記事内ページャー ?>
+        </div>
          </main>
          <?php get_sidebar(); ?>
   <?php get_footer(); ?>
