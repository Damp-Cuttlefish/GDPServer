<html>


<html>
<body>
<?php if (array_key_exists('submit', $_POST)): ?>
Data From Sensor #<?php echo $_POST["uid"]; ?><br>

Level: <?php echo $_POST["level"]; ?><br>
Max Level: <?php echo $_POST["levelmax"]; ?> <br>
Fill Percentage: <?php echo 100*(intval($_POST["level"])/intval($_POST["levelmax"])) ?><br>
Battery Level: <?php echo $_POST["battlevel"]; ?><br>
<?php if (array_key_exists('submit', $_POST)): ?>

<?php else: ?>

<form action="/public/test2.php" method="post">
Bin Level: <input type="text" name="level"><br>
Bin Level Max: <input type="text" name="levelmax"><br>
Battery Level: <input type="text" name="battlevel"><br>
UID: <input type="text" name="uid"><br>

<input type="submit" name="submit">
</form>

<?php endif ?>

</body>
</html>



