<?php
/**
 * Template Name: Product Category
 */
get_header();
yoast_breadcrumbs();
?>
<?php if (have_posts()) { ?>
    <div class="hb-category-page">

        <?php
        while (have_posts()) {
            the_post();

            $category_id = get_queried_object_id(); // Get the current category ID
            $image_id = get_term_meta($category_id, 'thumbnail_id', true); // Get the image ID for the category
            $image_url = wp_get_attachment_image_src($image_id, 'full'); // Get the full size image URL
            $term = get_queried_object(); //product description (default wp)


            //acf
            $custom_links = get_field('custom_links');

            ?>
            <div class="hb-category-page-hero padding-block">
                <div class="hb-container">
                    <div class="hb-category-page-hero__holder">
                        <div class="hb-category-page-hero__item">
                            <h1 class="colored2"><?php echo get_the_title(); ?></h1>
                            <?php if (!empty(get_the_content())) { ?>
                                <div class="hb-category-page-hero__text">
                                    <?php echo get_the_content(); ?>
                                </div>
                            <?php } ?>
                        </div>

                        <?php if (has_post_thumbnail()) { ?>
                            <div class="hb-category-page-hero__item hb-category-page-hero__item_img">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                        <?php } ?>
                        <?php if (!empty($image_url)) { ?>
                            <div class="hb-category-page-hero__item hb-category-page-hero__item_img">
                                <img src="<?php echo esc_url($image_url[0]) ?>"
                                     alt="<?php esc_html_e(get_the_title(), 'garageflooringllc'); ?>">
                            </div>
                        <?php } ?>
                    </div>

                    <?php if (have_rows('custom_links')) { ?>
                        <div class="hb-category-page-hero__links">
                            <?php
                            while (have_rows('custom_links')) {
                                the_row();
                                $sub_field_link = get_sub_field('select_desired_link');
                                ?>
                                <?php if (
                                    !empty($sub_field_link['url']) && !empty($sub_field_link['title']) && !empty($sub_field_link)) { ?>
                                    <a href="<?php echo $sub_field_link['url']; ?>"
                                       class="btn btn_sm btn-color-light btn-bold"><?php echo $sub_field_link['title']; ?></a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!--            Badges-->
            <?php
            $badges = get_field('enable_badges_section');
            $badge_instructions = get_field('badge_instructions');
            $badge_project_profiles = get_field('badge_project_profiles');
            $badge_data_sheet = get_field('badge_data_sheet');
            $badge_safety_data_sheet = get_field('badge_safety_data_sheet');
            $badge_photos = get_field('badge_photos');
            $badge_shipping = get_field('badge_shipping');
            $badge_color_chart = get_field('badge_color_chart');
            $badge_download = get_field('badge_download');
            $badge_reviews = get_field('badge_reviews');
            $badge_videos = get_field('badge_videos');
            $badge_designer = get_field('badge_designer');
            $badge_calculator = get_field('badge_calculator');
            $badge_sample = get_field('badge_sample');
            $badge_warranty = get_field('badge_warranty');
            $badge_custom1 = get_field('badge_custom_1');
            $badge_custom2 = get_field('badge_custom_2');
            $badge_custom3 = get_field('badge_custom_3');
            ?>

            <?php if (!empty($badges)) { ?>
                <div class="hb-single-badges padding-block">
                    <div class="hb-container">
                        <div class="hb-single-badges__holder">

                            <?php
                            if (!empty($badge_instructions['enabled'][0])) {
                                badge_output($badge_instructions);
                            }
                            if (!empty($badge_project_profiles['enabled'][0])) {
                                badge_output($badge_project_profiles);
                            }
                            if (!empty($badge_data_sheet['enabled'][0])) {
                                badge_output($badge_data_sheet);
                            }
                            if (!empty($badge_safety_data_sheet['enabled'][0])) {
                                badge_output($badge_safety_data_sheet);
                            }
                            if (!empty($badge_photos['enabled'][0])) {
                                badge_output($badge_photos);
                            }
                            if (!empty($badge_shipping['enabled'][0])) {
                                badge_output($badge_shipping);
                            }
                            if (!empty($badge_color_chart['enabled'][0])) {
                                badge_output($badge_color_chart);
                            }
                            if (!empty($badge_download['enabled'][0])) {
                                badge_output($badge_download);
                            }
                            if (!empty($badge_reviews['enabled'][0])) {
                                badge_output($badge_reviews);
                            }
                            if (!empty($badge_videos['enabled'][0])) {
                                badge_output($badge_videos);
                            }
                            if (!empty($badge_designer['enabled'][0])) {
                                badge_output($badge_designer);
                            }
                            if (!empty($badge_calculator['enabled'][0])) {
                                badge_output($badge_calculator);
                            }
                            if (!empty($badge_sample['enabled'][0])) {
                                badge_output($badge_sample);
                            }
                            if (!empty($badge_warranty['enabled'][0])) {
                                badge_output($badge_warranty);
                            }
                            if (!empty($badge_custom1['enabled'][0])) {
                                badge_output($badge_custom1);
                            }
                            if (!empty($badge_custom2['enabled'][0])) {
                                badge_output($badge_custom2);
                            }
                            if (!empty($badge_custom3['enabled'][0])) {
                                badge_output($badge_custom3);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--            /Badges-->

            <!--            Optional wide block 1 -->
            <?php
            $optional_block_1_enabled = get_field('optional_block_1_enabled');
            ?>
            <?php if (!empty($optional_block_1_enabled)) { ?>
                <div class="hb-wide-block padding-block">
                    <div class="hb-container">
                        <?php $optional_block_1_heading = get_field('optional_block_1_heading'); ?>
                        <?php if (!empty($optional_block_1_heading)) { ?>
                            <h2 class="colored"><?php echo $optional_block_1_heading; ?></h2>
                        <?php } ?>
                        <?php if (have_rows('optional_block_1_repeater')) { ?>

                            <?php while (have_rows('optional_block_1_repeater')) {
                                the_row();
                                $sub_value_text_field = get_sub_field('text_field');
                                $sub_value_column_1_content = get_sub_field('column_1_content');
                                $sub_value_column_1_image = get_sub_field('column_1_image');
                                $sub_value_image_alt_text = get_sub_field('image_alt_text');
                                $sub_value_suggested_product_repeater = get_sub_field('suggested_product_repeater');
                                ?>
                                <?php if (!empty($sub_value_text_field)) { ?>
                                    <?php echo $sub_value_text_field; ?>
                                <?php } ?>

                                <?php if (!empty($sub_value_column_1_content) || !empty($sub_value_column_1_image)) { ?>
                                    <div class="hb-wide-block__holder">
                                        <?php if (!empty($sub_value_column_1_content)) { ?>
                                            <div class="hb-wide-block__item">
                                                <?php echo $sub_value_column_1_content; ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (!empty($sub_value_column_1_image)) { ?>
                                            <div class="hb-wide-block__item hb-wide-block__item_img">
                                                <img src="<?php echo $sub_value_column_1_image; ?>"
                                                     alt="<?php echo $sub_value_image_alt_text; ?>" loading="lazy">
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <?php if (have_rows('suggested_product_repeater')) { ?>
                                    <div class="hb-products-loop padding-block-sm">
                                        <div class="hb-products-loop__holder">
                                            <?php while (have_rows('suggested_product_repeater')) {
                                                the_row();
                                                $select_product = get_sub_field('select_product');
                                                $product = wc_get_product($select_product->ID);
                                                ?>
                                                <?php if (!empty($select_product)) { ?>
                                                    <div class="hb-products-loop__item">
                                                        <div class="hb-products-loop__content">
                                                            <a href="<?php echo $select_product->guid; ?>"
                                                               class="hb-index-products-list__img-link">
                                                                <img src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"
                                                                     alt="<?php echo $select_product->post_title; ?>"
                                                                     loading="lazy"
                                                                     class="hb-products-loop__img">
                                                            </a>
                                                            <a href="<?php echo $select_product->guid; ?>"
                                                               class="hb-index-products-list__title">
                                                                <h3 class="hb-products-loop__title colored2"><?php echo $select_product->post_title; ?></h3>
                                                            </a>
                                                            <div class="hb-products-loop__price">
                                                                <strong><?php _e('From: ', 'garageflooringllc'); ?></strong>
                                                                <?php echo get_woocommerce_currency_symbol(); ?><?php echo $product->get_price(); ?>
                                                            </div>
                                                            <p class="hb-products-loop__desc">
                                                                <?php echo wp_trim_words($select_product->post_content, 10); ?></p>
                                                        </div>
                                                        <a href="<?php echo $select_product->guid; ?>"
                                                           class="btn btn_sm btn-color-light"><?php _e('Learn More', 'garageflooringllc'); ?></a>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>

                        <?php $optional_block_1_end_block_text = get_field('optional_block_1_end_block_text'); ?>

                        <?php if (!empty($optional_block_1_end_block_text)) { ?>
                            <?php echo $optional_block_1_end_block_text; ?>
                        <?php } ?>

                    </div>
                </div>
            <?php } ?>
            <!--            /Optional wide block 1 -->


            <?php
            $featured_products_title = get_field('featured_products_title');
            $featured_products_list = get_field('featured_products_list');
            ?>

            <?php if (!empty($featured_products_title) || !empty($featured_products_list)) { ?>
                <div class="hb-category-page-featured">
                    <div class="hb-container">
                        <?php if (!empty($featured_products_title)) { ?>
                            <h2 class="hb-category-page-featured__heading text-center colored2"><?php echo $featured_products_title; ?></h2>
                        <?php } ?>
                        <?php if (have_rows('featured_products_list')) { ?>
                            <div class="hb-category-page-featured__holder">
                                <?php while (have_rows('featured_products_list')) {
                                    the_row();
                                    $sub_val_product = get_sub_field('product');
                                    $product = wc_get_product($sub_val_product->ID);
                                    ?>
                                    <?php if (!empty($sub_val_product)) { ?>
                                        <div class="hb-category-page-featured__item">

                                            <div class="hb-category-page-featured__content">
                                                <a href="<?php echo $sub_val_product->guid; ?>">
                                                    <img src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"
                                                         alt="<?php echo $sub_val_product->post_title; ?>"
                                                         loading="lazy" class="hb-category-page-featured__img">
                                                </a>
                                                <a href="<?php echo $sub_val_product->guid; ?>">
                                                    <h3 class="hb-category-page-featured__title colored2"><?php echo $sub_val_product->post_title; ?></h3>
                                                </a>
                                                <p class="hb-category-page-featured__price">
                                                    <strong><?php _e('From: ', 'garageflooringllc'); ?></strong>
                                                    <?php echo get_woocommerce_currency_symbol(); ?><?php echo $product->get_price(); ?>
                                                </p>
                                                <p class="hb-single-product-accessories__desc">
                                                    <?php echo wp_trim_words($sub_val_product->post_content, 10); ?>
                                                </p>
                                            </div>
                                            <a href="<?php echo $sub_val_product->guid; ?>"
                                               class="btn btn_sm btn-color-light"><?php _e('Learn More', 'garageflooringllc'); ?></a>

                                        </div>
                                    <?php } ?>

                                <?php } //while ?>
                            </div> <!-- __holder -->
                        <?php } //if ?>

                    </div>
                </div>
            <?php } ?>

            <!-- (product loop) -->
            <?php
            $select_product_category = get_field('select_product_category');
            ?>
            <?php if (!empty($select_product_category)) { ?>
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'product',
                    'product_cat' => $select_product_category->slug,
                );
                $loop = new WP_Query($args);
                ?>
                <div class="hb-products-loop padding-block">
                    <div class="hb-container">
                        <h2 class="hb-category-page-featured__heading text-center colored2"><?php echo get_the_title(); ?></h2>
                        <div class="hb-products-loop__holder">
                            <?php
                            while ($loop->have_posts()) : $loop->the_post();
                                global $product;
                                ?>

                                <div class="hb-products-loop__item">
                                    <div class="hb-products-loop__content">
                                        <a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>"
                                           class="hb-index-products-list__img-link">
                                            <img
                                                    src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"
                                                    alt="<?php echo get_the_title(); ?>" loading="lazy"
                                                    class="hb-products-loop__img">
                                        </a>
                                        <a href="<?php the_permalink(); ?>"
                                           class="hb-index-products-list__title">
                                            <h3 class="hb-products-loop__title colored2"><?php echo get_the_title(); ?></h3>
                                        </a>
                                        <div class="hb-products-loop__price">
                                            <strong>
                                                <?php _e('From:', 'garageflooringllc'); ?>
                                            </strong>
                                            <?php echo get_woocommerce_currency_symbol(); ?><?php echo $product->get_price(); ?>
                                        </div>
                                        <p class="hb-products-loop__desc">
                                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                                        </p>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"
                                       class="btn btn_sm btn-color-light"><?php _e('Learn More', 'hb'); ?></a>
                                </div>

                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- /(product loop) -->

            <!--testimonials-->
            <?php
            $testimonials_heading = get_field('testimonials_heading');
            ?>
            <?php if (!empty($testimonials_heading) || have_rows('testimonials_repeater')) { ?>
                <div class="hb-category-page-testimonials padding-block">
                    <div class="hb-container">

                        <?php if (!empty($testimonials_heading)) { ?>
                            <h2 class="hb-category-page-testimonials__heading text-center colored2">
                                <?php echo $testimonials_heading; ?>
                            </h2>
                        <?php } ?>

                        <?php
                        if (have_rows('testimonials_repeater')) {
                            ?>
                            <div class="hb-category-page-testimonials__swiper">
                                <!-- Slider main container -->
                                <div class="swiper hb-category-page-testimonials-swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <?php
                                        while (have_rows('testimonials_repeater')) {
                                            the_row();
                                            $sub_field_text = get_sub_field('text');
                                            $sub_field_author_name = get_sub_field('author_name');
                                            ?>

                                            <div class="swiper-slide">
                                                <div class="hb-category-page-testimonials__item text-center">

                                                    <?php if (!empty($sub_field_text)) { ?>
                                                        <div class="hb-category-page-testimonials__text">
                                                            <?php echo $sub_field_text; ?>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (!empty($sub_field_author_name)) { ?>
                                                        <h3 class="hb-category-page-testimonials__author text-center colored2"><?php echo $sub_field_author_name; ?></h3>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <!-- block end -->
                                    </div>

                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php } ?>
            <!--/testimonials-->

            <!-- bottom extra text -->
            <?php
            $extra_text = get_field('extra_text');
            ?>
            <?php if (!empty($extra_text)) { ?>
                <div class="hb-category-page-info padding-block">
                    <div class="hb-container">
                        <?php echo $extra_text; ?>
                    </div>
                </div>
            <?php } ?>

            <!-- /bottom extra text -->

            <!-- optional block products manual -->
            <?php
            $enable_optional_block_products = get_field('enable_optional_block_products');
            $optional_block_products_title = get_field('optional_block_products_title');
            $optional_block_products_description = get_field('optional_block_products_description');
            ?>
            <?php if (!empty($enable_optional_block_products)) { ?>
                <div class="hb-category-page-products-manual padding-block-sm">
                    <div class="hb-container">
                        <?php if (!empty($optional_block_products_title)) { ?>
                            <h2 class="hb-category-page-products-manual__heading colored"><?php echo $optional_block_products_title; ?></h2>
                        <?php } ?>
                        <?php if (!empty($optional_block_products_description)) { ?>
                            <div class="hb-category-page-products-manual__intro">
                                <?php echo $optional_block_products_description; ?>
                            </div>
                        <?php } ?>
                        <?php
                        if (have_rows('repeater_name')) {
                            ?>
                            <!--block start-->
                            <div class="hb-category-page-products-manual__holder padding-block-sm">
                                <?php
                                while (have_rows('repeater_name')) {
                                    the_row();
                                    $sub_field_extra_promo_field = get_sub_field('extra_promo_field');
                                    $sub_field_title = get_sub_field('title');
                                    $sub_field_description = get_sub_field('description');
                                    $sub_field_image_url = get_sub_field('image');
                                    $sub_field_link = get_sub_field('link');

                                    $link_url = '#!';
                                    if(!empty($sub_field_link['url'])) {
                                        $link_url = $sub_field_link['url'];
                                    }
                                    ?>
                                    <div class="hb-category-page-products-manual__item">
                                        <?php if (!empty($sub_field_extra_promo_field)) { ?>
                                            <div class="hb-category-page-products-manual__promo"><?php echo $sub_field_extra_promo_field; ?></div>
                                        <?php } ?>
                                        <?php if (!empty($sub_field_title)) { ?>
                                            <h2>
                                                <a href="<?php echo $link_url; ?>" class="colored text-no-underline">
                                                    <?php echo $sub_field_title; ?>
                                                </a>
                                            </h2>
                                        <?php } ?>

                                        <div class="hb-category-page-products-manual__inner">
                                            <?php if (!empty($sub_field_description)) { ?>
                                                <div class="hb-category-page-products-manual__text">
                                                    <?php echo $sub_field_description; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (!empty($sub_field_image_url)) { ?>
                                                <img src="<?php echo $sub_field_image_url; ?>"
                                                     alt="<?php echo esc_html($sub_field_title); ?>" loading="lazy" class="hb-category-page-products-manual__img">
                                            <?php } ?>
                                        </div>
                                        <?php if ( !empty($sub_field_link) ) { ?>
                                            <div class="hb-category-page-products-manual__bot">
                                                <a href="<?php echo $sub_field_link['url']; ?>" class="btn btn_sm text-light"><?php echo $sub_field_link['title']; ?></a>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <!--    Items -->
                                    <?php
                                }
                                ?>
                            </div>
                            <!-- block end -->
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php } ?>
            <!-- /optional block products manual -->

            <?php
            //the_content();
        }
        ?>
    </div>
<?php } ?>
<?php get_footer(); ?>