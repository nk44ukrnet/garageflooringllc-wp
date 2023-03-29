<?php

//add alt tags to images in woo default loops

add_filter('wp_get_attachment_image_attributes', 'change_attachement_image_attributes', 20, 2);

function change_attachement_image_attributes($attr, $attachment)
{
    // Get post parent
    $parent = get_post_field('post_parent', $attachment);

    // Get post type to check if it's product
    $type = get_post_field('post_type', $parent);
    if ($type != 'product') {
        return $attr;
    }

    /// Get title
    $title = get_post_field('post_title', $parent);


    $attr['alt'] = $title;
    $attr['title'] = $title;

    return $attr;
}

//badges function
function badge_output($arr)
{
    if (!empty($arr) && $arr['enabled'][0]) {
        $title = $arr['title'];
        $url = '';
        $popupContent = '';
        $url_or_popup = $arr['is_it_direct_url_or_popup'];
        $uniqID = '';
        $modalTrigger = '';
        $open_in_a_new_tab = '';
        if (!empty($url_or_popup)) {
            switch ($url_or_popup) {
                case 'url':
                    $url = $arr['specify_only_url_leave_text_blank'];
                    if (empty($url)) $url = '#!';
                    $popupContent = '';
                    if ($url[0] != '#') {
                        $open_in_a_new_tab = 'target="_blank"';
                    }
                    break;
                case 'popup':
                    $popupContent = $arr['popup_content'];
                    $url = '#!';
                    $randValue = rand(0, 999999999999);
                    $uniqID = uniqid('popup_single_') . '_rand_value_' . $randValue;
                    if (!empty($popupContent)) {
                        $modalTrigger = 'data-modal-id="' . $uniqID . '"';
                    }
                    break;
            }
        }
        $iconSelection = $arr['do_you_want_to_use_default_icon_for_specific_image_instead'];
        $iconHTML = $arr['icon_html'];
        $iconImage = $arr['image'];
        ?>

        <a href="<?php echo $url; ?>" <?php echo $modalTrigger; ?> <?php echo $open_in_a_new_tab; ?>
           class="hb-single-badges__item">
            <?php if (!empty($iconHTML) || !empty($iconImage)) { ?>
                <div class="hb-single-badges__img">
                    <?php if (!empty($iconSelection)) { ?>
                        <?php switch ($iconSelection) {
                            case  'Default Icon':
                                echo $iconHTML;
                                break;
                            case 'Specific Image':
                                ?>
                                <img src="<?php echo $iconImage; ?>" alt="<?php echo $title; ?>"
                                     loading="lazy">
                                <?php
                                break;
                            default:
                                break;
                        } ?>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (!empty($title)) { ?>
                <p class="hb-single-badges__text"><?php echo $title; ?></p>
            <?php } ?>
        </a>

        <?php if (!empty($popupContent)) { ?>
            <!--Popup-->
            <div class="modal-backdrop" id="<?php echo $uniqID; ?>">
                <div class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <a href="#!" class="close-modal">×</a>
                            <div class="modal-content__inner">
                                <?php echo $popupContent; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of popup-->
        <?php } ?>

    <?php } ?>
<?php }

//end of badges function

//------------------single product------------------

//before single product
add_action('woocommerce_before_single_product_summary', 'single_product_container_add', 10);
function single_product_container_add()
{
    echo '<div class="hb-container single-product-container-woo-thumbs-and-meta"> <!-- hb-container start -->';
}

function my_custom_content_after_short_description()
{
    ?>
    <a href="#theContentSingleProduct"><?php _e('Read More', 'garageflooringllc'); ?> <i
                class="fa-solid fa-arrow-right"></i></a>
    <?php
}

add_action('woocommerce_single_product_summary', 'my_custom_content_after_short_description', 22);

//after single product
add_action('woocommerce_after_single_product_summary', 'single_product_container_end', 10);
function single_product_container_end()
{
    echo '</div> <!-- hb-container end -->';
    echo '<div class="product-long-description hb-container padding-block-sm" id="theContentSingleProduct">' . get_the_content() . '</div>';
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


    <?php
    $quote_section = get_field('enable_quote_section');
    $quote_quotation_text = get_field('quote_quotation_text');
    $quote_quotation_description = get_field('quote_quotation_description');
    ?>
    <?php if (!empty($quote_section)) { ?>
    <?php if (!empty($quote_quotation_text) || !empty($quote_quotation_description)) { ?>
        <div class="hb-single-quote">
            <div class="hb-container">
                <?php if (!empty($quote_quotation_text)) { ?>
                    <div class="hb-single-quote__quotation padding-block">
                        <div class="hb-single-quote__inner">
                            <?php echo $quote_quotation_text; ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if (!empty($quote_quotation_description)) { ?>
                    <div class="hb-single-quote__description">
                        <div class="hb-single-quote__text">
                            <?php echo $quote_quotation_description; ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php } ?>
<?php } ?>

    <?php
    $enable_text_rows_section = get_field('enable_text_rows_section');
    $text_cell_1_content = get_field('text_cell_1_content');
    $text_cell_2_content = get_field('text_cell_2_content');
    $text_cell_3_content = get_field('text_cell_3_content');
    ?>
    <?php if (!empty($enable_text_rows_section)) { ?>
    <?php if (!empty($text_cell_1_content || $text_cell_2_content || $text_cell_3_content)) { ?>
        <div class="hb-single-text-rows padding-block">
            <div class="hb-container">
                <?php if (!empty($text_cell_1_content)) { ?>
                    <div class="hb-single-text-rows__cell">
                        <?php echo $text_cell_1_content; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($text_cell_2_content)) { ?>
                    <div class="hb-single-text-rows__cell">
                        <?php echo $text_cell_2_content; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($text_cell_3_content)) { ?>
                    <div class="hb-single-text-rows__cell">
                        <?php echo $text_cell_3_content; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>

    <?php
    $suggest_product_section_enabled = get_field('suggest_product_section_enabled');
    $suggest_product_content = get_field('suggest_product_content');
    $suggest_product_image = get_field('suggest_product_image');
    $suggest_product_alt_text_for_image = get_field('suggest_product_alt_text_for_image');
    ?>
    <?php if (!empty($suggest_product_section_enabled)) { ?>
    <div class="hb-single-product-suggest padding-block">
        <div class="hb-container">
            <div class="hb-single-product-suggest__holder">
                <?php if (!empty($suggest_product_content)) { ?>
                    <div class="hb-single-product-suggest__item">
                        <?php echo $suggest_product_content; ?>
                    </div>
                <?php } ?>
                <?php if (!empty($suggest_product_image)) { ?>
                    <div class="hb-single-product-suggest__item hb-single-product-suggest__item_img">
                        <img src="<?php echo $suggest_product_image; ?>"
                             alt="<?php echo $suggest_product_alt_text_for_image; ?>"
                             loading="lazy">
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php } ?>


    <?php
}

//quantity add before and after elements
add_action('woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus');

function bbloomer_display_quantity_plus()
{
    echo '<button type="button" class="quantity-plus">+</button>';
}

add_action('woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus');

function bbloomer_display_quantity_minus()
{
    echo '<button type="button" class="quantity-minus">-</button>';
}

//remove tabs container

add_filter('woocommerce_product_tabs', 'remove_product_tabs_container', 98);

function remove_product_tabs_container($tabs)
{
    return array();
}

//add heading to product summary

add_filter('woocommerce_single_product_summary', 'add_heading_of_product_name', 9);

function add_heading_of_product_name()
{
    ?>
    <h1 class="product-title-summary colored"><?php echo get_the_title(); ?></h1>
    <?php
}

//move price under short description
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

//change upsales heading text
add_filter('woocommerce_product_upsells_products_heading', 'change_upsells_heading_text');

function change_upsells_heading_text($heading)
{
    $new_heading = __('Related Products', 'woocommerce'); // Replace this with your desired text
    return $new_heading;
}

add_filter('woocommerce_after_single_product', 'single_product_pre_footer_html');

function single_product_pre_footer_html()
{
    $enable_accessories_section = get_field('enable_accessories_section');
    $accessories_title = get_field('accessories_title');
    $accessories_repeater = get_field('accessories_repeater');
    ?>
    <?php if (!empty($enable_accessories_section)) { ?>
    <div class="hb-single-product-accessories">
        <div class="hb-container">
            <?php if (!empty($accessories_title)) { ?>
                <h2 class="hb-single-product-accessories__heading text-center colored"><?php echo $accessories_title; ?></h2>
            <?php } ?>

            <?php
            if (have_rows('accessories_repeater')) {
                ?>
                <ul class="products">
                    <?php
                    while (have_rows('accessories_repeater')) {
                        the_row();
                        $sub_val_product = get_sub_field('select_product');
                        $product = wc_get_product($sub_val_product->ID);
                        ?>
                            <?php if ( !empty($sub_val_product) || !empty($product) ) { ?>
                            <li class="product">
                                <a href="<?php echo $sub_val_product->guid; ?>" class="woocommerce-LoopProduct-link">
                                    <img src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"
                                         alt="<?php echo $sub_val_product->post_title; ?>" loading="lazy">
                                    <span class="price">
                            <?php _e('From: ', 'garageflooringllc'); ?>
                            <span class="woocommerce-Price-amount amount">
                                <bdi><span class="woocommerce-Price-currencySymbol"><?php echo get_woocommerce_currency_symbol(); ?></span><?php echo $product->get_price(); ?></bdi>
                            </span>
                        </span>

                                    <h2 class="woocommerce-loop-product__title"><?php echo $sub_val_product->post_title; ?></h2>

                                    <p class="hb-single-product-accessories__desc">
                                        <?php echo wp_trim_words($sub_val_product->post_content, 10); ?>
                                    </p>
                                </a>
                                <a href="<?php echo $sub_val_product->guid; ?>"
                                   class="button wp-element-button single_add_to_cart_button button alt wp-element-button text-light">
                                    <?php _e('Learn More', 'garageflooringllc'); ?>
                                </a>
                            </li>
                            <?php } ?>
                        <?php
                        ?>
                    <?php } ?>
                </ul>
                <?php
            }
            ?>

        </div>
    </div>
<?php } ?>

    <?php
    $warning_info_enabled = get_field('warning_info_enabled');
    $warning_col_1_content = get_field('warning_col_1_content');
    $warning_col_2_content = get_field('warning_col_2_content');
    ?>

    <?php if (!empty($warning_info_enabled)) { ?>
    <?php if (!empty($warning_col_1_content) || !empty($warning_col_2_content)) { ?>
        <div class="hb-single-product-warning padding-block">
            <div class="hb-container">

                <?php if (!empty($warning_col_1_content)) { ?>
                    <div class="hb-single-product-warning__cell">
                        <?php echo $warning_col_1_content; ?>
                    </div>
                <?php } ?>

                <?php if (!empty($warning_col_2_content)) { ?>
                    <div class="hb-single-product-warning__cell">
                        <?php echo $warning_col_2_content; ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php } ?>
<?php } ?>

    <?php
}

//on sale add wrapper
add_filter('woocommerce_sale_flash', 'ds_change_sale_text');
function ds_change_sale_text() {
    $saleText = __('Sale!', 'garageflooringlllc');
    return '<div class="hb-container hb-on-sale-wrapper"><span class="onsale">' . $saleText . '</span></div>';
}
//------------------end of single product------------------//
