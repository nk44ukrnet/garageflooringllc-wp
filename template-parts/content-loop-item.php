<?php
?>
<article>
    <div class="hb-grid-of-posts-loop__inner">
        <div class="hb-grid-of-posts-loop__featured">
            <?php garageflooringllc_post_thumbnail(); ?>
        </div>
        <header class="entry-header colored">
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title colored">', '</h1>');
            else :
                the_title('<h3 class="entry-title colored"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="colored">', '</a></h2>');
            endif;
            ?>
        </header><!-- .entry-header -->
        <div class="hb-grid-of-posts-loop__content-trimmed">
            <?php echo wp_trim_words(get_the_content(), 25); ?>
        </div>
    </div>
    <a href="<?php echo get_the_permalink(); ?>"
       class="hb-btn btn btn_sm text-light"><?php _e('Read More', 'garageflooringllc'); ?></a>
</article>