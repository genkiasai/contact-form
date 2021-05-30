<?php
    $mysql = "mysql:dbname=pd-contact;host=localhost:3306;charset=utf8";
    $id = "root";
    $password = "1025asai";
    
    try {
        $db = new PDO ($mysql, $id, $password);
    } catch (PDOException $e) {
        print($e->getMessage);
    }


?>