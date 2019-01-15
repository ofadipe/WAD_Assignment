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

curl_setopt($connection,CURLOPT_HEADER, 0);

$response = curl_exec($connection);
var_dump($response);

curl_exec($connection);
if (curl_error($connection)) {
    $error_msg = curl_error($connection);
}
curl_close($connection);

if (isset($error_msg)) {
    echo $error_msg;
}



 ?>