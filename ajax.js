// JavaScript file, ajax1.js
function init() {


    // For simplicity, we're specifying that when the button clicks,
    // a regular callback function 'sendAjax' will run, rather than an arrow function.
    // This is because we are using an arrow function in our AJAX code as well, and I don't
    // want to overcomplicate things at this stage by having too many arrow functions inside other arrow functions!

    document.getElementById("btn1").addEventListener("click", sendAjax);

}

function sendAjax() {
    // Read in the input from the region form
    var a = document.getElementById('region').value;
    var b = document.getElementById('type').value;

    // Set up our AJAX connection variable (this is an object, for those of you who have done OO programming)
    var ajaxConnection = new XMLHttpRequest();

    // Set up the callback function. Here, the callback is an arrow function.
    ajaxConnection.addEventListener ("load",e =>
        {
          // Check if its curPOI or curRegion
             var output = ""; // initialise output to blank text
             var allPOIs = JSON.parse(e.target.responseText);


             // Loop through each
             allPOIs.forEach( curPOI =>
                    {
                        // add the details of the current flight to the "output" variable
                        output = output + `poi name: ${curPOI.name} type: ${curPOI.type} region: ${curPOI.region} country: ${curPOI.country} lat: ${curPOI.lat} lon: ${curPOI.lon} <br /> `;
                    } );
            // Put the HTML output into the results div (up to you to do!)
            var w = document.getElementById("response").innerHTML = output;

        });


    // Open the connection to a given remote URL.
  //  (this need to be edited to correct URL)
  ajaxConnection.open("GET" , `https://edward2.solent.ac.uk/~wad1802/poisearchservice.php?type=pub&region=${a}`);


    // Send the request.
    ajaxConnection.send();
}
