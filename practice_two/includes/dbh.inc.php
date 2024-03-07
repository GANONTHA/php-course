<?php

$dns = 'myslq:host=localhost;dbname=html_db';
$dbusername = 'root';
$dbpassword = '';

try{
    $pdo = new PDO($dns, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $err){
    die('Could not connect: ' . $err->getMessage());
}