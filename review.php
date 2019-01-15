<?php
header("Content-type: application/json");


$poi_id = $_POST["poi_id"];
$review = $_POST["review"];

echo $poi_id;
echo $review;

$conn = new PDO("mysql:host=localhost;dbname=ofadipe;", "ofadipe","ieBae1ve");
$conn->query("INSERT INTO poi_reviews (poi_id, review)  VALUES('$poi_id', '$review')");

echo 'hello';

?>