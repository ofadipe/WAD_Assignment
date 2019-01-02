var a = document.getElementById('region').value;

ajaxConnection.addEventListener("load", e =>

        var output = ""; // initialise output to blank text

        var allPOIs = JSON.parse(e.target.responseText);


        var pos = [50.908, -1.4]; map.setView(pos, 14);

        L.marker(pos).addTo(map);


        function init() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(processPosition, handleError);
            } else {
                alert("Sorry, geolocation not supported in this browser");
            }
        }


        function processPosition(gpspos) {
            var info = 'Lat: ' + gpspos.coords.latitude + ' lon: ' + gpspos.coords.longitude;
            console.log(info); // show on the console
        }

        function handleError(err) {
            alert('An error occurred: ' + err.code);
        }



        ajaxConnection.addEventListener("load", e => {
            var output = ""; // initialise output to blank text
            var allPOIs = JSON.parse(e.target.responseText);
            allpois.forEach(curPOI => {
                // add the details of the current poi to the "output" variable
                output = output + `poi name: ${curPOI.name} type: ${curpoi.type} region: ${curpoi.region} country: ${curpoi.country} lat: ${curpoi.lat} lon: ${curpoi.lon} <br /> `;
            });

        });


        ajaxConnection.open("GET", `https://poi.com/webservice.php?poi=${a}`);

        // Send the request.
        ajaxConnection.send();\



        ajaxConnection.addEventListener("load", e => {
                var output = "";
                var allPOIs = JSON.parse(e.target.responseText);
                allpois.forEach(curPOI => {
                    output = output + `poi name: ${curPOI.name} type: ${curpoi.type} region: ${curpoi.region} country: ${curpoi.country} lat: ${curpoi.lat} lon: ${curpoi.lon} <br /> `;
                });



          
                

<div id="app">
<h1>{{ message }}</h1>
</div>

<script>
var myObject = new Vue({
    el: '#app',
    data: {message: 'Hello Vue!'}
})
</script>



function init() {
    document.getElementById("btn1").addEventListener("click", sendAjax);
}
//This reads in the input from the form in httracks 
function sendAjax() {
    var a = document.getElementById('artist').value;

    var ajaxConnection = new XMLHttpRequest();

    ajaxConnection.addEventListener("load", e => {
            var output = "";

            var allSongs = JSON.parse(e.target.responseText);

            //This add details of the songs

            allSongs.forEach(curSong => {
            
                output = output + `Artist: ${curSong.artist} Song: ${curSong.title} <br /> `;
                
                document.getElementById("responseDiv").innerHTML = output;
            });

        }

    )
        
    ajaxConnection.open("GET", `https://edward2.solent.ac.uk/~ofadipe/htwebservice.php?artist=${a}`);

    // Send the request.
    ajaxConnection.send();
}