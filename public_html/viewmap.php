<?php
$page_title = 'Map - BlendEats';
$pgDesc = 'BlendEats Map';
$keyWords = 'food,culture,world,food project';
$extralink=array('https://unpkg.com/leaflet@1.7.1/dist/leaflet.css');
include('header.php');

?>

 
<body>

    <?php include("nav.php")
    //  http://ipinfo.io/212.201.44.245?token=3eccd991c3faa3
    ?>

    <div class="main-content">

        <div class="container-fluid mb-5 mt-5 centerr">
        <h3> Current Location according to your Public IP Address </h3>

            <div class="info">This website uses <a href="http://ipinfo.io/">ipinfo </a>  to get IP details and location and <a href="https://www.openstreetmap.org/">openstreetmap</a>  for displaying map. Pleaase check their Terms of Service and Privacy Policy.
            <br>This is not that accurate as using location/GPS tracking which we are not doing on this website.</div>
            <div class="ipinfo" id="map">
            </div>
            <div id="mapview" style="height:70vh;">
            loading...
            </div>
        </div>


    </div>




    <?php include("footer.php") ?>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
    
        $(document).ready(() => {

            var elem = $('#map');


            $.ajax({
                url: "http://ipinfo.io/?token=3eccd991c3faa3",
                method: "GET",
                dataType: "json",
                success: (data) => {
                    //update tags on every change
                    console.log(data);
                    var loc = data.loc.split(",")
                    elem.html("IP : "+ data.ip + "<br> Region: "+ data.region);

                    var map = L.map('mapview').setView([loc[0],loc[1]], 13);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    L.marker([loc[0],loc[1]]).addTo(map)
                        .bindPopup('IP ADDRESS: ' + data.ip + "<br> Region: "+ data.region + "<br>Location: " + data.loc )
                        .openPopup();
                },

                error: () => { 
                    $("#mapview").html("Fetching info failed.");

                 } 
            })
        });
    </script>

</body>

</html>
<!DOCTYPE html>