<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recommended items</title>
</head>

<body>

    <h1>Recommended items</h1>

    <?php

    $items = [
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

    function filter ($items, $kew, $value) {

        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$kew] === $value) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    $filteredItems = filter($items, $kew, $value);

    function filterByYear($items)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($items['releaseYear'] === 2021) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }
    ?>

    <ul>
        <?php foreach ($filteredItems as $item): ?>
            <li>
                <a href="<?= $item['purchaseUrl'] ?>"><?=  $item['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>