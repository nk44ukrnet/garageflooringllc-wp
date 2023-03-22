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
                                <a href="<?php echo $sub_field_link['url']; ?>"
                                   title="<?php echo $sub_field_link['title']; ?>"
                                   class="btn btn_sm btn-color-light btn-bold"><?php echo $sub_field_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

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

            <div class="hb-wide-block padding-block">
                <div class="hb-container">
                    <h2 class="colored">Wide optional block</h2>
                    <p>
                        <strong>Wide Text Block text 1</strong>.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet autem blanditiis commodi
                        dolor eligendi et id ipsam maxime nihil omnis perspiciatis porro provident quia, reprehenderit
                        saepe, sapiente tempora tempore ut vel? Ad dolor dolores exercitationem facilis iure nam porro
                        quo tempora tenetur velit! At atque culpa deserunt ducimus iure magni nam nostrum odit officia
                        perspiciatis, ratione reiciendis reprehenderit sed. Architecto asperiores blanditiis commodi
                        corporis cum deleniti error expedita facilis, inventore ipsam neque nesciunt officiis? Accusamus
                        amet animi culpa debitis dolorem dolores eum, iure neque optio pariatur porro praesentium
                        provident quas reiciendis repellat sed sit ullam unde voluptates voluptatum. Accusamus animi
                    </p>

                    <div class="hb-wide-block__holder">
                        <div class="hb-wide-block__item">
                            <h3>Heading of the block (COLUMN 1)</h3>
                            <p>
                                <strong>Some Descrition of col 1</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores aspernatur
                                deserunt ducimus facere iure minima, quae, quisquam ratione totam, unde velit! Aliquam
                                corporis molestiae quae quasi soluta tempora! Amet doloribus dolorum eos nihil odio
                                placeat repudiandae sequi? Aliquid animi aspernatur dicta dignissimos eius, facilis in
                                rem sint ullam voluptas!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores aspernatur
                                deserunt ducimus facere iure minima, quae, quisquam ratione totam, unde velit! Aliquam
                                corporis molestiae quae quasi soluta tempora! Amet doloribus dolorum eos nihil odio
                                placeat repudiandae sequi? Aliquid animi aspernatur dicta dignissimos eius, facilis in
                                rem sint ullam voluptas!
                            </p>
                        </div>
                        <div class="hb-wide-block__item hb-wide-block__item_img">
                            <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/GF60SC510-MB_0.jpg"
                                 alt="Product" loading="lazy">
                        </div>
                    </div>

                    <div class="hb-products-loop padding-block-sm">
                        <div class="hb-products-loop__holder">

                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>
                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>
                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>
                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>

                        </div>
                    </div>

                    <p>
                        <strong>Wide Text Block text 2</strong>.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet autem blanditiis commodi
                        dolor eligendi et id ipsam maxime nihil omnis perspiciatis porro provident quia, reprehenderit
                        saepe, sapiente tempora tempore ut vel? Ad dolor dolores exercitationem facilis iure nam porro
                        quo tempora tenetur velit! At atque culpa deserunt ducimus iure magni nam nostrum odit officia
                        perspiciatis, ratione reiciendis reprehenderit sed. Architecto asperiores blanditiis commodi
                        corporis cum deleniti error expedita facilis, inventore ipsam neque nesciunt officiis? Accusamus
                        amet animi culpa debitis dolorem dolores eum, iure neque optio pariatur porro praesentium
                        provident quas reiciendis repellat sed sit ullam unde voluptates voluptatum. Accusamus animi
                    </p>

                    <div class="hb-wide-block__holder">
                        <div class="hb-wide-block__item">
                            <h3>Heading of the block (COLUMN 2)</h3>
                            <p>
                                <strong>Some Descrition of col 2</strong>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores aspernatur
                                deserunt ducimus facere iure minima, quae, quisquam ratione totam, unde velit! Aliquam
                                corporis molestiae quae quasi soluta tempora! Amet doloribus dolorum eos nihil odio
                                placeat repudiandae sequi? Aliquid animi aspernatur dicta dignissimos eius, facilis in
                                rem sint ullam voluptas!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores aspernatur
                                deserunt ducimus facere iure minima, quae, quisquam ratione totam, unde velit! Aliquam
                                corporis molestiae quae quasi soluta tempora! Amet doloribus dolorum eos nihil odio
                                placeat repudiandae sequi? Aliquid animi aspernatur dicta dignissimos eius, facilis in
                                rem sint ullam voluptas!
                            </p>
                        </div>
                        <div class="hb-wide-block__item hb-wide-block__item_img">
                            <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/GF60SC510-MB_0.jpg"
                                 alt="Product" loading="lazy">
                        </div>
                    </div>

                    <div class="hb-products-loop padding-block-sm">
                        <div class="hb-products-loop__holder">

                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>
                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>
                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>
                            <div class="hb-products-loop__item">
                                <div class="hb-products-loop__content">
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       id="id-29860" class="hb-index-products-list__img-link">
                                        <img src="https://justink40.sg-host.com/wp-content/uploads/2023/03/FM-MM-MLB_0.jpg"
                                             alt="MLB Motorcycle Mat 82.5″ L x 42″ W" loading="lazy"
                                             class="hb-products-loop__img">
                                    </a>
                                    <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                       class="hb-index-products-list__title">
                                        <h3 class="hb-products-loop__title colored2">MLB Motorcycle Mat 82.5″ L x 42″
                                            W</h3>
                                    </a>
                                    <div class="hb-products-loop__price">
                                        <strong>
                                            From: </strong>
                                        $129.13
                                    </div>
                                    <p class="hb-products-loop__desc">
                                        Show off your team pride with Sports Licensing Solutions' motorcycle… </p>
                                </div>
                                <a href="https://justink40.sg-host.com/product/mlb-motorcycle-mat-82-5-l-x-42-w/"
                                   class="btn btn_sm btn-color-light">Learn More</a>
                            </div>

                        </div>
                    </div>
                    <p>
                        <strong>Wide Text Block text 3</strong>.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet autem blanditiis commodi
                        dolor eligendi et id ipsam maxime nihil omnis perspiciatis porro provident quia, reprehenderit
                        saepe, sapiente tempora tempore ut vel? Ad dolor dolores exercitationem facilis iure nam porro
                        quo tempora tenetur velit! At atque culpa deserunt ducimus iure magni nam nostrum odit officia
                        perspiciatis, ratione reiciendis reprehenderit sed. Architecto asperiores blanditiis commodi
                        corporis cum deleniti error expedita facilis, inventore ipsam neque nesciunt officiis? Accusamus
                        amet animi culpa debitis dolorem dolores eum, iure neque optio pariatur porro praesentium
                        provident quas reiciendis repellat sed sit ullam unde voluptates voluptatum. Accusamus animi
                    </p>
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

            <?php
            //the_content();
        }
        ?>
    </div>
<?php } ?>
<?php get_footer(); ?>