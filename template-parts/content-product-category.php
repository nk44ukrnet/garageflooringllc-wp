<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garageflooringllc
 */
?>

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
                        <?php if (!empty($term->description)) { ?>
                            <div class="hb-category-page-hero__text">
                                <?php echo $term->description; ?>
                            </div>
                        <?php } ?>
                    </div>
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
                            <a href="<?php echo $sub_field_link['url']; ?>"
                               title="<?php echo $sub_field_link['title']; ?>"
                               class="btn btn_sm btn-color-light btn-bold"><?php echo $sub_field_link['title']; ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>

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
                            <?php } //while ?>
                        </div> <!-- __holder -->
                    <?php } //if ?>

                </div>
            </div>
        <?php } ?>

        <!-- the content -->
        <div class="hb-category-page-content padding-block">
            <div class="hb-container">
                <?php echo get_the_content(); ?>
            </div>
        </div>
        <!-- /the content -->

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

        <?php
        //the_content();
    }
    ?>
</div>

