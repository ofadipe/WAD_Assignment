<?php
header("Content-type: application/json");


$poi_id = $_POST["poi_id"];
$review = $_POST["review"];

echo $poi_id;
echo $review;

$conn = new PDO("mysql:host=localhost;dbname=ofadipe;", "ofadipe","ieBae1ve");
$row = $conn->query("INSERT INTO poi_reviews (poi_id, review)  VALUES('$poi_id', '$review')");


//Is this an error check when the review field is blank

if($_POST["review"] == null)
    {
        header("HTTP/1.1 412 Precondition Failed");

    }    
    else 
    {   //Then it inserts into the database?
       $row = $conn->query("INSERT INTO poi_reviews (poi_id, review)  VALUES('$poi_id', '$review')");

    }


?>