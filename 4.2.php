<?php
$books = [
    "book1" => ["name" => "Het boek van de waarheid", "page" => 20, "author" => "Jan"],
    "book2" => ["name" => "Bijbel", "page" => 22, "author" => "Ben"],
    "book3" => ["name" => "Hallo", "page" => 21, "author" => "Aard"]
];
print($books[1]["name"]);
print($books[1]["author"]);

$books[0]["page"] = 350;
$books[] = ["name" => "Theory", "page" => 2, "author" => "man"];