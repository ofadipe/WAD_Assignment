<?php
header("Content-type: application/json");

$r = $_GET["region"];
$t = $_GET["type"];
$conn = new PDO("mysql:host=localhost;dbname=xxx;", "xxx","xxx");
$results = $conn->query("SELECT  * FROM pointsofinterest WHERE region LIKE '%$r%' AND type LIKE '%$t%'");
$resultsAsAssocArray = $results -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultsAsAssocArray);

?>