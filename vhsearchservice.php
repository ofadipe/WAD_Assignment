<?php
header("Content-type: application/json");

$t = $_GET["type"];
$conn = new PDO("mysql:host=localhost;dbname=ofadipe;", "ofadipe","ieBae1ve");
$query = "SELECT  * FROM pointsofinterest WHERE type LIKE '%$t%'";
// var_dump($query);
$results = $conn->query($query);
//("SELECT  * FROM pointsofinterest WHERE region LIKE '%$a%''");
// var_dump($results);
$resultsAsAssocArray = $results -> fetchAll(PDO::FETCH_ASSOC);
// var_dump($resultsAsAssocArray);
echo json_encode($resultsAsAssocArray);
?>