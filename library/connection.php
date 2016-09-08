<?php 

include ('class/database.php');

// Define configuration
$credentials = [
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'movies'
];

$database = new Database($credentials);