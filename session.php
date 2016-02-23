<?php
if ($_GET['action']=='logout')
{
 session_start();
 session_destroy();
 header('Location: /');
}

elseif ($_GET['action']='login')
{        
        session_start();
         if($_POST['usr']=="ABC" && $_POST['pswd']=="123"){
         $_SESSION['usr'] = "ABC";
         $_SESSION['pswd'] = "123"; 
         header("Location: bins.php?ref=login");
         }
         else{
         header("Location: /?ref=authfail");
         }



}

else
{
    echo "Oh bother it's all gone wrong";
}
?>
