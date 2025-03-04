<?php

$current_year = 2025;

require 'includes/database.php';

$sql = 'SELECT * FROM models;';

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $cars = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

#var_dump($cars)

?>

<?php require 'includes/header.php'; ?>

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

<?php require 'includes/footer.php'; ?>

