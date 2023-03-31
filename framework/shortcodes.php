<?php

function tiles_calculator_shortcode() {
    $output = '<div class="hb-cacl1">';
    $output .= '<label>Width:</label><br>';
    $output .= '<input id="roomLength" type="text"><br>';
    $output .= '<label>Depth:</label><br>';
    $output .= '<input id="roomDepth" type="text"></p>';
    $output .= '<p><button onclick="calculateTiles()">Calculate</button></p>';
    $output .= '<p id="output"></p>';
    $output = '</div> <!-- /hb-cacl1-->';
    $output .= '<script>';
    $output .= 'function calculateTiles() {';
    $output .= 'let tile = "12";';
    $output .= 'let roomLengthInches = document.getElementById("roomLength").value;';
    $output .= 'let roomDepthInches = document.getElementById("roomDepth").value;';
    $output .= 'let width = Math.ceil(roomLengthInches / tile);';
    $output .= 'let depth = Math.ceil(roomDepthInches / tile);';
    $output .= 'let totalTiles = width * depth;';
    $output .= 'document.getElementById("output").innerHTML = "Based on the information provided, it will take  " + totalTiles + " tiles to cover your garage floor. We also suggest ordering female edges for the garage door";';
    $output .= '}';
    $output .= '</script>';
    return $output;

//    echo '<label>Width:</label><br>';
//    echo '<input id="roomLength" type="text"><br>';
//    echo '<label>Depth:</label><br>';
//    echo '<input id="roomDepth" type="text"></p>';
//    echo '<p><button onclick="calculateTiles()">Calculate</button></p>';
//    echo '<p id="output"></p>';
//    echo '<script>';
//    echo 'function calculateTiles() {';
//    echo 'let tile = "12";';
//    echo 'let roomLengthInches = document.getElementById("roomLength").value;';
//    echo 'let roomDepthInches = document.getElementById("roomDepth").value;';
//    echo 'let width = Math.ceil(roomLengthInches / tile);';
//    echo 'let depth = Math.ceil(roomDepthInches / tile);';
//    echo 'let totalTiles = width * depth;';
//    echo 'document.getElementById("output").innerHTML = "Based on the information provided, it will take  " + totalTiles + " tiles to cover your garage floor. We also suggest ordering female edges for the garage door";';
//    echo '}';
//    echo '</script>';
}
add_shortcode( 'calc1', 'tiles_calculator_shortcode' );

