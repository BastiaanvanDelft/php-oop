<?php
$prices = [100, 200, 300, 400, 500];
$i = 0;

while ($i < count($prices)) {
    print("Prijs: ". $prices[$i]. " ");
    print("Nieuwe Prijs: ". $prices[$i] + 50 . "\n");
    $i++;
}