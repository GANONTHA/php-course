<?php

//CONNECT TO DATABASE

$dsn = ("mysql:host=localhost;dbname=html_db");
$dbusername = 'root';
$dbpassword = '';


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect" . $e->getMessage());
}
