<?php
header("Content-type: application/json");

$name =$_POST["name"];
$address = $_POST["address"];
$country = $_POST["country"];
$region = $_POST["region"];
$lon = $_POST["lon"];
$lat = $_POST["lat"];
$description = $_POST["description"];


$conn = new PDO("mysql:host=localhost;dbname=ofadipe;", "ofadipe","ieBae1ve");
$conn->query("INSERT INTO pointsofinterest(name, type, address, country, region, description, lon, lat, description)  VALUES('$name', '$type', '$address', '$country' '$lon', '$lat', '$description')"); 
 //$row2 = $results2 -> fetch();

 
// if($row2==false)
//{
  //  header("HTTP/1.1 401 Unauthorised");
//}



//elseif()
    
//{$results2 = $conn->query("INSERT INTO pointsofinterest(name, type, country, region, description, lon, lat, description)  VALUES('$name', '$type', '$address', '$lon', '$lat', '$description')"); 
//echo "<p> Point of Interested Added. <a href='index.php'>Back to main page</a></p>";}
//else{
  //  ($row2==false) {
    //    header("HTTP/1.1 404 Not Found")};
        
    //}

//-->

echo "<p> Point of Interest Added. <a href= 'index.php'> Back to the main page</a> </p>";

?>