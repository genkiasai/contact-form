<?php
    $mysql = "mysql:dbname=pd-contact;host=localhost:3306;charset=utf8";
    $id = "root";
    $password = "1025asai";
    // $mysql = "mysql:dbname=pd-contact;host=mysql2010.db.sakura.ne.jp;charset=utf8";
    // $id = "muscle";
    // $password = "1025asai";
    
    try {
        $db = new PDO ($mysql, $id, $password);
    } catch (PDOException $e) {
        print($e->getMessage);
    }


?>