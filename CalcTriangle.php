<?php
function calculateArea($length, $width) {
    $area = $length * $width; 
    return $area; 
}

// Example usage:
$length = 10; 
$width = 5;  
$area = calculateArea($length, $width); 

echo "The area of the rectangle is: $area square units."; 
?>
