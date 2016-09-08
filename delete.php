<?php

include 'class/database.php';

$database = new Database();

$table = 'sutradara';
$where = [
	'nama_sutradara' => 'Antonio Saiful Islam'
];

$database->delete($table, $where);
