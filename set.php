<!DOCTYPE html>
<?php
  include 'lib/accesscheck.php';
  include 'lib/dbopen.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<body>
    <h1>&nbsp;&nbsp;Binformant v0.2β </h1>
    <header>
        <a href="bins.php" class="button">Bins</a>
        <a href="groups.php" class="button">Groups</a>
        <a href="alert.php" class="button">Alerts</a>
        <a href="map.php" class="button">Map</a>
        <a href="set.php" class="abutton + button">Settings</a>
        <a href="session.php?action=logout" class="button">Log Out</a>
    </header>
    <main>
        <h2>Alerts</h2>
        <p>
        <h3>
            <?php
                $sql ="SELECT * FROM users where uid = '".$_SESSION['usr']."';";
                $ret = $db->query($sql);
                $row = $ret->fetchArray(SQLITE3_ASSOC);
            ?>
            <form action="set.php" method="post" id="editform"><input type="hidden" name="uid" value="<?echo php$_SESSION['usr'];?>">
                <table>
                    <tr><td>Email Address: </td><td><input type="text" rows="10" value="<?php echo $row['email'];?>"></td></tr>
                    <tr><td>Email Notifications:</td><td>
                    <select name="notify">
                        <option value="on">Enabled</option>
                        <option value="off">Disabled</option>
                    </select></td></tr>
                    
                    <tr><td>New Password*:</td><td><input type="password" name="password"></tr></td>
                    <tr><td>Confirm New Password:</td><td><input type="password" name="passconfirm"></tr></td>
                    <tr><td>Old Password**:</td><td><input type="password" name="password"></tr></td>
                    <tr><td><input value="Confirm Edits" name="confirm" class="lpbutton" type="submit"> <input value="Cancel" class="lpbutton" name="cancel" type="submit"></tr></td>
                    <!--<div class="wrapper" style="display:block;">
                        help
                        <div class="tooltip">This is where it tells you how to do the thing</div>
                    </div>
                    </div>-->
                </table>
            </form>
        </h3>
        * Leave blank to keep current password<br>                    
                    ** Required to make account changes
        </p>
    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
