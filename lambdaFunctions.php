<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recommended Books</title>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php

    $books = [
        [
            'name' => 'Project Hail Merry',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'https://example.com',
        ],

        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://example.com',
        ],
    ];
    $filterByAuthor = function ($books) {
        $filteredBoooks = [];
        foreach ($books as $book) {
            if ($book['author'] === 'Andy Weir') {
                $filteredBoooks[] = $book;
            }
        }
        return $filteredBoooks;
    };

    $filteredBoooks = $filterByAuthor($books, "");

    function filterByYear($books)
    {
        $filteredBoooks = [];
        foreach ($books as $book) {
            if ($books['releaseYear'] === 2021) {
                $filteredBoooks[] = $book;
            }
        }
        return $filteredBoooks;
    }
    ?>

    <ul>
        <?php foreach ($filteredBoooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?=  $book['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>