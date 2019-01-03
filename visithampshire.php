<html>

<body>
    <h1>Visit Hampshire</h1>
    <p>This is Visit Hampshire </p>
    <form method="post" action="vhsearchservice.php">
        Search for Type of Point of Interest in Hampshire :<input name="type" />
        <input type="submit" value="Go!" />
    </form>
</body>

<?php
 //   the cURL connection
$connection = curl_init();

// Specify the URL to connect to - this can be PHP, HTML or anything else!
curl_setopt($connection, CURLOPT_URL, "https://edward2.solent.ac.uk/~ofadipe//vhsearchservice.php?region=hamsphire+$t");


// This option ensures that the HTTP response is *returned* from curl_exec(),
// (see below) rather than being output to screen.  
curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);

// Do not include the HTTP header in the response.
curl_setopt($connection,CURLOPT_HEADER, 0);

// Actually connect to the remote URL. The response is 
// returned from curl_exec() and placed in $response.
$response = curl_exec($connection);

// Close the connection.
curl_close($connection);

// Echo the response back from the server (for illustration purposes)
//  echo $response;

$results = json_decode($response, true);
foreach($results as $result){
    echo "Name " . $result ['name'] . " " .
         "Type " . $result ['type'] . " " .
         "Country " . $result['country'] . " " . 
         "Region " . $result['region'] . " " .
         "Lon " . $result ['lon'] . " " .
         "Lat " . $result['lat'] . " " . 
         "Description " . $result['description'] . " " . 
         //This needs to be a link so the users can add a review
   '<a href="login.php?id=' . $result['id'] . '"> Download Here</a>' ;
}

 ?>

</html>