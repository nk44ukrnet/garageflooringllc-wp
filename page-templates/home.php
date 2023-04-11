<?php
/*
 * Template Name: Home page
 */
get_header('front');
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <div class="hb-front-hero">
            <div class="hb-container2">
                <p class="hb-front-hero__pre-title font2">Your Go-to Expert for </p>
                <h1 class="hb-front-hero__title font2">Garage Flooring</h1>

                <div class="hb-front-hero__holder">

                    <a href="#!" class="hb-front-hero__item">
                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat1.png" alt="icon"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                        <p class="hb-front-hero__cat-name">Mats & Rolls</p>
                    </a>

                    <a href="#!" class="hb-front-hero__item">
                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat2.png" alt="icon"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                        <p class="hb-front-hero__cat-name">Tiles</p>
                    </a>

                    <a href="#!" class="hb-front-hero__item">
                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat3.png" alt="icon"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                        <p class="hb-front-hero__cat-name">Coatings</p>
                    </a>

                    <a href="#!" class="hb-front-hero__item">
                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat4.png" alt="icon"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                        <p class="hb-front-hero__cat-name">Storage</p>
                    </a>

                    <a href="#!" class="hb-front-hero__item">
                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat5.png" alt="icon"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                        <p class="hb-front-hero__cat-name">Accessories</p>
                    </a>

                    <a href="#!" class="hb-front-hero__item">
                        <span class="hb-front-hero__cat-img-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat6.png" alt="icon"
                                 loading="lazy" class="hb-front-hero__cat-img">
                        </span>
                        <p class="hb-front-hero__cat-name">Samples</p>
                    </a>

                </div>
            </div>
        </div>

        <div class="hb-front-savings">
            <div class="hb-container2">
                <div class="hb-front-savings__top">
                    <div class="hb-front-savings__highlight">
                        <span class="hb-front-savings__highlight-year">2023</span>
                        <span class="hb-front-savings__highlight-slogan">Savings</span>
                    </div>
                    <div class="hb-front-savings__desc">
                        <strong>Garage Flooring Your Garage</strong>
                        <h2>Checkout Our Best Options for Durability and Attractiveness.</h2>
                        <p>
                            Garage Flooring LLC has been a nationally leading distributor of flooring and storage
                            products for years, valuing the importance of our ability to cater to the necessities of
                            every customer. At heart, we are a business dedicated to making your ideas and objectives a
                            reality- from our reputable service to our efficient shipment system, we strive to meet all
                            of your garage needs. Due to our popularity, we have expanded to serve customers across the
                            nation through our website, offering the highest quality products at the most affordable
                            prices in the industry. Check our the best garage flooring projects of 2021 — from our
                            customers
                        </p>
                        <a href="#!" class="hb-front-savings__more">Save Up to 41% on Select Garage Flooring</a>
                    </div>
                </div>
                <h2 class="hb-front-savings__heading">Featured Products</h2>

                <div class="hb-front-savings__loop">

                    <div class="hb-front-savings__item">
                        <div class="hb-front-savings__inner">
                            <a href="#!">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                                     alt="Product" loading="lazy">
                            </a>
                            <div class="hb-front-savings__title">
                                <h3>Product 1</h3>
                                <span>$0.00</span>
                            </div>
                            <div class="hb-front-savings__info">
                                <?php echo wp_trim_words('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias autem laudantium minima
                            quaerat quos reprehenderit unde ut vero voluptatibus? Ad adipisci assumenda at cum eum
                            facere illum inventore maxime minus molestiae molestias, officia optio perferendis
                            reiciendis saepe sapiente similique sit soluta tempore veritatis, voluptas voluptate
                            voluptatibus. Assumenda est, facere.', 25); ?>
                            </div>
                        </div>
                        <a href="#!" class="hb-front-savings__btn"><?php _e('Shop Now', 'garageflooringllc'); ?></a>
                    </div>

                    <div class="hb-front-savings__item">
                        <div class="hb-front-savings__inner">
                            <a href="#!">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                                     alt="Product" loading="lazy">
                            </a>
                            <div class="hb-front-savings__title">
                                <h3>Product 2</h3>
                                <span>$0.00</span>
                            </div>
                            <div class="hb-front-savings__info">
                                <?php echo wp_trim_words('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias autem laudantium minima
                            quaerat quos reprehenderit unde ut vero voluptatibus? Ad adipisci assumenda at cum eum
                            facere illum inventore maxime minus molestiae molestias, officia optio perferendis
                            reiciendis saepe sapiente similique sit soluta tempore veritatis, voluptas voluptate
                            voluptatibus. Assumenda est, facere.', 25); ?>
                            </div>
                        </div>
                        <a href="#!" class="hb-front-savings__btn"><?php _e('Shop Now', 'garageflooringllc'); ?></a>
                    </div>

                    <div class="hb-front-savings__item">
                        <div class="hb-front-savings__inner">
                            <a href="#!">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product-sample.jpg"
                                     alt="Product" loading="lazy">
                            </a>
                            <div class="hb-front-savings__title">
                                <h3>Product 2</h3>
                                <span>$0.00</span>
                            </div>
                            <div class="hb-front-savings__info">
                                <?php echo wp_trim_words('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias autem laudantium minima
                            quaerat quos reprehenderit unde ut vero voluptatibus? Ad adipisci assumenda at cum eum
                            facere illum inventore maxime minus molestiae molestias, officia optio perferendis
                            reiciendis saepe sapiente similique sit soluta tempore veritatis, voluptas voluptate
                            voluptatibus. Assumenda est, facere.', 25); ?>
                            </div>
                        </div>
                        <a href="#!" class="hb-front-savings__btn"><?php _e('Shop Now', 'garageflooringllc'); ?></a>
                    </div>

                </div>

            </div>
        </div>

        <?php
    }
}
?>


<?php get_footer(); ?>