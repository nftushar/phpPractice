<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recommended Books</title>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php

    // "Do Androids Dream of Electric Sheep" was released in 1968.
    // "Project Hail Mary" was released in 2021.

    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' => 1968,
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' =>  2021,
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= $book['name'] . ' ' . $book['releaseYear'] ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>