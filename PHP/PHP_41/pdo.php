<?php
$host = "localhost";
$db = "movie_rentals";
$username = "root";
$password = "root";
 
try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// $id = $_GET[`id`];
$movies = $conn->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll(PDO::FETCH_ASSOC);

var_dump($movies); 
?>