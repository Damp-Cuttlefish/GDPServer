
<?php
include "dbopen.php";

function guidv4($data)
        {
            assert(strlen($data) == 16);

            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

if ( ! (isset($_POST['pass']) && isset($_POST['passconfirm']) && isset($_POST['email']) && isset($_POST['username']))){
    header("Location: signup.php?ref=fconflict");
    die();
}


$sql ="SELECT * FROM users where username = '".$_POST["username"]."';";
$ret = $db->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
if ( isset ($row['uid'])){
    header("Location: signup.php?ref=uconflict");
    die();
}

$sql ="SELECT * FROM users where email = '".$_POST["email"]."';";
$ret = $db->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
if ( isset ($row['uid'])){
    header("Location: signup.php?ref=econflict");
    die();
}


if ( $_POST['pass']!= $_POST['passconfirm']){
    header("Location: signup.php?ref=pconflict");
    die();
}

$sql = "INSERT INTO users VALUES ('acc-".guidv4(openssl_random_pseudo_bytes(16))."', '".$_POST['username']."', '".password_hash($_POST['pass'], PASSWORD_DEFAULT)."', '".$_POST['email']."', ' ' )";
$ret= $db->exec($sql);
header("Location: index.php?ref=create");
die();


?>

