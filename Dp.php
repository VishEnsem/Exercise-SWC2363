<?php
function sum(int $x, int $y): int {
    return $x + $y;
}


$operations = [
    [5, 10],
    [7, 13],
    [2, 4]
];


foreach ($operations as $pair) {
    $result = sum($pair[0], $pair[1]); 
    echo "{$pair[0]} + {$pair[1]} = $result<br>";  
}
?>
