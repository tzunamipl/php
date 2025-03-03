<?php
$articles = ["Hobbit",
    "Horus Heresy",
    "Two towers",
    "New hope"
];

foreach ($articles as $article) {
    if ($article != "Horus Heresy") {
        echo $article;
    } else {
        echo "Herezja Horusa";
    }
    echo "<BR>";
}
