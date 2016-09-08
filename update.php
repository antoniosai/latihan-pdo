<?php 

include ('class/database.php');

$database = new Database();

$table = 'sutradara';

$data = [
	'nama_sutradara' => 'Hanung'
];

$where = [
	'id' => 24
];

$database->update($table, $data, $where);