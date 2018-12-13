<?php
 
  ?>
<html>

<head>
    <meta charset="UTF-a8">
    <title>Point of Interest</title>
</head>

<body>
   
    <main>
        <h2>
            Add Point of Interest
        </h2>
        <form action="addpoi.php" method="POST">
            <br> Name:
            <br>
            <input type="text" name="name">
            <br> type:
            <br>
            <input type="text" name="type">
            <br> Country:
            <br>
            <input type="text" name="country">
            <br> Region:
            <br>
            <input type="text" name="region">
            <br> Lon:
            <br>
            <input type="text" name="lon">
            <br> Lat:
            <br>
            <input type="text" name="lat">
            
            <br> Description:
            <input type="text" name="description">
            
            <br>



            <input type="submit" value="Add Point of Interest">
        </form>
    </main>


</body>

</html>
