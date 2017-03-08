select 'imdb_movie'.*
FROM 'imdb_movie'
WHERE 1
LIMIT 0, 10   // how many will be skipped/how many will be taken

select 'imdb_movie'.*
FROM 'imdb_movie'
WHERE 1
LIMIT 10, 10

select 'imdb_movie'.*
FROM 'imdb_movie'
WHERE 1
LIMIT 10, 10


<?php

//page.php?page=2

$page_nr = isset($_GET['page']) ? $_GET['page'] : 1;
$items_on_page = 100;

$page_nr = max(1, intval($page_nr));

$query = "
SELECT imdb_movie.*
FROM imdb_movie
WHERE 1
LIMIT ?, 10";

$stmt = $pdo->prepare($query);
$result = $stmt->execute([$items_on_page * ($page_nr - 1), $items_on_page]);