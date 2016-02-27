<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<meta charset="UTF-8">
<body>
    <h1>&nbsp;&nbsp;  
    <?php
        if(isset($_GET['ref']))
        {
            if ($_GET['ref']=='logout')
                {echo "Session Destroyed";}
            elseif ($_GET['ref']=='authfail')
                {echo "Incorrect Username or Password";}
            elseif ($_GET['ref']=='access')
                {echo "Please Login to continue";}
            elseif ($_GET['ref']=='signup')
                {echo "Account Registered";}
            else
                echo "Something's gone wrong";
        }
        else
                {echo "Welcome to Binformant.tk";}
        ?>
    </h1> 
    <header>
        <?php
            session_start();
            if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
            header("Location: bins.php");
            }
        ?>
        
        <form method="post" action="session.php?action=login">
        Username: <input type="text" name="usr">
        Password: <input type="password" name="pswd">

        <input type="submit" value="Login" class="pbutton"></input>

            <input type="submit" value="Sign Up" class="pbutton" form="sup"></input>
        </form>
                <form method="get" action="signup.php" id="sup"></form>
        

    </header>
    <main>
        <h2></h2>
        <h2>
            Woah, bins on the internet? The future is here
        </h2>
        <img src="http://i.imgur.com/0wbFdAh.gif" width=640px height=400px > </img>
        
       

    </main>
    <footer>
        こんにちは、私はフッターちゃんです、はじめまして
    </footer>
</body>
