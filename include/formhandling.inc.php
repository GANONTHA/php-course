<?php

//check if the post request has been made properly
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //get the data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try {
        require_once 'dbh.inc.php';
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
        //prepare statement 
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $password);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        //close the connection setting values to NULL
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("WOW IT WENT WRONG: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
