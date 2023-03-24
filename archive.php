<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garageflooringllc
 */

get_header();
yoast_breadcrumbs();
?>

    <main id="primary" class="site-main hb-container">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title colored">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header><!-- .page-header -->
            <div class="hb-grid-of-posts-loop">
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    //get_template_part( 'template-parts/content', get_post_type() );
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
                           class="hb-btn btn btn_sm"><?php _e('Read More', 'garageflooringllc'); ?></a>
                    </article>
                <?php
                endwhile;

                //the_posts_navigation();
                ?>
            </div>  <!-- .hb-grid-of-posts-loop -->
        <?php if(paginate_links()) {
            ?>
                <div class="hb-pagination padding-block-sm colored">
                    <?php echo paginate_links(); ?>
                </div>
            <?php
            } ?>
        <?php
        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
