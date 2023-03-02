<?php
/*
 * Template Name: Home page
 */
get_header();
?>

<div class="hb-front-hero padding-block-lg" style="background-image: url();">
    <div class="hb-container">
        <h1 class="hb-front-hero__heading"><?php echo get_the_title(); ?></h1>
        <p class="hb-front-hero__text">Expert Advice, Free Shipping, Samples & the Lowest Price Guaranteed!</p>
        <?php
        $shop_page_id = wc_get_page_id( 'shop' );
        $shop_url = get_permalink( $shop_page_id );
        ?>
        <a href="<?php echo $shop_url; ?>" class="hb-front-hero__btn btn">Shop Now</a>
    </div>
</div>


<?php get_footer(); ?>