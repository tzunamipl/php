<?php

$fruit = ['apple', 'banana', 'orange', 'mango'];
$current_year = 2025;
$articles = [
    [
        "car"         =>  "Subaru Impreza GC",
        "year"          =>  1997,
        "displacement"  =>  1997,
        "wheel_size"    =>  16,
        "power"         =>  115
    ],
    [
        "car"         =>  "Subaru Impreza GD",
        "year"          =>  2004,
        "displacement"  =>  1997,
        "wheel_size"    =>  16,
        "power"         =>  125
    ],
    [
        "car"         =>  "Subaru Impreza GH",
        "year"          =>  2009,
        "displacement"  =>  1997,
        "wheel_size"    =>  17,
        "power"         =>  150
    ],
    [
        "car"     =>  "Subaru Levorg",
        "year"          =>  2017,
        "displacement"  =>  1600,
        "wheel_size"    =>  18,
        "power"         =>  170
    ]
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>

    <ol>
        <li><?= $fruit[0] ?></li>
        <li><?= $fruit[1] ?></li>
        <li><?= $fruit[2] ?></li>
        <li><?= $fruit[3] ?></li>
    </ol>

    <h1>Articles</h1>
    <ol>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><?= $article['car'] ?></h2>
                    <p>Year of production: <?= $article['year'] ?>
                    <BR>Age: <?= ($current_year - $article['year']) ?>
                    <BR>Displacement: <?= $article['displacement'] ?>cc
                    <BR>Wheel size: <?= $article["wheel_size"] ?>"
                    <BR>Power: <?= $article['power'] ?> BHP
                    <BR>Power from 1l: <?= round($article['power']/$article['displacement']*1000, 1) ?> HP/l</p>
                </article>
            </li>
        <?php endforeach; ?>
    </ol>


    </body>
</html>