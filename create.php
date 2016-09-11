<?php

include 'library/connection.php';

$table = 'genre';

$data = [
	'nama_genre' => 'Horror',
];

$database->create($table, $data);