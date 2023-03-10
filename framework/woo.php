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
                    Justin says: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis dicta
                    fugiat
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

    <div class="hb-single-text-rows padding-block">
        <div class="hb-container">
            <div class="hb-single-text-rows__cell">
                <h2>Ready To Ship</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias blanditiis, cupiditate
                    dolor dolore fugiat fugit iste, maiores nihil non nulla possimus tempora, ullam. Accusantium, alias
                    beatae, eaque enim facere incidunt ipsum officiis possimus quidem quis ratione recusandae suscipit,
                    temporibus? Natus, nihil, sunt! Consequuntur debitis earum est natus numquam quas quisquam veritatis
                    voluptatem. Accusantium amet, enim esse est in officia porro quos sint ut voluptatibus! Asperiores
                    aspernatur debitis dolores eaque fuga ipsum provident soluta. Esse.
                </p>
            </div>
            <div class="hb-single-text-rows__cell">
                <h2>Now in Stock</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias blanditiis, cupiditate
                    dolor dolore fugiat fugit iste, maiores nihil non nulla possimus tempora, ullam. Accusantium, alias
                    beatae, eaque enim facere incidunt ipsum officiis possimus quidem quis ratione recusandae suscipit,
                    temporibus? Natus, nihil, sunt!
                </p>
            </div>
            <div class="hb-single-text-rows__cell">
                <h2>Limited Lifetime Warranty</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam consectetur culpa eligendi
                    fuga ipsam laboriosam neque nihil officiis quis sequi, similique sit sunt totam, veniam. Beatae iste
                    molestiae ratione.
                </p>
                <h2>Freight Shipment</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, animi assumenda aut deserunt earum est
                    impedit laboriosam perferendis provident, saepe sapiente velit veniam? Ab eveniet repellat sunt.
                    Alias beatae cum cupiditate, dicta dolorem ducimus eius enim fuga ipsum nesciunt officiis quaerat
                    quas quia rerum.
                </p>
            </div>
        </div>
    </div>

    <div class="hb-single-product-suggest padding-block">
        <div class="hb-container">
            <div class="hb-single-product-suggest__holder">
                <div class="hb-single-product-suggest__item">
                    <h2>
                        Consider A Garage Tile
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate deleniti, error praesentium
                        quas recusandae, reprehenderit sit, soluta tempora tempore ullam vel voluptate. A accusantium
                        aliquid amet aut consectetur consequuntur, debitis deserunt esse est expedita id illo impedit
                        labore magni natus nisi officiis placeat quam quia quibusdam repellendus repudiandae, sit
                        temporibus voluptate voluptatum! A cupiditate delectus distinctio ea eos, eveniet facere harum
                        molestiae nam nihil nisi omnis praesentium quasi quisquam, quod ratione saepe sunt voluptate
                        voluptatem voluptates. Voluptatibus.
                    </p>
                </div>
                <div class="hb-single-product-suggest__item hb-single-product-suggest__item_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg" alt="Product"
                         loading="lazy">
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
    <h1 class="product-title-summary colored2"><?php echo get_the_title(); ?></h1>
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
    ?>
    <div class="hb-single-product-accessories">
        <div class="hb-container">
            <h2 class="hb-single-product-accessories__heading text-center">Accessories</h2>
            <ul class="products">
                <li class="product">
                    <a href="#!" class="woocommerce-LoopProduct-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                             alt="Product" loading="lazy">
                        <span class="price">
                            <?php _e('From: ', 'garageflooringllc'); ?>
                            <span class="woocommerce-Price-amount amount">
                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>129.13</bdi>
                            </span>
                        </span>

                        <h2 class="woocommerce-loop-product__title">Product Name</h2>

                        <p class="hb-single-product-accessories__desc">
                            <?php echo wp_trim_words('Product short description Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. A aliquid, repellendus? A ad cupiditate sapiente.', 10); ?>
                        </p>
                    </a>
                    <a href="#!"
                       class="button wp-element-button single_add_to_cart_button button alt wp-element-button">Learn
                        More</a>
                </li>
                <li class="product">
                    <a href="#!" class="woocommerce-LoopProduct-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                             alt="Product" loading="lazy">
                        <span class="price">
                            <?php _e('From: ', 'garageflooringllc'); ?>
                            <span class="woocommerce-Price-amount amount">
                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>129.13</bdi>
                            </span>
                        </span>

                        <h2 class="woocommerce-loop-product__title">Product Name</h2>

                        <p class="hb-single-product-accessories__desc">
                            <?php echo wp_trim_words('A ad cupiditate sapiente.', 10); ?>
                        </p>
                    </a>
                    <a href="#!"
                       class="button wp-element-button single_add_to_cart_button button alt wp-element-button">Learn
                        More</a>
                </li>
                <li class="product">
                    <a href="#!" class="woocommerce-LoopProduct-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                             alt="Product" loading="lazy">
                        <span class="price">
                            <?php _e('From: ', 'garageflooringllc'); ?>
                            <span class="woocommerce-Price-amount amount">
                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>129.13</bdi>
                            </span>
                        </span>

                        <h2 class="woocommerce-loop-product__title">Product Name Is Very Long for This Field</h2>

                        <p class="hb-single-product-accessories__desc">
                            <?php echo wp_trim_words('Product short description Lorem ipsum dolor sit
                            amet', 10); ?>
                        </p>
                    </a>
                    <a href="#!"
                       class="button wp-element-button single_add_to_cart_button button alt wp-element-button">Learn
                        More</a>
                </li>
                <li class="product">
                    <a href="#!" class="woocommerce-LoopProduct-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                             alt="Product" loading="lazy">
                        <span class="price">
                            <?php _e('From: ', 'garageflooringllc'); ?>
                            <span class="woocommerce-Price-amount amount">
                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>129.13</bdi>
                            </span>
                        </span>

                        <h2 class="woocommerce-loop-product__title">Product Name</h2>

                        <p class="hb-single-product-accessories__desc">
                            <?php echo wp_trim_words('Product short description Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. A aliquid, repellendus? A ad cupiditate sapiente.', 10); ?>
                        </p>
                    </a>
                    <a href="#!"
                       class="button wp-element-button single_add_to_cart_button button alt wp-element-button">Learn
                        More</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="hb-single-product-warning padding-block">
        <div class="hb-container">
            <div class="hb-single-product-warning__cell">
                <h2>Warning</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dicta, eos explicabo
                    perspiciatis quidem quis ratione saepe. Aut earum ipsa, iusto laudantium tempora voluptates. Debitis
                    dolor dolore ea iste itaque nisi quas soluta tempore! Autem debitis deleniti error expedita incidunt
                    necessitatibus numquam totam vitae? Consequuntur, culpa cum cupiditate dignissimos est fugiat,
                    impedit, nostrum nulla quas quo quod sequi sunt voluptatum? Aliquid dolorum in iure optio
                    repellendus? Ad alias aliquam aliquid amet asperiores cupiditate ea eius magnam, necessitatibus
                </p>
            </div>
            <div class="hb-single-product-warning__cell">
                <h2>Important Info</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur consequatur
                    consequuntur dicta dolore dolores eius et fugit harum id iure magnam molestiae, mollitia quam quas
                    vel vitae voluptatum? Ad adipisci assumenda consequatur consequuntur cum cupiditate error esse
                    minus. Alias asperiores distinctio eaque eveniet facere fugiat ipsa maxime nihil placeat voluptatem.
                    Aliquam aspernatur assumenda blanditiis commodi cupiditate debitis deleniti distinctio dolorum eius
                    eos esse eum eveniet fugiat fugit illo impedit laboriosam modi odit, officiis pariatur perferendis
                    quas quasi quidem quos repellat saepe similique sint sunt tempore tenetur, ullam unde vero
                    voluptatibus! Adipisci commodi dolore doloribus facilis fugit illo necessitatibus nobis porro
                    ratione rerum! <a href="#!">Link to somewhere</a>

                </p>
            </div>
        </div>
    </div>
    <?php
}

//------------------end of single product------------------