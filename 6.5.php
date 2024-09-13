<?php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


$i2 = 0;

for($i = 0; $i < 9; $i++) {
    print($matrix[0][$i]);
    $i2 += 3;
}