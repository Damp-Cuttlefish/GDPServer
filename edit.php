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
          echo "Opened database successfully\n";
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
                    
                    <h3>
                        Name: <input type="text" rows="10" value="<?php echo $row['name'];?>"><br>
 
                        Description: <textarea ><?php echo $row['description'];?></textarea><br>
                        Location: <input type="text" rows="10" value="<?php echo $row['location'];?>"><br>
                        Address: <input type="text" rows="10" value="Broken until I get a geocoding api key"><br>
                        <img src="<?php echo $row['image_path'];?>"><br>
                        <input type="file" name="image" id="editform" accept="image/*"><br>
                        Groups: <input type="text" alt="comma seperated" rows="10" value="<?php echo $row['groups'];?>"><br>
                        Types: <input type="text" rows="10" value="<?php echo $row['type'];?>"><br>
                        Average Area: <input type="number" rows="10" value="<?php echo $row['csa'];?>">cm<sup>2</sup><br>                   
  <div class="wrapper" style="display:block;">
  help
    <div class="tooltip">This is where it tells you how to do the thing</div>
  </div>
</div>
                        
                        
                <?php } ?>
        </p>
       
       
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
