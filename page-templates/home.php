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

        <div class="hb-front-text-img">
            <div class="hb-front-text-img__item"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/front-text-img-i1.png);">
                <div class="hb-front-desk">
                    <div class="hb-front-text-img__inner">
                        <strong>Our Difference</strong>
                        <h2>Jealous neighbors are our best customers.™</h2>
                        <p>
                            When Justin Krauss entered the industry over 15 years ago, it was in its infancy;
                            there was a limited spectrum of offered products and very little competition. Today,
                            the industry has expanded such that products are available online and at major
                            retailers. Despite the growth of the industry, we have maintained our hands-on
                            approach, our knowledgeable team of customer service associates, and our ability and
                            willingness to treat each and every garage like it is the most important project we
                            have — because we know it is the most important project you have! If you are looking
                            for the guaranteed lowest prices, the best customer service, the highest quality
                            products, and people who are passionate about helping you achieve your garage needs,
                            you have come to the right place. Don’t take our word for it, have a look at our
                            customer reviews.
                        </p>
                        <a href="#!" class="hb-front-desk__more">Save Up to 41% on Select Garage Flooring</a>
                    </div>
                </div>
            </div>
            <div class="hb-front-text-img__item hb-front-text-img__item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-text-img-car.png" alt="Product"
                     loading="lazy">
            </div>
        </div>

        <div class="hb-front-help font2 text-center">
            <div class="hb-container2">
                <p class="hb-front-help__start">We Can Help!</p>
                <h2 class="hb-front-help__heading">The Dream Garage Starts With The Garage Floor</h2>
                <div class="hb-front-help__text">
                    What is your dream garage flooring? is it garage floor tiles or epoxy coatings? Are you looking for
                    commercial-grade garage flooring and something that is “car jack approved” or are you more worried
                    about the rolling weight load and potential for tire marks? Let’s have a look at some different
                    features that may be part of that perfect garage.
                </div>
                <div class="hb-front-help__holder">
                    <div class="hb-front-help__item">
                        <div class="hb-front-help__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-help-i1.png"
                                 alt="Icon" loading="lazy" class="hb-front-help__img">
                        </div>
                        <h3 class="hb-front-help__title">Slip Resistant</h3>
                        <div class="hb-front-help__info">
                            How important is slip resistance for you? The answer may depend on your age, your climate or
                            how you use the garage. While all garage flooring should have some degree of slip resistance
                            the wrong garage floor tiles or an epoxy coating without anti-slip can become dangerous.
                            Floor tiles such as diamond tiles have great traction for parking the car, but perhaps not
                            enough traction for washing it. Small coin tiles have better traction. How much rain or
                            moisture is in garages should be a key factor.
                        </div>
                    </div>

                    <div class="hb-front-help__item">
                        <div class="hb-front-help__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-help-i2.png"
                                 alt="Icon" loading="lazy" class="hb-front-help__img">
                        </div>
                        <h3 class="hb-front-help__title">Easy to Clean Material</h3>
                        <div class="hb-front-help__info">
                            How important is slip resistance for you? The answer may depend on your age, your climate or
                            how you use the garage. While all garage flooring should have some degree of slip resistance
                            the wrong garage floor tiles or an epoxy coating without anti-slip can become dangerous.
                            Floor tiles such as diamond tiles have great traction for parking the car, but perhaps not
                            enough traction for washing it. Small coin tiles have better traction. How much rain or
                            moisture is in garages should be a key factor.
                        </div>
                    </div>

                    <div class="hb-front-help__item">
                        <div class="hb-front-help__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-help-i3.png"
                                 alt="Icon" loading="lazy" class="hb-front-help__img">
                        </div>
                        <h3 class="hb-front-help__title">Easy Installation</h3>
                        <div class="hb-front-help__info">
                            How important is slip resistance for you? The answer may depend on your age, your climate or
                            how you use the garage. While all garage flooring should have some degree of slip resistance
                            the wrong garage floor tiles or an epoxy coating without anti-slip can become dangerous.
                            Floor tiles such as diamond tiles have great traction for parking the car, but perhaps not
                            enough traction for washing it. Small coin tiles have better traction. How much rain or
                            moisture is in garages should be a key factor.
                        </div>
                    </div>

                    <div class="hb-front-help__item">
                        <div class="hb-front-help__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-help-i4.png"
                                 alt="Icon" loading="lazy" class="hb-front-help__img">
                        </div>
                        <h3 class="hb-front-help__title">Design vs Ultra Durable</h3>
                        <div class="hb-front-help__info">
                            How important is slip resistance for you? The answer may depend on your age, your climate or
                            how you use the garage. While all garage flooring should have some degree of slip resistance
                            the wrong garage floor tiles or an epoxy coating without anti-slip can become dangerous.
                            Floor tiles such as diamond tiles have great traction for parking the car, but perhaps not
                            enough traction for washing it. Small coin tiles have better traction. How much rain or
                            moisture is in garages should be a key factor.
                        </div>
                    </div>

                    <div class="hb-front-help__item">
                        <div class="hb-front-help__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-help-i5.png"
                                 alt="Icon" loading="lazy" class="hb-front-help__img">
                        </div>
                        <h3 class="hb-front-help__title">Cost</h3>
                        <div class="hb-front-help__info">
                            Just like any other room in the house cost has to be a decision when considering what to do.
                            Are you going to put the home on the market in a year or is this your forever home? Perhaps
                            your spouse is not onboard and you need to grease the wheels a little. Perhaps you go with
                            HDXT tile instead of Race Deck to save a few dollars.
                        </div>
                    </div>

                    <div class="hb-front-help__item">
                        <div class="hb-front-help__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-help-i6.png"
                                 alt="Icon" loading="lazy" class="hb-front-help__img">
                        </div>
                        <h3 class="hb-front-help__title">Conclusion</h3>
                        <div class="hb-front-help__info">
                            At the end of the day, we can help you find the perfect garage flooring for your style. A
                            durable product that resists oil stains and can be installed easily. If you do auto
                            maintenance in the shop we can show you the benefits of tiles or increase durability with a
                            coating.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hb-front-text-img">
            <div class="hb-front-text-img__item hb-front-text-img__item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-text-img-i02.png" alt="Product"
                     loading="lazy">
            </div>
            <div class="hb-front-text-img__item"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/front-text-img-i2.png);">
                <div class="hb-front-desk">
                    <div class="hb-front-text-img__inner padding-block">
                        <strong>Best Garage Flooring</strong>
                        <h2>committed to our customers</h2>
                        <p>
                            Our experts are committed to making sure our customers find the perfect garage floor that
                            fits their needs. We believe every customer deserves the best flooring options and are
                            dedicated to providing high-quality service at affordable prices.
                            <br><br>
                            With us, you won’t have to worry about getting the wrong floor for your garage – just browse
                            through our selection and find the right one!
                            <br><br>
                            Our vinyl flooring is available in a variety of colors, patterns, and styles. You can choose
                            from a variety of textures and colors to match your garage’s décor. From our selections, you
                            find vinyl flooring that is slip-resistant, making it ideal for wet areas.
                            <br><br>
                            Our extensive selection of flooring options ensures that you can find the right garage floor
                            to match your style and budget.
                            <br><br>
                            We also offer a wide range of epoxy flooring options. Our epoxy flooring is durable, easy to
                            clean, and slip-resistant. You can choose from a variety of colors and textures to match
                            your garage’s décor.
                            <br><br>
                            Our rubber flooring is ideal for garages that have a lot of traffic. They are durable and
                            slip. They are also perfect for Fitness centers, Health clubs, Resorts, Gyms and Entrances.
                            <br><br>
                            Our experienced team can help you choose the perfect flooring option to suit your lifestyle
                            and enhance the look and feel of your garage.
                            <br><br>
                            We provide the highest quality flooring options at unbeatable prices. We’ve covered you if
                            you’re looking for garage floor tiles, mats, interlocking tiles, or rubber flooring.
                            <br><br>
                            We offer free shipping and samples so you can find the perfect fit for your garage.
                        </p>
                        <a href="#!" class="hb-front-desk__more">More About Us</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}
?>


<?php get_footer(); ?>