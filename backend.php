<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="layout.css">
</head>

<body>
<h1>Binformant</h1>
<?php if (array_key_exists('submit', $_POST)): ?>
Data From Sensor #<?php echo $_POST["uid"]; ?><br>

Level: <?php echo $_POST["level"]; ?><br>
Max Level: <?php echo $_POST["levelmax"]; ?> <br>
Fill Percentage: <?php echo 100*(intval($_POST["level"])/intval($_POST["levelmax"])) ?><br>
Battery Level: <?php echo $_POST["battlevel"]; ?><br>

<?php else: ?>

<form action="/client.php" method="post">
Bin Level: <input type="text" name="BinLevelCurrent"><br>
Bin Level Max: <input type="text" name="BinLevelMax"><br>
Status: <input type="text" name="Status"><br>
UID: <input type="text" name="UID"><br>
<input type="submit" name="submit">
</form>

<?php endif ?>

</body>
</html>


