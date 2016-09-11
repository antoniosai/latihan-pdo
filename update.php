<?php 

//Memanggil file connection.php
include ('library/connection.php');

//Nama tabel pada database movies
$table = 'genre';

// Data baru yang akan menggantikan data yang lama
$data = [
	'nama_genre' => 'Kids'
];
$where = [
	'id' => 23
];

$database->update($table, $data, $where);