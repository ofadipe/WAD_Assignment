var map;

function init() {
    console.log('YEAHHHH init works ');
    // For the search
    document.getElementById("btn1").addEventListener("click", sendAjax);
    //For the map
    document.getElementById("btn2").addEventListener("click", sendAJAX);


    map = L.map("map1");
    var attrib = "Map data copyright OpenStreetMap contributors, Open Database Licence";
    L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: attrib
    }).addTo(map);


    // test user device if it can open location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(processPosition, handleError);
    } else {
        alert("Sorry mate, unfortunately this browser is not supported... Are you still using Internet Explorer 😂");
    }


    function processPosition(gpspos) {


        var pos = [gpspos.coords.latitude, gpspos.coords.longitude];
        map.setView(pos, 10);

        //to add bindpopup, first read into variable, then add bindPopup
        var markers = L.marker(pos).addTo(map);
        markers.bindPopup('This is you mate')
            .openPopup();

    }

    function handleError(err) {
        alert('An error occurred: ' + err.code);
    }



}



function sendAJAX() {
    var a = document.getElementById('region').value;

    var ajaxConnection = new XMLHttpRequest();

    ajaxConnection.addEventListener("load", e => {
        //================================================

        var allLocation = JSON.parse(e.target.responseText);

        allLocation.forEach(gpspos => {
            var pos = [gpspos.lat, gpspos.lon];
            //var marker = L.marker(pos).addTo(map);
            var marker = L.marker(pos).bindTooltip('Type: ' + gpspos.type + ' <br/> Region: ' + gpspos.region + ' <br/> Country: ' + gpspos.country).addTo(map);


            map.setView(pos, 10).addTomap;
            //================================================
            var allPOIs = JSON.parse(e.target.responseText);
            let resultsContainer = document.getElementById('responseDiv');


            // Loop through each
            allPOIs.forEach(curPOI => {
                // This is a different technique that create DOM elements.                         
                let resultsBox = document.createElement("div"); //#endregion

                resultsBox.className = 'result';

                let nameLine = document.createElement('h3');
                nameLine.innerHTML = curPOI.name;

                let typeLine = document.createElement('h4');
                typeLine.innerHTML = curPOI.type

                let regionLine = document.createElement('p');
                regionLine.innerHTML = curPOI.region

                let countryLine = document.createElement('p');
                countryLine.innerHTML = curPOI.country

                let lonLine = document.createElement('p');
                lonLine.innerHTML = 'Lon:' + curPOI.lon;

                let latLine = document.createElement('p');
                latLine.innerHTML = 'Lat:' + curPOI.lat;

                resultsBox.append(nameLine);
                resultsBox.append(typeLine);
                resultsBox.append(regionLine);
                resultsBox.append(countryLine);
                resultsBox.append(lonLine);
                resultsBox.append(latLine);

                resultsContainer.append(resultsBox);








            });
        });

        //===================================================

        // Open the connection to a given remote URL.
        ajaxConnection.open("GET", `https://edward2.solent.ac.uk/~wad1802/poisearchservice.php?region=${a}`);
        // Send the request.
        ajaxConnection.send();
    })
}