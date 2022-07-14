<?php get_header(); ?>
            <div class="l-thumbnail">
            <section class="c-feature">
                <?php if (has_post_thumbnail()) : ?>
                <?php else : ?>
	            <?php the_post_thumbnail('full', array('class' => '')); ?>
               <?php endif ; ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail_shop.jpg">
                    <h1 class="c-title--h1"><?php the_title(); ?></h1>
                </section>            
            </div>
            <div class="l-contents__wrapper">
                <div class="l-contents">
                    <div class="p-format">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </main>
        <?php get_sidebar(); ?>
   <?php get_footer(); ?>
