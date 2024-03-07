<?php

//query the username from database

use LDAP\Result;

function query_username( $pdo, $username){
    $query = " SELECT username FROM users WHERE username = :username ;";

    $stm = $pdo->prepare($query);
    $stm -> bindParam(":username", $username);
    $stm->execute();

    $result  =  $stm->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function query_email( $pdo, $email){
    $query = " SELECT username FROM users WHERE username = :username ;";

    $stm = $pdo->prepare($query);
    $stm -> bindParam(":email", $email);
    $stm->execute();

    $result  =  $stm->fetch(PDO::FETCH_ASSOC);
    return $result;

}