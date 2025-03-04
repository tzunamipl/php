<?php

$current_year = 2025;

$db_host = "172.30.7.45:41306";
$db_name = "cars";
$db_user = "admin";
$db_pass = "password";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Connected succesfully";

$sql = 'SELECT * FROM models;';

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $cars = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

#var_dump($cars)

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cars</title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1>Cars</h1>
    </header>
    <main>
        <?php if (empty($cars)): ?>
            <p>No cars found</p>
        <?php else: ?>
        <ul>
            <?php foreach ($cars as $car): ?>
                <li>
                    <car>
                        <h2><a href="article.php?id=<?= $car['ID'] ?>"><?= $car['make'] ?> <?= $car['model'] ?></a></h2>
                        <p>Year of production: <?= $car['year'] ?>
                    </car>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </main>
</body>
</html>
