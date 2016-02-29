<?php
            session_start();
            if (! isset($_SESSION['usr']))
            {
            header("Location: /?ref=access");
            exit(0);
            }            
?>
