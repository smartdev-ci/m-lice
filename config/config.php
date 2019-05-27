<?php
session_start();
    $dbhost = "localhost";
    $dbname = "mlice";
    $dbuser = "root";
    $dbpass = "";
    $message = "";

    try {
        $db = new PDO("mysql: dbhost=$dbhost; dbname=$dbname; charset=utf8", $dbuser, $dbpass);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
