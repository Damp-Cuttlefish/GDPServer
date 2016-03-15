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
    <h1>&nbsp;&nbsp;Binformant</h1>
    <header>
        <a href="bins.php" class="button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="abutton + button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main>
        <h2>Example Alerts</h2>
        <h2>Alerts</h2>
        <h3>No Alerts for this account</h3>
        <h2>Example Alerts</h2>
        <div style="width:70px; float:left;">
            <ftxt> [!] </ftxt>
        </div>
        <p>
        <h3>
            Fill Alert
        </h3>
        Sudden fill detected in <a href="http://binformant.tk/stats.php?uid=bin-456-763-345">Student Union #2</a>
        </p>
        <br>
        <div style="width:70px; float:left;">
            <ftxt> 🔋 </ftxt>
        </div>
        <p>
        <h3>
            Battery Alert
        </h3>
        Low battery alert for <a href="http://binformant.tk/stats.php?uid=bin-123-456-789">Student Union</a>, battery has been low for 3 days
        </p>
       
        
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
