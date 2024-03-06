<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $username = $_POST['username'];

    try {
        require_once "dbh.inc.php";
        $query = '
    UPDATE users 
    SET username = :username 
    WHERE pwd = :pwd
;';
        //prepare state

        $stm = $pdo->prepare($query);
        $stm->bindParam(":username", $username);
        $stm->bindParam(":pwd", $password);

        $stm->execute();
        //close connexion
        $stm = null;
        $pdo = null;
        echo "Modification réussie !";
    } catch (PDOException $err) {
        die('Counldnt update: ' . $err->getMessage());
    }
}
