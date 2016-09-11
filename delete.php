<?php

include 'library/connection.php';

$table = 'genre';

$where = [
	'nama_genre' => 'Kids'
];

$database->delete($table, $where);
