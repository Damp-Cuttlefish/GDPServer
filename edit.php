<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
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
       }
    ?>
    
    <h1>&nbsp;&nbsp;Binformant v0.2β </h1>
    <header>
        <a href="bins.php" class="abutton + button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="login.php" class="button">Log Out</a>
    </header>
    <main>
        <h2>Alerts</h2>
        <p>
        <?php 
                $sql ="SELECT * from bins where uid = '" . $_GET['uid'] . "';";

                $ret = $db->query($sql);
                while($row = $ret->fetchArray(SQLITE3_ASSOC) ){                          
                ?>
                    <div style="float:left;" >
                    <h3>
                    <form action="edit.php?uid=<?php echo $_GET['uid'] ?>" method="post" id="editform">
                        <table>
                            <tr><td>Name: </td><td><input type="text" rows="10" value="<?php echo $row['name'];?>"></td></tr>
                            <tr><td>Description:</td><td> <textarea form="editform"><?php echo $row['description'];?></textarea></td></tr>
                            <tr><td>Location:</td><td> <input type="text" rows="10" value="<?php echo $row['location'];?>"></td></tr>
                            <tr><td>Address:</td><td> <textarea form="editform">Broken until I get a geocoding API key</textarea></td></tr>
                            <tr><td>Groups:</td><td> <input type="text" alt="comma seperated" rows="10" value="<?php echo $row['groups'];?>"></td></tr>
                            <tr><td>Types:</td><td> <input type="text" rows="10" value="<?php echo $row['type'];?>"></td></tr>
                            <tr><td>Average Area:</td><td> <input type="number" rows="10" value="<?php echo $row['csa'];?>">cm<sup>2</sup></td></tr>
                            <tr><td><input type="file" name="image" id="editform" accept="image/*"></td><td><input value="Confirm Edits" name="confirm" type="submit"><input value="Cancel" name="cancel" type="submit"></td></tr>                 
                            <!--<div class="wrapper" style="display:block;">
                                help
                                <div class="tooltip">This is where it tells you how to do the thing</div>
                            </div>
                            </div>-->
                        </table>
                    </form>
                    </h3>
                    </div>
                    <div style="float:left;" ><img src="<?php echo $row['image_path'];?>" style="width:200px; height:280px; padding:10px;"></div>
                <?php } ?>
        </p>
       
       
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
