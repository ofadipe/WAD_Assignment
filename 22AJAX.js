var map;

function init() {
    console.log('init function is working ');

    document.getElementById("btn1").addEventListener("click", sendAJAX);


    map = L.map("map1");
    var attrib = "Map data copyright OpenStreetMap contributors, Open Database Licence";
    L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: attrib
    }).addTo(map);


    // test user device if it can open location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(processPosition, handleError);
    } else {
        alert("Sorry mate, unfortunately this browser is not supported... Are you still using Internet Explorer Ã°Å¸Ëœâ€š");
    }

}

function processPosition(regionLocation) {


    var pos = [regionLocation.coords.latitude, regionLocation.coords.longitude];
    map.setView(pos, 8);

    //to add bindpopup, first read into variable, then add bindPopup
    var markers = L.marker(pos).addTo(map);
    markers.bindPopup('this is you mate')
        .openPopup();

}

function handleError(err) {
    alert('An error occurred: ' + err.code);
}




//FIND LOCATION POI 
function sendAJAX() {
    console.log('searching time');
    var a = document.getElementById('region').value;

    var ajaxConnection = new XMLHttpRequest();

    ajaxConnection.addEventListener("load", e => {
        //================================================

        var allLocation = JSON.parse(e.target.responseText);
        let resultsContainer = document.getElementById('responseDiv'); 

        console.log(allLocation);


        allLocation.forEach(regionLocation => {
            var pos = [regionLocation.lat, regionLocation.lon];
            console.log(regionLocation);
            var marker = L.marker(pos).bindTooltip('Type: ' + regionLocation.type + ' <br/> Region: ' + regionLocation.region + ' <br/> Country: ' + regionLocation.country).addTo(map);


            let resultsBox = document.createElement("div"); //#endregion

                    resultsBox.className = 'result';

                    let nameLine = document.createElement('h3');
                    nameLine.innerHTML = regionLocation.name;

                    let typeLine = document.createElement('h4');
                    typeLine.innerHTML = regionLocation.type

                    let regionLine = document.createElement('p');
                    regionLine.innerHTML = regionLocation.region

                    let countryLine = document.createElement('p');
                    countryLine.innerHTML = regionLocation.country

                    let lonLine = document.createElement('p');
                   lonLine.innerHTML = 'Lon:'+ regionLocation.lon;

                   let latLine = document.createElement('p');
                   latLine.innerHTML = 'Lat:'+ regionLocation.lat;

                        resultsBox.append(nameLine);
                        resultsBox.append(typeLine);
                        resultsBox.append(regionLine);
                        resultsBox.append(countryLine);
                        resultsBox.append(lonLine);
                        resultsBox.append(latLine);

                        resultsContainer.append(resultsBox);



          //  map.setView(pos, marker).addTo(map);
        });
    });

    //===================================================

    // Open the connection to a given remote URL.
    ajaxConnection.open("GET", 'https://edward2.solent.ac.uk/~wad1802/poisearchservice.php?region=' + a); // Send the request.
    ajaxConnection.send();
}