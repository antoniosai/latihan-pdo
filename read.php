<?php 

include ('library/connection.php');

$sqlAll = 'SELECT film.id, film.judul_film, sutradara.nama_sutradara, genre.nama_genre
		   FROM film
		   LEFT JOIN sutradara ON film.sutradara_id = sutradara.id
		   LEFT JOIN genre ON film.genre_id = genre.id';

$result = $database->query($sqlAll);

echo "<pre>";
print_r($result->all());
echo "</pre>";

echo "================================== Single Data ==================================";

$sqlSinge = 'SELECT film.id, film.judul_film, sutradara.nama_sutradara, genre.nama_genre
		     FROM film
		     LEFT JOIN sutradara ON film.sutradara_id = sutradara.id
		     LEFT JOIN genre ON film.genre_id = genre.id
		     WHERE film.id = 7';

$result = $database->query($sqlSinge);


echo "<pre>";
print_r($result->first());
echo "</pre>";