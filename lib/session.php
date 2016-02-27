<?php
if ($_GET['action']=='logout')
{
 session_start();
 session_destroy();
 header('Location: /?asdas');
}

elseif ($_GET['action']='login')
{        
        session_start();
        include 'lib/dbopen.php';
        $sql ="SELECT * FROM users where username = '".$_POST["usr"]."';";
        $ret = $db->query($sql);
        $row = $ret->fetchArray(SQLITE3_ASSOC);
        if ( isset($row['username']) ){
            if ($row['passhash'] == password_hash($_POST['pswd'], PASSWORD_DEFAULT)){
                $_SESSION['usr'] = $row['uid'];
                header("Location: bins.php?ref=login");}
            else
                echo "Wrong password?";
        }
        else
        {
        echo "fail";
            //header("Location: /?ref=authfail");
        }



}

else
{
    echo "Oh bother it's all gone wrong";
}
?>
