<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point of Interest</title>
</head>
<body>
<body onload="init()">
	<header>
		<h1>Welcome to Points Of Interest</h1>
		<a href="https://edward2.solent.ac.uk/~wad1802/">Back to the assignment page 😀 </a>
	</header>
	
	<main>
	<div class="searchform">
			
        <h2>
           Search Point of Interest
        </h2>
            <form action="poisearchservice.php" method="POST">
                <br> Region:
                <br>
                <input type="text" name="region">
                <br> Type:
                <br>
                <input type="text" name="type">
                
                <br>


            <input type="submit" value="Search Point of Interest">
        </form>
	</div>

    <!-- Add the Form from the other file -->
			<div class="addform">
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
	</div>
    
      <div id="responseDiv">
		<h2>Search Results</h2>
	  </div>
			<div id="responseDiv2">
		<h2>Your Search Results on a Map</h2>
		<div id="map1"></div>
		<br>
		<br>
		</div>
	<br>
		</main>
	
	<footer>
	<p> Oluwaseun Fadipe - Web Application Development (SWD601) - PointsOfInterest (AE2)</p>
	</footer>
</body>
</html>

    
</body>
</html>