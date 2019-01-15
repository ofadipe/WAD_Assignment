<?php
header("Content-type: application/json");

$t = $_GET["type"];
$r = $_GET["region"];
$conn = new PDO("mysql:host=localhost;dbname=ofadipe;", "ofadipe","ieBae1ve");
$query = "SELECT  * FROM pointsofinterest WHERE type LIKE '%$t%' AND region ='$r'";

// Used to echo query to test if it works
// echo $query;

$results = $conn->query($query);
$resultsAsAssocArray = $results -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultsAsAssocArray);
?>