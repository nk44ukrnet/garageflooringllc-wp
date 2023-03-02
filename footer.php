<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garageflooringllc
 */

?>

<footer id="colophon" class="site-footer">
    <div class="hb-container">
        <div class="site-footer__holder">
            <div class="site-footer__item">
                <div class="cell">
                    <i class="fa-solid fa-location-dot"></i> Garage Flooring of Colorado LLC <br>
                    632 W. Gunnison Ave
                    Grand Junction, CO 81501
                </div>
                <div class="cell">
                    <i class="fa-solid fa-phone"></i> <a href="tel:8009564301">800.956.4301</a>
                </div>
                <div class="cell">
                    <i class="fa-solid fa-envelope"></i> <a href="mailto:service@garageflooringllc.com">service@garageflooringllc.com</a>
                </div>
            </div>
            <div class="site-footer__item">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id' => 'footer-menu-1',
                    )
                );
                ?>
            </div>
            <div class="site-footer__item site-footer__logo">
                <?php the_custom_logo(); ?>
                <a href="http://www.bbb.org/new-mexico-southwest-colorado/business-reviews/floors-industrial/garage-flooring-llc-in-grand-junction-co-99132939/#sealclick"><img src="https://seal-newmexicoandsouthwestcolorado.bbb.org/seals/blue-seal-200-42-whitetxt-bbb-99132939.png" alt="rating" loading="lazy"></a>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="site-footer__social">
                <h3 class="site-footer__social-heading">Follow us:</h3>
                <div class="site-footer__social-items">
                    <a href="https://www.facebook.com/Garageflooringllc/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://twitter.com/garageflooringl?lang=en"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.pinterest.com/garageflooring/"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="https://www.youtube.com/user/GarageFlooringLLC/videos"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/garage-flooring-llc"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://instagram.com/garageflooring/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="site-footer__accept">
                <h3 class="site-footer__accept-heading">We accept:</h3>
                <div class="site-footer__accept-items">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-amex"></i>
                    <i class="fa-brands fa-cc-discover"></i>
                    <i class="fa-brands fa-cc-paypal"></i>
                    <i class="fa-brands fa-cc-amazon-pay"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__copyright">
        <div class="hb-container text-center">
            &copy; 2011 - <?php echo date('Y'); ?> Garage Flooring, LLC.
                of Colorado All Rights Reserved
            632 W Gunnison Ave | Grand Junction, CO 81501
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
