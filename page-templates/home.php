<?php
/*
 * Template Name: Home page
 */
get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <?php
        $enable_hero_section = get_field('enable_hero_section');
        ?>

        <?php if (!empty($enable_hero_section)) { ?>

            <?php $hero_background_image = get_field('hero_background_image'); ?>

            <div class="hb-front-hero" style="background-image: url(<?php echo $hero_background_image; ?>)">
                <div class="hb-container2">


                    <?php if (have_rows('hero_categories_repeater')) {
                        ?>            <!--block start-->
                        <div class="hb-front-hero__holder">
                            <?php while (have_rows('hero_categories_repeater')) {
                                the_row();
                                $sub_field_category_name_and_url = get_sub_field('category_name_and_url');
                                $sub_field_category_image = get_sub_field('category_image');
                                ?>
                                <a href="<?php echo $sub_field_category_name_and_url['url']; ?>"
                                   class="hb-front-hero__item">
                                    <?php if (!empty($sub_field_category_image)) { ?>
                                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo $sub_field_category_image; ?>"
                                 alt="<?php echo $sub_field_category_name_and_url['title']; ?>"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                                    <?php } ?>
                                    <p class="hb-front-hero__cat-name"><?php echo $sub_field_category_name_and_url['title']; ?></p>
                                </a>
                                <!--    Items -->
                                <?php
                            } ?>
                        </div>
                        <!-- block end -->
                    <?php } ?>

                    <?php $hero_text_before_heading = get_field('hero_text_before_heading'); ?>

                    <?php if (!empty($hero_text_before_heading)) { ?>
                        <p class="hb-front-hero__pre-title font2"><?php echo $hero_text_before_heading; ?></p>
                    <?php } ?>

                    <?php $hero_heading_text = get_field('hero_heading_text'); ?>

                    <?php if (!empty($hero_heading_text)) { ?>
                        <h1 class="hb-front-hero__title font2"><?php echo $hero_heading_text; ?></h1>
                    <?php } ?>


                </div>
            </div>
        <?php } ?>


        <?php $enable_saving_section = get_field('enable_saving_section'); ?>

        <?php if (!empty($enable_saving_section)) { ?>
            <div class="hb-front-savings">
                <div class="hb-container2">

                    <div class="hb-front-savings__top">
                        <?php
                        $savings_text_under_year = get_field('savings_text_under_year');
                        ?>
                        <div class="hb-front-savings__highlight">
                            <span class="hb-front-savings__highlight-year"><?php echo date('Y'); ?></span>
                            <?php if (!empty($savings_text_under_year)) { ?>
                                <span class="hb-front-savings__highlight-slogan"><?php echo $savings_text_under_year; ?></span>
                            <?php } ?>
                        </div>
                        <div class="hb-front-savings__desc">
                            <?php $savings_text_block_pre_heading = get_field('savings_text_block_pre_heading'); ?>
                            <?php if (!empty($savings_text_block_pre_heading)) { ?>
                                <strong><?php echo $savings_text_block_pre_heading; ?></strong>
                            <?php } ?>

                            <?php $savings_text_block_heading = get_field('savings_text_block_heading'); ?>
                            <?php if (!empty($savings_text_block_heading)) { ?>
                                <h2><?php echo $savings_text_block_heading; ?></h2>
                            <?php } ?>

                            <?php $savings_text_block_text_content = get_field('savings_text_block_text_content'); ?>
                            <?php if (!empty($savings_text_block_text_content)) { ?>
                                <p>
                                    <?php echo $savings_text_block_text_content; ?>
                                </p>
                            <?php } ?>

                            <?php $savings_text_content_button = get_field('savings_text_content_button'); ?>
                            <?php if (!empty($savings_text_content_button)) { ?>
                                <a href="<?php echo $savings_text_content_button['url']; ?>"
                                   class="hb-front-savings__more"><?php echo $savings_text_content_button['title']; ?></a>
                            <?php } ?>

                        </div>
                    </div>

                    <?php $savings_pre_products_heading = get_field('savings_pre_products_heading'); ?>
                    <?php if (!empty($savings_pre_products_heading)) { ?>
                        <h2 class="hb-front-savings__heading"><?php echo $savings_pre_products_heading; ?></h2>
                    <?php } ?>

                    <?php if (have_rows('savings_products_repeater')) { ?>
                        <!--block start-->
                        <div class="hb-front-savings__loop">
                            <?php while (have_rows('savings_products_repeater')) {
                                the_row();
                                $select_product = get_sub_field('select_product');
                                ?>
                                <?php if (!empty($select_product)) {
                                    $product = wc_get_product($select_product->ID);
                                    $product_url = get_permalink($select_product->ID);

                                    $product_lowest_price = $product->get_price();
                                    $variation_prices = '';

                                    if ($product->get_variation_prices()) {
                                        $variation_prices = $product->get_variation_prices();
                                        $min_price = min($variation_prices['price']);
                                        $max_price = max($variation_prices['price']);

                                        if ($min_price == $max_price) {
                                            $variation_prices = $product_lowest_price;
                                        } else {
                                            $variation_prices = $min_price . '-' . $max_price;
                                        }
                                    }
                                    if (!$variation_prices) {
                                        $variation_prices = $product_lowest_price;
                                    }

                                    ?>
                                    <div class="hb-front-savings__item">
                                        <div class="hb-front-savings__inner">
                                            <a href="<?php echo $product_url; ?>">
                                                <img src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"
                                                     alt="<?php echo $select_product->post_title; ?>" loading="lazy">
                                            </a>
                                            <div class="hb-front-savings__title">
                                                <h3><?php echo $select_product->post_title; ?></h3>
                                                <span><?php echo get_woocommerce_currency_symbol(); ?><?php echo $variation_prices; ?></span>
                                            </div>
                                            <div class="hb-front-savings__info">
                                                <?php echo wp_trim_words($select_product->post_content, 10); ?>
                                            </div>
                                        </div>
                                        <a href="<?php echo $product_url; ?>"
                                           class="hb-front-savings__btn"><?php _e('Shop Now', 'garageflooringllc'); ?></a>
                                    </div>
                                <?php } ?>
                                <!--    Items -->
                            <?php } ?>
                            <!-- block end -->
                        </div>
                    <?php } ?>

                </div>
            </div>
        <?php } ?>

        <?php $enable_info_block_1 = get_field('enable_info_block_1'); ?>
        <?php if (!empty($enable_info_block_1)) {
            $info_block_1 = get_field('info_block_1');

            $info_block_text_background_image = $info_block_1['text_background_image'];
            $info_block_pre_heading_text = $info_block_1['pre_heading_text'];
            $info_block_heading = $info_block_1['heading'];
            $info_block_text_content = $info_block_1['text_content'];
            $info_block_button = $info_block_1['button'];
            $info_block_side_image = $info_block_1['side_image'];
            $info_block_side_image_alt_attribute = $info_block_1['side_image_alt_attribute'];

            ?>
            <div class="hb-front-text-img">
                <div class="hb-front-text-img__item"
                     style="background-image: url(<?php echo $info_block_text_background_image; ?>)">
                    <div class="hb-front-desk">
                        <div class="hb-front-text-img__inner">

                            <?php if (!empty($info_block_pre_heading_text)) { ?>
                                <strong><?php echo $info_block_pre_heading_text; ?></strong>
                            <?php } ?>

                            <?php if (!empty($info_block_heading)) { ?>
                                <h2><?php echo $info_block_heading; ?></h2>
                            <?php } ?>

                            <?php if (!empty($info_block_text_content)) { ?>
                                <p>
                                    <?php echo $info_block_text_content; ?>
                                </p>
                            <?php } ?>

                            <?php if (!empty($info_block_button)) { ?>
                                <a href="<?php echo $info_block_button['url']; ?>"
                                   class="hb-front-desk__more"><?php echo $info_block_button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <?php if (!empty($info_block_side_image)) { ?>
                    <div class="hb-front-text-img__item hb-front-text-img__item_img">
                        <img src="<?php echo $info_block_side_image; ?>"
                             alt="<?php echo $info_block_side_image_alt_attribute; ?>"
                             loading="lazy">
                    </div>
                <?php } ?>

            </div>
        <?php } ?>

        <?php $enable_we_can_help_block = get_field('enable_we_can_help_block'); ?>
        <?php if (!empty($enable_we_can_help_block)) { ?>
            <div class="hb-front-help font2 text-center">
                <div class="hb-container2">
                    <?php $we_can_help_pre_heading_text = get_field('we_can_help_pre_heading_text'); ?>
                    <?php if (!empty($we_can_help_pre_heading_text)) { ?>
                        <p class="hb-front-help__start"><?php echo $we_can_help_pre_heading_text; ?></p>
                    <?php } ?>

                    <?php $we_can_help_heading_text = get_field('we_can_help_heading_text'); ?>
                    <?php if (!empty($we_can_help_heading_text)) { ?>
                        <h2 class="hb-front-help__heading"><?php echo $we_can_help_heading_text; ?></h2>
                    <?php } ?>

                    <?php $we_can_help_text_content = get_field('we_can_help_text_content'); ?>
                    <?php if (!empty($we_can_help_text_content)) { ?>
                        <div class="hb-front-help__text">
                            <?php echo $we_can_help_text_content; ?>
                        </div>
                    <?php } ?>


                    <?php if (have_rows('we_can_help_repeater')) { ?>
                        <!--block start-->
                        <div class="hb-front-help__holder">
                            <?php while (have_rows('we_can_help_repeater')) {
                                the_row();
                                $sub_field_icon = get_sub_field('icon');
                                $sub_field_heading = get_sub_field('heading');
                                $sub_field_text_content = get_sub_field('text_content');
                                ?>
                                <!--    Items -->
                                <div class="hb-front-help__item">
                                    <?php if (!empty($sub_field_icon)) { ?>
                                        <div class="hb-front-help__icon">
                                            <img src="<?php echo $sub_field_icon; ?>"
                                                 alt="<?php echo $sub_field_heading; ?>" loading="lazy"
                                                 class="hb-front-help__img">
                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($sub_field_heading)) { ?>
                                        <h3 class="hb-front-help__title"><?php echo $sub_field_heading; ?></h3>
                                    <?php } ?>

                                    <?php if (!empty($sub_field_text_content)) { ?>
                                        <div class="hb-front-help__info">
                                            <?php echo $sub_field_text_content; ?>
                                        </div>
                                    <?php } ?>

                                </div>
                            <?php } ?>
                        </div>
                        <!-- block end -->
                    <?php } ?>
                </div>
            </div>
        <?php } ?>


        <?php $enable_info_block_2 = get_field('enable_info_block_2'); ?>
        <?php if (!empty($enable_info_block_2)) {

            $info_block_2 = get_field('info_block_2');

            $info_block_text_background_image = $info_block_2['text_background_image'];
            $info_block_pre_heading_text = $info_block_2['pre_heading_text'];
            $info_block_heading = $info_block_2['heading'];
            $info_block_text_content = $info_block_2['text_content'];
            $info_block_button = $info_block_2['button'];
            $info_block_side_image = $info_block_2['side_image'];
            $info_block_side_image_alt_attribute = $info_block_2['side_image_alt_attribute'];
            ?>
            <div class="hb-front-text-img">
                <?php if (!empty($info_block_side_image)) { ?>
                    <div class="hb-front-text-img__item hb-front-text-img__item_img">
                        <img src="<?php echo $info_block_side_image; ?>"
                             alt="<?php echo $info_block_side_image_alt_attribute; ?>"
                             loading="lazy">
                    </div>
                <?php } ?>
                <div class="hb-front-text-img__item"
                     style="background-image: url(<?php echo $info_block_text_background_image; ?>)">
                    <div class="hb-front-desk">
                        <div class="hb-front-text-img__inner padding-block">
                            <?php if (!empty($info_block_pre_heading_text)) { ?>
                                <strong><?php echo $info_block_pre_heading_text; ?></strong>
                            <?php } ?>

                            <?php if (!empty($info_block_heading)) { ?>
                                <h2><?php echo $info_block_heading; ?></h2>
                            <?php } ?>

                            <?php if (!empty($info_block_text_content)) { ?>
                                <p>
                                    <?php echo $info_block_text_content; ?>
                                </p>
                            <?php } ?>

                            <?php if (!empty($info_block_button)) { ?>
                                <a href="<?php echo $info_block_button['url']; ?>"
                                   class="hb-front-desk__more"><?php echo $info_block_button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


        <?php $enable_customers_review = get_field('enable_customers_review'); ?>
        <?php if (!empty($enable_customers_review)) { ?>
            <div class="hb-front-customers">

                <div class="hb-container2 text-center">

                    <?php $customers_review_heading = get_field('customers_review_heading'); ?>
                    <?php if (!empty($customers_review_heading)) { ?>
                        <h2 class="hb-front-customers__heading "><?php echo $customers_review_heading; ?></h2>
                    <?php } ?>

                    <?php if (have_rows('customers_review_repeater')) {
                        ?>
                        <!--block start-->
                        <div class="hb-front-customers__holder">
                            <?php while (have_rows('customers_review_repeater')) {
                                the_row();
                                $number_of_stars = get_sub_field('number_of_stars_1-5');
                                $text = get_sub_field('text');
                                ?>

                                <div class="hb-front-customers__item">
                                    <?php if (!empty($number_of_stars)) { ?>
                                        <div class="hb-front-customers__rating">
                                            <?php
                                            for ($i = 0; $i < intval($number_of_stars); $i++) {
                                                ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-star.png"
                                                     width="23"
                                                     height="22" alt="star" loading="lazy">
                                            <?php } ?>
                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($text)) { ?>
                                        <div class="hb-front-customers__text">
                                            <?php echo $text; ?>
                                        </div>
                                    <?php } ?>

                                </div>
                                <!--    Items -->
                            <?php } ?>
                        </div>
                        <!-- block end -->
                    <?php } ?>

                    <?php
                    $customer_review_link_1 = get_field('customer_review_link_1');
                    $customer_review_link_2 = get_field('customer_review_link_2');
                    ?>

                    <?php if (!empty($customer_review_link_1) || !empty($customer_review_link_2)) { ?>
                        <div class="hb-front-customers__more">
                            <?php if (!empty($customer_review_link_1)) { ?>
                                <a href="<?php echo $customer_review_link_1['url']; ?>"
                                   class="hb-front-customers__btn"><?php echo $customer_review_link_1['title']; ?></a>
                            <?php } ?>

                            <?php if (!empty($customer_review_link_2)) { ?>
                                <a href="<?php echo $customer_review_link_2['url']; ?>"
                                   class="hb-front-customers__btn"><?php echo $customer_review_link_2['title']; ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>

            </div>
        <?php } ?>


        <?php $enable_bottom_images = get_field('enable_bottom_images'); ?>
        <?php if (!empty($enable_bottom_images)) { ?>
            <div class="hb-front-badges">

                <?php if (have_rows('bottom_images_repeater')) {
                    ?>
                    <!--block start-->
                    <div class="hb-container2">
                        <?php while (have_rows('bottom_images_repeater')) {
                            the_row();
                            $sub_field_image = get_sub_field('image');
                            $sub_field_alt_text = get_sub_field('alt_text');
                            ?>
                            <!--    Items -->
                            <?php if (!empty($sub_field_image)) { ?>
                                <img src="<?php echo $sub_field_image; ?>" alt="<?php echo $sub_field_alt_text; ?>"
                                     loading="lazy">
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- block end -->
                <?php } ?>
            </div>
        <?php } ?>

        <?php $enable_optional_block_1 = get_field('enable_optional_block_1'); ?>
        <?php if (!empty($enable_optional_block_1)) { ?>
            <?php $optional_block_1_content = get_field('optional_block_1_content'); ?>
            <?php if (!empty($optional_block_1_content)) { ?>
                <div class="hb-front-optional1 padding-block">
                    <div class="hb-container">
                        <?php echo $optional_block_1_content; ?>
                    </div>
                </div>
            <?php } ?>

        <?php } ?>


        <?php
    }
}
?>


<?php get_footer(); ?>