<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<body>
    <h1>&nbsp;&nbsp;Binformant v0.1β </h1>
    <header>
        <a href="bins.php" class="button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="abutton + button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="login.php" class="button">Log Out</a>
    </header>
    <main>
    <h2>Map</h2>
    &nbsp;
    <div style="text-align:center;">
        <select name="bin">
            <option value="full">Full</option>
            <option value="lowbatt">Low Battery</option>
            <option value="empty">Usage</option>
            <option value="all">All</option>
            <option value="all">Last Emptied</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="bin" value="full">Recycling
        <input type="checkbox" name="bin" value="full">Food Waste
        <input type="checkbox" name="bin" value="full">Glass
        <a href="alert.php" class="rbutton">Filter</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div style="text-align:center;">
        <iframe src="emap.php" style="width:80%; height:500px;">
        </iframe>
    </div>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
