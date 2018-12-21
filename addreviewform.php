<?php
 
  ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Point of Interest</title>
</head>

<body>
   
    <main>
        <h2>
            Add Review
        </h2>
        <form action="reviewform.php" method="POST">
            <br> Name:
            <br>
            <input type="text" name="name">
            <br> Review:
            <br>
            <input id="addreview" name="addreview">
            <textarea name="Write a review" > </textarea>
            

            <input type="submit" value="Add Review">
        </form>
    </main>


</body>

</html>
