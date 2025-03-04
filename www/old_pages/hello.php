<?php

$message = "\nHello again\n<BR>";
$float = 3.14;
$int = 10;
$other = null;

echo "Hello World!";
echo $message;
var_dump($float, $int, $other);
echo "<BR><BR>";

$articles = ["Article 1",
    "article 2",
    "Article 3",
    "Article 4"
];
var_dump($articles);
echo "<BR>" . $articles[2];

echo "<BR><BR>";
$values = [
    "message" => "Hello World!",
    "name" => "Bob",
    "height" => 1.8
];



