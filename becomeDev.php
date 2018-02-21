<?php

include('includes/header.php');

?>

<section>
    <h1> Sign up NOW!</h1>
    <h3> Get the best clients and become part of the greatest projects! </h3>
    
    <section id="signUpCase">
        <fieldset class="fieldDev">
            <p style="margin-bottom:10px;"> Click below to get your position </p>
            <button id="pos1">Click here </button>
        </fieldset>

        <form method="POST" action="process.php" id="signUp">
            <p>
                <label for="name"> First Name: </label>
                <input type="text" id="name" name="first_name" required>
            </p>
            <p>
                <label for="name2"> Last Name: </label>
                <input type="text" id="name2" name="last_name" required>
            </p>
            <p>
                <label for="email"> E-Mail:</label>
                <input type="email" id="email" name="e_mail" required>
            </p>
            <p>
                <label for="location"> Location: </label>
                <div id="map"></div>
            </p>
        
        <div style="clear:both"> </div>

        <p style="margin-top:10px">
            <input type="submit" id="click" name="submit_button" value="Submit now"> 
        </p>

        </form>
    </section>
    
    <img class="fieldDev" src="images/web3.jpg" title="Web Image" alt="Web Image">
   

</section>

<script
  src="http://maps.google.com/maps/api/js?key=AIzaSyDKcHxHCcWkmb3bXp_kumcHhN97C6kZCSA">
</script>

  <script>
    document.getElementById('pos1').addEventListener('click', showLocation);

    function showLocation() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
            }
            
        else {
            alert("Your browser does not support geolocation!");
            }
    }

    function showPosition(position){
        let url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude;
        let getServer = fetch(url);
        getServer.then(data => {
            data.json().then(info => {
                alert ("Latitude: " + position.coords.latitude + "\nLongitude: " + position.coords.longitude + "\nFull-address: " + info.results[1].formatted_address);
            });
        });
    }

    if (navigator.geolocation) {
        let timeoutVal = 10 * 1000 * 1000;
        navigator.geolocation.getCurrentPosition(
            displayPosition, 
            displayError,
            { enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
        );
    } else {
        alert("Geolocation is not supported by this browser");
    }

    function displayPosition(position) {
        let pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        let options = {
            zoom: 10,
            center: pos,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        let map = new google.maps.Map(document.getElementById("map"), options);
        let marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: "User location"
        });
        let contentString = "<b>Timestamp:</b> " + parseTimestamp(position.timestamp) + "<br/><b>User location:</b> lat " + position.coords.latitude + ", long " + position.coords.longitude + ", accuracy " + position.coords.accuracy;
        let infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }
    
    function displayError(error) {
        let errors = { 
            1: 'Permission denied',
            2: 'Position unavailable',
            3: 'Request timeout'
        };
        alert("Error: " + errors[error.code]);
    }
    
    function parseTimestamp(timestamp) {
        let d = new Date(timestamp);
        let day = d.getDate();
        let month = d.getMonth() + 1;
        let year = d.getFullYear();
        let hour = d.getHours();
        let mins = d.getMinutes();
        let secs = d.getSeconds();
        let msec = d.getMilliseconds();
        return day + "." + month + "." + year + " " + hour + ":" + mins + ":" + secs + "," + msec;
    }
</script>

<?php

include('includes/footer.php');

?>