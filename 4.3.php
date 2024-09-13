<?php
$pets = [
    ["species"=> "Hond", "name" => "Buddy", "age" => "3"],
    ["species"=> "Papegaai", "name" => "Coco", "age" => "6"],
    ["species"=> "Konijn", "name" => "Nibbles", "age" => "2"],
    ["species"=> "Kat", "name" => "Simba", "age" => "2"]
];

print $pets[2]["name"];
print $pets[2]["species"];

$pets[1]["age"] += 1;
print $pets[1]["age"];

$pets[] = ["species"=> "Kat", "name" => "Simba", "age" => "2"];

print_r($pets);