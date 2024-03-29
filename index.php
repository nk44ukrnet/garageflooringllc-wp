<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garageflooringllc
 */

get_header();
yoast_breadcrumbs();
?>

	<main id="primary" class="site-main hb-container">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
        ?>
        <div class="hb-grid-of-posts-loop">
        <?php
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );
                get_template_part( 'template-parts/content', 'loop-item' );
                ?>

            <?php
			endwhile;
			?>
        </div>  <!-- .hb-grid-of-posts-loop -->
        <?php

			//the_posts_navigation();
?>
            <?php if(paginate_links()) {
            ?>
            <div class="hb-pagination padding-block-sm colored">
                <?php echo paginate_links(); ?>
            </div>
            <?php
        } ?>
        <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
