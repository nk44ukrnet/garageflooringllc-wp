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
    ?>

    <div class="hb-single-badges padding-block">
        <div class="hb-container">
            <div class="hb-single-badges__holder">

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-sheet-plastic"></i>
                    </div>
                    <p class="hb-single-badges__text">Datasheet</p>
                </a>

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <p class="hb-single-badges__text">Instructions</p>
                </a>

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <p class="hb-single-badges__text">Photos</p>
                </a>

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <p class="hb-single-badges__text">Videos</p>
                </a>

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <p class="hb-single-badges__text">Shipping</p>
                </a>

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-tag"></i>
                    </div>
                    <p class="hb-single-badges__text">Samples</p>
                </a>

                <a href="#!" class="hb-single-badges__item">
                    <div class="hb-single-badges__img">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <p class="hb-single-badges__text">Warranty</p>
                </a>

            </div>
        </div>
    </div>

    <div class="hb-single-quote">
        <div class="hb-container">
            <div class="hb-single-quote__quotation padding-block">
                <div class="hb-single-quote__inner">
                    Justin says: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis dicta fugiat
                    nostrum optio quibusdam recusandae saepe soluta suscipit. Ad aliquam corporis, delectus ducimus
                    eaque est ex fugiat impedit iusto laborum magni maxime nihil non odit repellendus sapiente sunt ut!
                    Eaque eligendi enim eveniet iste itaque laborum nam neque, nulla quisquam saepe sed similique
                    tempora, voluptates. Ab atque autem consequatur doloribus eius excepturi hic id ipsam, maxime nam
                    natus neque obcaecati odit officiis pariatur perspiciatis provident quam quasi quidem quos repellat
                    reprehenderit similique suscipit ullam velit veniam veritatis. Corporis doloribus eaque id maxime,
                    sequi suscipit."
                </div>
            </div>
            <div class="hb-single-quote__description">
                <div class="hb-single-quote__text">
                    <h2>Just Roll With It</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio ex
                        necessitatibus perspiciatis quam quibusdam reiciendis sed sunt tenetur veritatis. Aspernatur
                        dolores earum eveniet expedita fugit hic in itaque laboriosam laborum libero natus nihil
                        obcaecati placeat praesentium provident quae, quas, qui quia quibusdam quos ratione repellat
                        reprehenderit rerum saepe sequi soluta suscipit, tempora velit veniam vero.
                    </p>
                </div>
            </div>
        </div>
    </div>

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
    <h1 class="product-title-summary"><?php echo get_the_title(); ?></h1>
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

//------------------end of single product------------------