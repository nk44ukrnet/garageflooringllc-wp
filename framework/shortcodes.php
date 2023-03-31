<?php

function tiles_calculator_shortcode($atts) {
    $image_url = get_stylesheet_directory_uri() . '/assets/img/tile-calc.png';

    $atts = shortcode_atts(array(
        'tile' => '12',
    ), $atts);

    $tile = $atts['tile'];


    $output = "
    <div class='hb-calc1' data-tile='$tile'> 
    <img src='$image_url' alt='Calc' loading='lazy' width='86' height='125'>
    <div class='hb-calc1__content'>
    <label>Width (In Inches):</label><br>
    <input class='hb-calc1-roomLength' type='number' min='1'><br>
    <label>Depth (In Inches):</label><br>
    <input class='hb-calc1-roomDepth' type='number' min='1'>
    <button class='hb-calc1-trigger btn btn_sm'>Calculate</button>
    <p class='hb-calc1-output'></p>
    </div>
</div>
    ";
    return $output;

}
add_shortcode( 'calc1', 'tiles_calculator_shortcode' );

