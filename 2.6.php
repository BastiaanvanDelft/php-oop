<?php

$score = 69;

switch ($score) {
    case ($score >= 90):
        echo "Geweldig";
        break;
    case ($score >= 75):
        echo "Goed";
        break;
    case ($score >= 55):
        echo "Voldoende";
        break;
    default:
        echo "Onvoldoende";
}

print(($score > 55) ? "Geslaagd" : "Gezakt");