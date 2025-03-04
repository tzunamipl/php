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

if (isset($_GET['id']) and is_numeric($_GET['id'])) {

    $sql = 'SELECT * FROM models
            WHERE ID = ' . $_GET['id'];

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $car = mysqli_fetch_assoc($results);
    }
} else {
    $car = NULL;
}

#var_dump($cars)

?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $car['make'] ?> <?= $car['model'] ?></title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1><?= $car['make'] ?> <?= $car['model'] ?></h1>
    </header>
    <main>
        <?php if ($cars = NULL): ?>
            <p>No cars found</p>
        <?php else: ?>
        <ul>
         <car>
             <p>Year of production: <?= $car['year'] ?>
             <BR>Age: <?= ($current_year - $car['year']) ?>
             <BR>Length: <?= $car['length'] ?>mm
             <BR>Weight: <?= $car['weight'] ?>kg
             <BR>Density: <?= round($car['weight']/$car['displacement']*1000, 1) ?> HP/l
             <BR>Displacement: <?= $car['displacement'] ?>cc
             <BR>Wheel size: <?= $car["wheel"] ?>"
             <BR>Power: <?= $car['power'] ?> BHP
             <BR>Power from 1l: <?= round($car['power']/$car['displacement']*1000, 1) ?> HP/l
             <BR>Power/weight: <?= round($car['power']/$car['weight']*1000, 1) ?> HP/t</p>
         </car>
        </ul>
        <?php endif; ?>
    </main>
</body>
</html>
