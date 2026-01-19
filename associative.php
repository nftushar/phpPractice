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
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Project Hail Mary"
    ];
    ?>

    <ul>
        <?php foreach ($books as $book):
            echo "<li> {$book}ˆ</li>";
           endforeach; ?>
    </ul>

</body>

</html>