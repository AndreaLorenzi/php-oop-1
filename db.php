<?php
include __DIR__ . '/models/movie.php';
$movies = [
    new Movie('Avatar', ['Fantasy'], 2021, 'James Cameron'),
    new Movie('Forrest Gump', ['Drammatico', 'Storico'], 1994, 'Robert Zemeckis'),
    new Movie('Endgame', ['Fantasy'], 2019, 'Anthony & Joe Russo')
];
