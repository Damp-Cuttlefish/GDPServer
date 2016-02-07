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
  <?php
       class BDB extends SQLite3
       {
          function __construct()
          {
             $this->open('bins.db');
          }
       }
       $db = new BDB();
       if(!$db){
          echo $db->lastErrorMsg();
       } else {
          echo "Opened database successfully\n";
       }
    ?>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.8, lng: -1.06},
          zoom: 14
        });
        
        var locations = [
         <?php 
                $sql ="SELECT * from bins;";

                $ret = $db->query($sql);
                $pointcount = 1;
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ){          
                ?>
    [ "<h3><?php echo $row['name'];?></h3><?php echo $row['description'];?> <br> <img src=<?php echo $row['image_path'];?> width=100px>",
        <?php echo $row['location'];?>,
        <?php echo $pointcount; ?>,
        "<?php echo $row['account_id'];?>",
        "<?php echo $row['name'];?>"
    ],
    <?php $pointcount++; }?>
    
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
