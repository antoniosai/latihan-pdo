<?php

include 'library/connection.php';

$table = 'film';

$data = [
	'judul_film' => 'Film Horror',
	'sutradara_id' => 25,
	'genre_id' => 24
];

$database->create($table, $data);