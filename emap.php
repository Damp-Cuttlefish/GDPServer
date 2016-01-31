<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.8, lng: -1.06},
          zoom: 14
        });
        
        var locations = [
    [
        "<h3>A Bin</h3> The bin we put rubbish in",
        50.79,
        -1.083,
        1,
        "Some Guy",
        "",
        "Norfolk Botanical Gardens, 6700 Azalea Garden Rd.",
        "coming soon"
    ],
    [
        "<h3>Another Bin</h3> That really cool bin everyone likes",
        50.79,
        -1.076203,
        2,
        "Terry Cox-Joseph",
        "Rowena's",
        "758 W. 22nd Street in front of Rowena's",
        "found"
    ],
    
]
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0], locations[i][6]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

        
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0-_yQ6HbuJbQK1PEXpJTnE9JDBX3NV4M&callback=initMap"
    async defer></script>

  </body>
</html>
