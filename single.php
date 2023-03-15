<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package garageflooringllc
 */

get_header();

yoast_breadcrumbs();
?>

    <main id="primary" class="site-main">
        <?php if (!is_product()) { //add container to non product single templates ?>
        <div class="hb-container"> <!-- hb-container -->
            <?php } ?>

            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', get_post_type());

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'garageflooringllc') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'garageflooringllc') . '</span> <span class="nav-title">%title</span>',
                    )
                );

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
            <?php
            if (!is_product()) {
            ?>
        </div> <!--hb-container-->
    <?php
    }
    ?>
    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
