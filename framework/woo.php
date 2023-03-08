<?php

//add alt tags to images

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

//------------------single product------------------

//before single product
add_action('woocommerce_before_single_product_summary', 'single_product_container_add', 10);
function single_product_container_add()
{
    echo '<div class="hb-container single-product-container-woo-thumbs-and-meta"> <!-- hb-container start -->';
}

//after single product
add_action('woocommerce_after_single_product_summary', 'single_product_container_end', 10);
function single_product_container_end()
{
    echo '</div> <!-- hb-container end -->';
    echo '<div class="product-long-description hb-container">' . get_the_content() . '</div>';
}

//quantity add before and after elements
add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );

function bbloomer_display_quantity_plus() {
    echo '<button type="button" class="quantity-plus">+</button>';
}

add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );

function bbloomer_display_quantity_minus() {
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
    <h1 class="product-title-summary"><?php echo get_the_title(); ?></h1>
    <?php
}

//move price under short description
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

//change upsales heading text
add_filter('woocommerce_product_upsells_products_heading', 'change_upsells_heading_text');

function change_upsells_heading_text($heading)
{
    $new_heading = __('Related Products', 'woocommerce'); // Replace this with your desired text
    return $new_heading;
}

//------------------end of single product------------------