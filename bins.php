<!DOCTYPE html>
<?php
  include 'lib/accesscheck.php';
  include 'lib/dbopen.php';
?>

<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nova+Mono' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<body>
    <h1 style="z-index:2;">&nbsp;&nbsp;Binformant v0.2β </h1>
    <header style="z-index:1;">
        <a href="bins.php" class="abutton + button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main style="z-index:-2;">
        <h2>Bins</h2>
        <filterbar>
            <div style="width:131px;float:left;">
                Time Until Full<br>
                <input type="checkbox" name="bin" value="full">
                <input type="number" id="num" name="j" alt="Entering a value less than 1 will display bins that are currently full">
            </div>
            <div style="width:200px; float:left;">
                Date Last Emptied<br>
                <input type="checkbox" name="bin" value="full">
                <input type="date" id="num"  name="j">
            </div>
            <div style="width:120px; float:left;">
                Bin Type:<br>
                <select name="bin" multiple="multiple" id="mult" alt="No selection will display all types">
                    <option value="full">Recycling</option>
                    <option value="lowbatt">Food Waste</option>
                    <option value="empty">Glass</option>
                    <option value="all">Aspirations</option>
                </select>
            </div>
            <div style="width:120px; float:left;">
                Group:<br>
                <select name="bin" multiple="multiple" id="mult"alt="No selection will display all groups">
                    <option value="full">Customer A</option>
                    <option value="lowbatt">Customer B</option>
                    <option value="empty">University</option>
                </select>
            </div>
        </filterbar>
        &nbsp;
        <a href="bins.php" class="rbutton">Add</a>
        <a href="bins.php" class="rbutton">???</a>
        &nbsp;&nbsp;&nbsp;
        <a href="bins.php" class="lbutton">Filter</a>
        </div>
        <div style="position:relative; top:20px;">
            <p>
            <table style="width:100%">
                
                <?php 
                $sql ="SELECT * from bins;";

                $ret = $db->query($sql);
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ){                          
                ?>
                
                <tr width=100px>
                    <td><img src="<?php echo $row['image_path'];?>"></td>
                    <td>
                        <div style="width:131px; float:left;">
                            <ftxt> 32% </ftxt>
                        </div>
                        <div style="width:131px; float:right;">
                            <a href="edit.php?uid=<?php echo $row['uid'];?>" class="rbutton">Edit</a>
                            <a href="stats.php?uid=<?php echo $row['uid'];?>" class="rbutton">Stats</a>
                        </div>
                        <div style="width:131px; float:left;">
                            <h2>ETF: 4 days</h2>
                        </div>
                        <div style="width:300px; float:left;">
                            <h3>
                                <?php echo $row['name'];?>
                            </h3>
                            <?php echo $row['description'];?>
                        </div>
                    </td>
                </tr>
                
                <?php } ?>
                
        </table>
        </p>
        </div>
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
<?php
$db->close();

?>
