// JavaScript file, ajax.js
function init() {


    // For simplicity, we're specifying that when the button clicks,
    // a regular callback function 'sendAjax' will run, rather than an arrow function.
    // This is because we are using an arrow function in our AJAX code as well


    document.getElementById("btn1").addEventListener("click", sendAjax);
    // This allows users to press enter, because it adds an event lister for a key press 
    document.querySelector('#btn1').addEventListener('keypress', function (e) {
        e.preventDefault();
        if (e.key === 'Enter') {
            sendAjax()
        }
    });

}
//This reads in the input from the form in Point of Interest 
function sendAjax() {
    // Read in the input from the region form
    var a = document.getElementById('region').value;
    //  var b = document.getElementById('type').value;

    // Set up our AJAX connection variable (this is an object, for those of you who have done OO programming)
    var ajaxConnection = new XMLHttpRequest();

    // Set up the callback function. Here, the callback is an arrow function.
    ajaxConnection.addEventListener("load", e => {
                // Check if its curPOI or curRegion

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

                    var allLocation = JSON.parse(e.target.responseText);

                    allLocation.forEach(gpspos => {
                        var pos = [gpspos.lat, gpspos.lon];
                        var marker = L.marker(pos).bindTooltip('Type: ' + gpspos.type + ' <br/> Region: ' + gpspos.region + ' <br/> Country: ' + gpspos.country).addTo(map);




                    });
                    console.log(output);
                })


                // Open the connection to a given remote URL.
                //  (this need to be edited to correct URL)
                ajaxConnection.open("GET", `https://edward2.solent.ac.uk/~wad1802/poisearchservice.php?region=${a}`);


                // Send the request.
                ajaxConnection.send();
            }