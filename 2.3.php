<?php
$day = date('l');

switch ($day) {
    case "Monday":
        print("Maandag");
        break;
    case "Tuesday":
        print("Dinsdag");
        break;
    case "Wednesday":
        print("Woensdag");
        break;
    default:
        print("Vandaag is een dag");
}