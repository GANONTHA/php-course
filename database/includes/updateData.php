<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = $_POST['pwd'];
    $username = $_POST['username'];

    try{
require_once "dbh.inc.php";
$query = '
    UPDATE users 
    SET username = :username 
    WHERE pwd = :password
;';
//prepare state

$stm = $pdo->prepare($query);
$stm->bindParam(":usernae",$username);
$stm->bindParam(":password",$password);

$stm -> execute();
//close connexion
$stm=null;
$pdo = null;
echo "Modification réussie !";


    }catch(PDOException $err){
        die('Counldnt update: '. $err -> getMessage());
    }
}