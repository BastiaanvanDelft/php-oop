<?php
$grades = [8.5, 7.0, 6.5, 9.0, 4.5];

foreach ($grades as $grade) {
    print('het Cijfer is: ' . $grade . "\n");
    if ($grade >= 5.5) {
        print(' Voldoende' . "\n");
    } else {
        print(' Onvoldoende' . "\n");
    }
}