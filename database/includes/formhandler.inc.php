<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];  // get the username from form data
    $password = $_POST["password"];
    $email = $_POST["email"];       // get email id from  form data

    try {
        require_once "dbh.inc.php";     // include database connection
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username,:pwd,:email);";
        // prepare statement for execution
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $password);
        // $stmt->execute([$username,$password,$email]);   // bind values and execute 
        $stmt->execute();
        //close the connection
        $pdo = null;
        $stmt = null;
        header("Location: ../index.html");   // Redirecting to home page after closing the connection
        die();
    } catch (PDOException $err) {
        die("Error!: " . $err->getMessage());
    }
} else {
    header("Location: ../index.html");   // Redirecting to home page if the user is not trying to post a request 
}
