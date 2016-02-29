<?php
if ($_GET['action']=='logout')
{
 session_start();
 session_destroy();
 header('Location: /?logout');
}

elseif ($_GET['action']='login')
{        
        session_start();
        include 'lib/dbopen.php';
        $sql ="SELECT * FROM users where username = '".$_POST["usr"]."';";
        $ret = $db->query($sql);
        $row = $ret->fetchArray(SQLITE3_ASSOC);
        if ( isset($row['uid']) ){
            if (password_verify($_POST['pswd'], $row['passhash'])){
                $_SESSION['usr'] = $row['uid'];
                header("Location: bins.php?ref=login");}
            else
                header("Location: /?ref=authfail");
        }
        else
        {
            header("Location: /?ref=authfail");
        }



}

else
{
    echo "Oh bother it's all gone wrong";
}
?>
