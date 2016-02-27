<!DOCTYPE html>
<?php
if (isset($_POST["signup"]))
{
    include "lib/useradd.php";
}    

else{
?>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<header>
<h1>&nbsp;&nbsp;Binformant v0.2β</h1>
<form method="post" action="session.php?action=login">
        Username: <input type="text" name="usr">
        Password: <input type="password" name="pswd">

        <input type="submit" value="Login" class="pbutton"></input>
        </form>
</header>
<body>    
    <br><br><br><br>
    <?php
    if (isset($_GET['ref']))
    {
        if ($_GET['ref'] == 'uconflict')
            echo "The username you entered is already in use";
        elseif ($_GET['ref'] == 'econflict')
            echo "The email address you entered is already associated with another account";
        elseif ($_GET['ref'] == 'pconflict')
            echo "The password and confirmation you entered did not match";
        elseif ($_GET['ref'] == 'fconflict')
            echo "All fields must be filled";
    }
    ?>
    <table>
    <form method="post" action="signup.php">
    
    <tr><td>Email: </td><td><input type="text" name="email" </td></tr>
    <tr><td>Username: </td><td><input type="text" name="username"</td></tr>
    <tr><td>Password: </td><td><input type="password" name="pass"</td></tr>
    <tr><td>Confirm Password: </td><td><input type="password" name="passconfirm" </td></tr>
    <tr><td></td><td><input value="Sign Up" class="lpbutton" name="signup" type="submit"></td></tr>
    </form>
</table>
</body>
<footer>
        こんにちは、私はフッターちゃんです、はじめまして
</footer>
<?php
}
?>
