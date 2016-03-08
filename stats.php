<!DOCTYPE html>
<?php
  include 'lib/accesscheck.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<body>
    <h1>&nbsp;&nbsp;Binformant v0.1β </h1>
     <?php
        include "lib/dbopen.php";
        $sql ="SELECT * from bins where uid = '" . $_GET['uid'] . "';";
        $ret = $db->query($sql);
        $binprofile = $ret->fetchArray(SQLITE3_ASSOC);
     ?>
    <header>
        <a href="bins.php" class="abutton + button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main>
        <h2>Cool bin statistics</h2>
        <h2>Statistics for <?php echo $binprofile['name'];?></h2>
     
        <p>
        <h3>
            
        </h3>
        
        <?php
            $crunchid = $_GET['uid'];
            include 'lib/crunch.php';
            
            echo "<h3>Data Frequency</h3>";
            echo $pointCount." datapoints found, <br>";
            echo "First data recieved on <b>".date("l jS \of F Y h:i:s A", $firstrow['time'])."</b><br>";
            echo "Latest data recieved on <b>".date("l jS \of F Y h:i:s A", $lastrow['time'])."</b><br>";
            echo "Average sample time <b>".round(($lastrow['time']-$firstrow['time'])/($pointCount*60))." minutes(s)</b>"   ;
        ?>
        <h3>Fill Rate</h3>
        <?php
            echo "Average fill time<b> ".round($avgfilltime/(3600*24))." day(s)</b><br>";

            if ($fill > 100)
                echo "Sensor out of range, check device mounting or recalibrate if bin depth has changed";
            else
                echo "Current fill level <b>".$fill."%</b><br>";
            echo "Estimated time until full <b>".round($etf/3600)." hours (".round($etf/(3600*24))." days)</b><br>";
             
            
        ?>
        </p>
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
