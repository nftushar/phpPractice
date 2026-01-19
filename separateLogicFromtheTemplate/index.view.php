<?php

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
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'releaseYear' =>  2012,
    ]
];

$filteredBooks = array_filter($books, function ($book) {    
    return $book['releaseYear'] >= 1958 && $book['releaseYear'] <= 2028;
});

require 'index.view.php';