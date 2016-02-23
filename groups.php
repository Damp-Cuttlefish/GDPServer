<!DOCTYPE html>
<?php
  include 'accesscheck.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<body>
    <h1>&nbsp;&nbsp;Binformant v0.2β </h1>
    <header>
        <a href="bins.php" class="button">Bins</a>
        <a href="groups.php" class="abutton + button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main>
        <h2>Groups</h2>
        &nbsp;
        <a href="bins.php" class="rbutton">Search</a>
        <a href="bins.php" class="rbutton">Add</a>
        </div>
        <div style="position:relative; top:20px;">
            <p>
            <table style="width:100%">
                <tr width=100px>
                    <td><img src="bin2.jpg"></td>
                    <td>
                        <div style="width:131px; float:left;">
                            <ftxt> Yes </ftxt>
                        </div>
                        <div style="width:131px; float:right;">
                            <a href="edit.php" class="rbutton">Edit</a>
                            <a href="stats.php" class="rbutton">Stats</a>
                        </div>
                        <div style="width:131px; float:left;">
                            <h2>????</h2>
                        </div>
                        <div style="width:300px; float:left;">
                            <h3>
                                Cool Bins
                            </h3>
                            You know the ones
                        </div>
                    </td>
                </tr>
                <tr width=100px>
                    <td><img src="bin.jpg"></td>
                    <td>
                        <div style="width:131px; float:left;">
                            <ftxt> No </ftxt>
                        </div>
                        <div style="width:131px; float:right;">
                            <a href="edit.php" class="rbutton">Edit</a>
                            <a href="stats.php" class="rbutton">Stats</a>
                        </div>
                        <div style="width:131px; float:left;">
                            <h2>???</h2>
                        </div>
                        <div style="width:300px; float:left;">
                            <h3>
                                Uncool Bins
                            </h3>
                            The shit bins noone likes
                        </div>
                    </td>
                </tr>
            </table>
            </p>
        </div>
    </main>
    <footer class="chan">
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
