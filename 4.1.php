<?php
$products = [
    ["Laptop", 999.99, 1],
    ["Phone", 200.99, 3],
    ["Controller", 59.99, 8],
    ["TV", 500.99, 2]
];

print($products[1][1]);
print($products[1][2]);

$products[3][2]= 120;
$products[] = ["Tablet", 299.99, 50];