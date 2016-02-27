<?php
class BDB extends SQLite3
       {
          function __construct()
          {
             $this->open('bins.db');
          }
       }
       $db = new BDB();
       if(!$db){
          echo $db->lastErrorMsg();
       } else {

       }
?>
