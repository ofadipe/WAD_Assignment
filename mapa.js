var map;

function init() {
    console.log();

    document.getElementById("btn2").addEventListener("click", findLocation);


    map = L.map("map1");
    var attrib = "Map data copyright OpenStreetMap contributors, Open Database Licence";
    L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: attrib
    }).addTo(map);


    // This checks if the user device can open location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(processPosition, handleError);
    } else {
        alert("Sorry mate, unfortunately this browser is not supported... Are you still using Internet Explorer 😂");
    }


    function processPosition(regionLocation) {
    

        var pos = [regionLocation.coords.latitude, regionLocation.coords.longitude];
        map.setView(pos, 8);

        //to add bindpopup, first read into variable, then add bindPopup
        var markers = L.marker(pos).addTo(map);
        markers.bindPopup('This is where you are')
            .openPopup();

    }

    function handleError(err) {
        alert('An error occurred: ' + err.code);
    }



}



 
function findLocation() {
    var a = document.getElementById('region').value;

    var ajaxConnection = new XMLHttpRequest();

    ajaxConnection.addEventListener("load", e => {
        //================================================

        var allLocation = JSON.parse(e.target.responseText);

        allLocation.forEach(regionLocation => {
            var pos = [regionLocation.lat, regionLocation.lon];
            var marker = L.marker(pos).bindTooltip('Type: ' + regionLocation.type + ' <br/> Region: ' + regionLocation.region + ' <br/> Country: ' + regionLocation.country).addTo(map);

        
            map.setView(pos, 8).addTomap;

        });
    });

    //===================================================

    // Open the connection to a given remote URL.
    ajaxConnection.open("GET", `https://edward2.solent.ac.uk/~wad1802/poisearchservice.php?region=${a}`);

// Send the request.
ajaxConnection.send();
};