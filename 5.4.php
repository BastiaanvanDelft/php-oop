<?php
$countries = [
    "country1" =>["name" => "Nederland", "capital" => "Amsterdam"],
    "country2" =>["name" => "Duitsland", "capital" => "Berlijn"],
    "country3" =>["name" => "Hongarije", "capital" => "Budapest"],
];
foreach ($countries as $country){
    foreach ($country as $key => $value)
    print "de ". $key. " is " . $value ."\n";
}