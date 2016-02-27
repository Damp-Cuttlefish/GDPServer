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
    <h1>&nbsp;&nbsp;Binformant v0.2β </h1>
    <header>
        <a href="bins.php" class="button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="abutton + button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main>
        <h2>Alerts</h2>
        <div style="width:70px; float:left;">
            <ftxt> [!] </ftxt>
        </div>
        <p>
        <h3>
            Oh No!
        </h3>
        Everything is on fire, run whilst you still can!
        </p>
        <div style="width:70px; float:left;">
            <ftxt> 🔋 </ftxt>
        </div>
        <p>
        <h3>
            More importantly
        </h3>
        Your batteries are getting kinda low
        </p>
        <div style="width:70px; float:left;">
            <ftxt>F</ftxt>
        </div>
        <p>
        <h3>
            Oh and by the way
        </h3>
        That cool bin's been full for a while
        </p>
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
