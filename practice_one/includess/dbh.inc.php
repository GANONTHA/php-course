<?php

//CONNECT TO DATABASE WITH PDO
$dsn = ("mysql:host=localhost; dbname = msiley_db");
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    die('ERROR: Could not connect to the Database: ' . $err->getMessage());
}
