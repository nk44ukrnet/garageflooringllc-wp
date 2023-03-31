<?php

function tiles_calculator_shortcode() {
    $output = "
    <div class='hb-calc1'>
    <label>Width:</label><br>
    <input class='hb-calc1-roomLength' type='text'><br>
    <label>Depth:</label><br>
    <input class='hb-calc1-roomDepth' type='text'></p>
    <p>
        <button class='hb-calc1-trigger'>Calculate</button>
    </p>
    <p class='hb-calc1-output'></p>
</div>
    ";
    return $output;

}
add_shortcode( 'calc1', 'tiles_calculator_shortcode' );

