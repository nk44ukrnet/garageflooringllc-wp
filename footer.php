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

<div class="taggbox" style="width:100%;height:100%" data-widget-id="120292" data-tags="false" ></div><script src="https://widget.taggbox.com/embed-lite.min.js" type="text/javascript"></script>
<footer id="colophon" class="site-footer">
    <div class="footer-badges">
        <div class="hb-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-badge1.jpg" alt="Badge"
                 loading="lazy">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-badge2.jpg" alt="Badge"
                 loading="lazy">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-badge3.jpg" alt="Badge"
                 loading="lazy">
        </div>
    </div>
    <div class="footer-line text-center">
        <div class="hb-container">
            COVID-19 Update: Garage Flooring is Processing and Shipping Orders
        </div>
    </div>
    <div class="hb-container">
        <div class="site-footer__holder">
            <div class="site-footer__item footer-address">
                <div class="cell">
                    Garage Flooring of Colorado LLC
                    <br>
                    632 W. Gunnison Ave
                    <br>
                    Grand Junction, CO 81501
                    <br>
                    Telephone: <a href="tel:8009564301">800.956.4301</a>
                    <br>
                    Email: <a href="mailto:service@garageflooringllc.com">service@garageflooringllc.com</a>
                </div>
            </div>
            <div class="site-footer__item footer-menu">
                <h4 class="footer-menu__heading">Shop</h4>
                <ul>
                    <li><a href="/garage-floor-mats/">Garage Floor Mats</a></li>
                    <li><a href="/garage-floor-tiles/">Garage Tiles</a></li>
                    <li><a href="/garage-floor-coatings/">Coatings</a></li>
                    <li><a href="/specials/">Specials</a></li>
                </ul>
            </div>
            <div class="site-footer__item footer-menu">
                <h4 class="footer-menu__heading">Account</h4>
                <ul>
                    <li><a href="<?php echo wc_get_cart_url(); ?>">Cart</a></li>
                    <li><a href="/privacy/">Privacy</a></li>
                    <li><a href="/terms-conditions-terms-use/">Terms of Use</a></li>
                </ul>
            </div>
            <div class="site-footer__item footer-menu">
                <h4 class="footer-menu__heading">Company</h4>
                <ul>
                    <li><a href="/money-back-guarantee/">Return Policy</a></li>
                    <li><a href="/free-shipping/">Shipping Terms</a></li>
                    <li><a href="/low-price-guarantee/">Price Match Guarantee</a></li>
                    <li><a href="/money-back-guarantee/">Money Back Guarantee</a></li>
                    <li><a href="/blog/">Testimonials</a></li>
                    <li><a href="/contact-us/">Contact Us</a></li>
                </ul>
            </div>
            <div class="site-footer__item footer-menu">
                <h4 class="footer-menu__heading">Resources</h4>
                <ul>
                    <li><a href="/wp-content/uploads/garage-flooring-brochure-low-res.pdf">Garage Flooring Brochure</a>
                    </li>
                    <li><a href="/floor-designer/">Design Your Floor</a></li>
                    <li><a href="/garage-flooring-samples/">Get Samples</a></li>
                    <li><a href="/blog/">Articles</a></li>
                    <li><a href="/2020-guide-to-garage-flooring/">Guide and Options</a></li>
                </ul>
            </div>
        </div>

        <div class="site-footer__links">
            <div class="site-footer__social">
                <a href="https://www.facebook.com/Garageflooringllc/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/garageflooringl?lang=en"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.pinterest.com/garageflooring/"><i class="fa-brands fa-pinterest-p"></i></a>
                <a href="https://www.youtube.com/user/GarageFlooringLLC/videos"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/garage-flooring-llc"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://instagram.com/garageflooring/"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="site-footer__accept">
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-amex"></i>
                <i class="fa-brands fa-cc-discover"></i>
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-amazon-pay"></i>
            </div>
            <div class="site-footer__rating">
                <a href="http://www.bbb.org/new-mexico-southwest-colorado/business-reviews/floors-industrial/garage-flooring-llc-in-grand-junction-co-99132939/#sealclick"><img
                            src="https://seal-newmexicoandsouthwestcolorado.bbb.org/seals/blue-seal-200-42-whitetxt-bbb-99132939.png"
                            alt="rating" loading="lazy"></a>
            </div>
        </div>
    </div>
    <div class="site-footer__copyright">
        <div class="hb-container">
            &copy; 2011 - <?php echo date('Y'); ?> Garage Flooring, LLC.
            of Colorado All Rights Reserved
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
