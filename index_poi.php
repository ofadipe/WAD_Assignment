<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type='text/javascript' src='ajax.js'></script>
    <script type='text/javascript' src='/wad/leaflet/leaflet.js'></script>
    <script type='text/javascript' src='mapapp.js'></script>
    <link rel='stylesheet' type='text/css' href='/wad/leaflet/leaflet.css' />

    <title>Point of Interest</title>
</head>

<body>

    <body onload="init()">
        <!--

    I will do this at the end
    <header>
    
		<h1>Welcome to Points Of Interest</h1>
		<a href="https://edward2.solent.ac.uk/~wad1802/">Back to the assignment page 😀 </a>
	</header>
	-->
        <main>

            <div class="searchform">
                <h2>Search Point of Interest</h2>

                Region: <input id='region' />
                <input type='button' id='btn1' value='Search Point of Interest' />
                <div id='responseDiv'></div>

            </div>


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
            <div id='map'>
            
                <input type='text' placeholder='Search Regions' id='region'>
                <input type='button' id='btn2' value='Find Location'>

                <div id="resultsDiv">

                </div>

                <div id="map1" style="width:800px; height:600px"> </div>

    </body>

</html>


</body>

</html>