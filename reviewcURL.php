<?php
 //   the cURL connection
$connection = curl_init();

curl_setopt($connection, CURLOPT_URL, "https://edward2.solent.ac.uk/~wad1802/review.php");

$id = $_POST["id"];
$poi_id = $_POST["poi_id"];
$review = $_POST["review"];
$dataToPost = 
    [ "poi_id" => $poi_id,
	 "review" => $review,            
    ];
    var_dump($dataToPost);
curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);
curl_setopt($connection,CURLOPT_POSTFIELDS,$dataToPost);

$response = curl_exec($connection);

curl_setopt($connection,CURLOPT_HEADER, 0);
$httpCode = curl_getinfo($connection,CURLINFO_HTTP_CODE);
echo "The script returned the HTTP status code: $httpCode <br />";


//var_dump($response);

/* curl_exec($connection);
if (curl_error($connection)) {
    $error_msg = curl_error($connection);
}
curl_close($connection);

if (isset($error_msg)) {
    echo $error_msg;
}

*/

echo "The script returned the HTTP status code: $httpCode <br/>"; 

if ($httpCode == "412" ){


echo "Precondition Failed : The server does not meet one of the preconditions that the requester put on the request! Try again mate! Code: $httpCode";

}
elseif ($httpCode =="401") {

    echo "Your request is unauthorised! Code: $httpCode";

}
//add else if for 401
else{
    echo "Review Added Successfully";
    curl_close($connection);
}


 ?>