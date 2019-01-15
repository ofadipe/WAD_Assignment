<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review Page</title>
</head>
<body>

<form method="post" action="reviewcURL.php">
<textarea name="review" id="review" cols="30" rows="10"></textarea>
<input type="hidden" value="<?php echo $_GET['id'];?>" name='poi_id' id='poi_id'>
<input type="submit" value="submit">
</form>
    
</body>
</html>


