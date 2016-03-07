
<?php

include "lib/dbopen.php";
$defaultTime="1";

$sql ="SELECT * from bins where uid = '" . $_POST['UID'] . "';";
$ret = $db->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
if (isset($row['time']))
    $requestTime = $row['time'];
else
    $requestTime = $defaultTime;




$sql = "INSERT INTO bindata VALUES ('bin-".$_POST['UID']."', ".$_POST['BinLevelMax'].", ".$_POST['BinLevelCurrent'].", ".time().",'".$_POST['Status']."');";
$ret= $db->exec($sql);
echo $requestTime;
die();
?>

