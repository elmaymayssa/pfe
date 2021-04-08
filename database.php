<?php 
  $ip="127.0.0.1";
        $login="root";
        $pwd="";
        $dbname="eventvirtual";
        $dsn="mysql:host=".$ip.";dbname=".$dbname;
        //1-Se connecter à la base de données
          $db=new PDO($dsn,$login,$pwd);
          ?>