<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map View</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha384-XQoYMqMTK8LvdxXYG3W0n5Ewt1ed6H20ivYjoR1EDYaXNuYAv7U/+/M5mW1B6E29" crossorigin="" />

    <style>
    #map {
        height: 600px;
        width: 100%;
    }
    </style>
</head>

<body>
    <div id="map"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha384-qjKJSnHnYThG82+fUpe8h8yoe/PZL0A07j9vHJrTCM0UuX4pTqS+qD2uKI4p5YZ+" crossorigin=""></script>

    <script>
    // Initialize the map and set its view to a specific location
    var map = L.map('map').setView([-6.200000, 106.816666], 13); // Set the latitude and longitude, and the zoom level

    // Add a tile layer to the map (this is the background map layer)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker to the map
    var marker = L.marker([-6.200000, 106.816666]).addTo(map)
        .bindPopup('This is Jakarta.')
        .openPopup();
    </script>
</body>

</html>