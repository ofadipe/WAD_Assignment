<?php
 //   the cURL connection
  $t = $_GET['type'];
$connection = curl_init();

$url = "https://edward2.solent.ac.uk/~wad1802/vhsearchservice.php?region=hampshire&type=".$t;
//echo $url;
// Specify the URL to connect to - this can be PHP, HTML or anything else!
curl_setopt($connection, CURLOPT_URL, $url);


// This option ensures that the HTTP response is *returned* from curl_exec(),
// (see below) rather than being output to screen.  
curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);

// Do not include the HTTP header in the response.
curl_setopt($connection,CURLOPT_HEADER, 0);

// Actually connect to the remote URL. The response is 
// returned from curl_exec() and placed in $response.
$response = curl_exec($connection);

 


// Echo the response back from the server (for illustration purposes)
//  echo $response;

$results = json_decode($response, true);
//Used to echo results
// echo $results
//echo $response;
//var_dump($results);
foreach($results as $result){ 
    echo "Name " . $result ['name'] . " " .
         "Type " . $result ['type'] . " " .
         "Country " . $result['country'] . " " . 
         "Region " . $result['region'] . " " .
         "Lon " . $result ['lon'] . " " .
         "Lat " . $result['lat'] . " " . 
         "Description " . $result['description'] . " " .
         "<a href='reviewpage.php?id=" . $result['ID'] ."' > Review Here!</a>" ;

         

}

 ?>