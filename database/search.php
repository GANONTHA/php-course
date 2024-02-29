<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = $_POST["search"];  // get the username from form data
  

    try {
        require_once "includes/dbh.inc.php";     // include database connection
        $query = "
        SELECT * from users
        ;";
        // prepare statement for execution
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":search", $search);
      
        // $stmt->execute([$username,$password,$email]);   // bind values and execute 
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //close the connection
        $pdo = null;
        $stmt = null;
        
    } catch (PDOException $err) {
        die("Error!: " . $err->getMessage());
    }
} else {
    header("Location: ../index.html");   // Redirecting to home page if the user is not trying to post a request 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h2>Result of your query: </h2>
    <?php
        if(empty($result)){
            echo '<p>' . 'No result found'. '</p>';
        }else{
            var_dump($result);
        }
    ?>
</body>
</html>