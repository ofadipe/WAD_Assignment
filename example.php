<?php

 $conn->query("INSERT INTO poi_reviews(id, , poi_id, review,)  VALUES('$name', '$poi_id', '$review')"); 

 curl_setopt($connection, CURLOPT_URL, "https://edward2.solent.ac.uk/~ofadipe/poiservice.php?region=hamsphire");


 $results = json_decode($response, true);
 foreach($results as $result){
     echo "name " . $result [name] . " " .
          "address " . $result [address] . " " .
          "country " . $result['country'] . " " . 
          "region " . $result['region'] . " " .
          "lat " . $result['lat'] . " " .
          "lon " . $result['lon'] . " " ;
          '<a href="review2.php?id=' . $result['id'] . '"> Review POI </a>' ;

 }
  


 Region: <input id='region' />


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload= 'init()'>
<input type='button' id='btn1' value='Search for a Point of Interest' />
<div id='responseDiv'></div>
    
</body>
</html>