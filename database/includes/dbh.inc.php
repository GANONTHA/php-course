<?php


//CONNECT TO DB

$dsn = "mysql:host = localhost;dbname=html_db";
$dbusername = "root";
$dbpassword = "";


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo 'Connection failed' . $err->getMessage();
}
