<?php

try {
  require_once 'includes/dbh.inc.php';
  $query = '
  SELECT * FROM customers ;
;';

  $stm = $pdo->prepare($query);
  $stm->execute();
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  $pdo = null; //closing the connection to the database
  $stm = null;
} catch (PDOException $err) {
  die('Fatal Error: ' . $err->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reading <Datag></Datag>
  </title>
</head>

<body>
  <h2>Writting to and reading from a</h2>
  <form action="search.php" method="post">
    <p>Search term:</p>
    <label for="search">Name: </label>
    <input type="text" name="search" id="search" />
    <button type="submit">Submit</button>
  </form>
  <h2>Lit of all Users</h2>

  <ol>
    <?php
    if (empty($result)) {
      echo "<p> The users' list is empty</p>";
    } else {
      // var_dump($result);
      foreach ($result as $customer) {
        echo  '<li>';
        echo "Number : " . $customer['customerNumber'] . " ";
        echo "Fullname : " . $customer['customerName'] . " ";
        echo "City : " . $customer['city'] . "<br/>";
        echo "Country : " . $customer['country'] . "<br/>";
        echo "Phone : " . $customer['phone'] . "<br/>";
        echo  "</li>";
      }
    }
    ?>
  </ol>
</body>

</html>