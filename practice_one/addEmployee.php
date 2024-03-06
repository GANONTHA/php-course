<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $job_position = $_POST['job'];

    //QUERY THE DB FOR INSERTION

    try {

        require_once 'includess/dbh.inc.php';

        $query = " INSERT INTO employees (firstName, lastName, phone, email, city, job_position) VALUES (:firstName, :lastName, :phone, :email, :city, :job_position )
        ;";

        //PREPARE STATEMENT & BIND PARAMS
        $stm = $pdo->prepare($query);
        $stm->bindParam(":firstName", $firstName);
        $stm->bindParam(":lastName", $lastName);
        $stm->bindParam(":phone", $phone);
        $stm->bindParam(":email", $email);
        $stm->bindParam(":city", $city);
        $stm->bindParam(":job_position", $job_position);
        //EXECUTE
        $stm->execute();
        //CLOSE CONNECTION & RETURN TO FORM 
        $stm = null;
        $pdo = null;
        header('Location:../index.html');
        die();
    } catch (PDOException $err) {
        die('A fatal Error happened: ' . $err->getMessage());
    }
} else {
    header('Location:../index.html');
}
