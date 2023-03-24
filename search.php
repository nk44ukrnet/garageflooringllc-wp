<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package garageflooringllc
 */

get_header();
yoast_breadcrumbs();
?>

	<main id="primary" class="site-main padding-block-sm hb-container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'garageflooringllc' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
        <div class="hb-grid-of-posts-loop">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'loop-item' );

			endwhile;
?>
            </div>  <!-- .hb-grid-of-posts-loop -->

    <?php if(paginate_links()) {
        ?>
        <div class="hb-pagination padding-block-sm colored">
            <?php echo paginate_links(); ?>
        </div>
        <?php } ?>
<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
