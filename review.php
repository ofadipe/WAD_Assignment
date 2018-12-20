<?php
header("Content-type: application/json");


//$address = $_POST["address"];
//$country = $_POST["country"];



$conn = new PDO("mysql:host=localhost;dbname=ofadipe;", "ofadipe","ieBae1ve");
$conn->query("INSERT INTO poi_reviews(id, poi_id, review)  VALUES('$name', '$poi_id', '$reviews')");


?>