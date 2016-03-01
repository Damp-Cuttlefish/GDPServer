<!DOCTYPE html>
<?php
    include 'lib/accesscheck.php';
    include 'lib/dbopen.php';
    if (isset($_POST['confirm'])){
        if ($_GET['uid'] == 'new'){
            $sql = "INSERT INTO bins VALUES ('".$_POST['uid']."', '".$_POST['name']."', '".$_POST['description']."', '".$_POST['location']."', '".$_POST['csa']."', '".$_SESSION['usr']."', 'OK', '".$_POST['types']."', '".$_POST['groups']."', 'resources/bins/".$_POST['uid'].".jpg')";
        }
        else{
            $uid = $_GET['uid'];
            $sql = "INSERT INTO users VALUES ('acc-".guidv4(openssl_random_pseudo_bytes(16))."', '".$_POST['username']."', '".password_hash($_POST['pass'], PASSWORD_DEFAULT)."', '".$_POST['email']."', ' ' )";
        }

        $ret= $db->exec($sql);
        
    }  

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
        <a href="bins.php" class="abutton + button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main>
        <h2>Alerts</h2>
        <p>
        <div style="float:left;" >
        <h3>

        <?php if ($_GET['uid'] == 'new'): ?>
            <form action="edit.php?uid=<?php echo $_GET['uid'] ?>" method="post" id="editform">
                        <table>
                            <tr><td>Bin ID: </td><td><input type="text" name="uid" rows="10" value=""></td></tr>
                            <tr><td>Name: </td><td><input type="text" rows="10" name="name" value=""></td></tr>
                            <tr><td>Description:</td><td> <textarea name="description" form="editform"></textarea></td></tr>
                            <tr><td>Location:</td><td> <input type="text" rows="10" name="location" value=""></td></tr>
                            <tr><td>Address:</td><td> <textarea form="editform" name="address">Broken until I get a geocoding API key</textarea></td></tr>
                            <tr><td>Groups:</td><td> <input type="text" alt="comma seperated" name="groups" rows="10" value=""></td></tr>
                            <tr><td>Types:</td><td> <input type="text" rows="10" name="types" value=""></td></tr>
                            <tr><td>Average Area:</td><td> <input type="number" rows="10" name="csa" value="">cm<sup>2</sup></td></tr>
                            <tr><td>
<input type="file" name="image" id="editform" accept="image/*"></td><td><input value="Add" name="confirm" class="lpbutton" type="submit"> <input value="Cancel" class="lpbutton" name="cancel" type="submit"></td></tr>
                        </table>
                    </form>


        <?php else:
                $sql ="SELECT * from bins where uid = '" . $_GET['uid'] . "';";
                $ret = $db->query($sql);
                $row = $ret->fetchArray(SQLITE3_ASSOC)                          
        ?>
                    
                    <form action="edit.php?uid=<?php echo $_GET['uid'] ?>" method="post" id="editform">
                        <table>
                            <tr><td>Name: </td><td><input type="text" rows="10" value="<?php echo $row['name'];?>"></td></tr>
                            <tr><td>Description:</td><td> <textarea form="editform"><?php echo $row['description'];?></textarea></td></tr>
                            <tr><td>Location:</td><td> <input type="text" rows="10" value="<?php echo $row['location'];?>"></td></tr>
                            <tr><td>Address:</td><td> <textarea form="editform">Broken until I get a geocoding API key</textarea></td></tr>
                            <tr><td>Groups:</td><td> <input type="text" alt="comma seperated" rows="10" value="<?php echo $row['groups'];?>"></td></tr>
                            <tr><td>Types:</td><td> <input type="text" rows="10" value="<?php echo $row['type'];?>"></td></tr>
                            <tr><td>Average Area:</td><td> <input type="number" rows="10" value="<?php echo $row['csa'];?>">cm<sup>2</sup></td></tr>
                            <tr><td>
<input type="file" name="image" id="editform" accept="image/*"></td><td><input value="Confirm Edits" name="confirm" class="lpbutton" type="submit"> <input value="Cancel" class="lpbutton" name="cancel" type="submit"></td></tr>
                        </table>
                    </form>
        <?php endif;?>
                    </h3>
                    </div>
                    <div style="float:left;" ><img src="<?php echo $row['image_path'];?>" style="width:200px; height:280px; padding:10px;"></div>
            
        </p>
       
       
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
