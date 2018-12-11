<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "stylesheet" type = "text/css" href = "styles.css"/>
    <title> Point of Interest </title>
</head>

<body>
<?php

// $id = $_POST["id"];
// $username = $_POST["username"];
// $password = $_POST ["password"];


$connection = curl_init();
// curl_setopt($connection,CURLOPT_USERPWD,"$username:$password");
// Remember to change the link to apporoiate link when get username
curl_setopt($connection, CURLOPT_URL, "https://edward2.solent.ac.uk/~ofadipe/addpoi.php.php");
$dataToPost = 
    ["id" => $id];
curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);
curl_setopt($connection, CURLOPT_HEADER, 0);
curl_setopt($connection,CURLOPT_POSTFIELDS,$dataToPost);
$response = curl_exec($connection);
$httpCode = curl_getinfo($connection, CURLINFO_HTTP_CODE);
echo "The script returned the HTTP status code: $httpCode <br/>"; 

if ($httpCode == "402" ){


echo "Payment is required, please try again! Code: $httpCode";

}
elseif ($httpCode =="401") {

    echo "Your request is unauthorised! Code: $httpCode";

}
//add else if for 401
else{
    echo "Download Successful";
    curl_close($connection);
}
// echo $response;

?>
</body>
</html>