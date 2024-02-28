<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <?php
  //check to make sure the request is comming from the form
  if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    //read data from the input fields, never trust data that are submitted from users
    $number_one = filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT);
    $number_two = filter_input(INPUT_POST, 'num02', FILTER_SANITIZE_NUMBER_FLOAT);
    $operate = htmlspecialchars($_POST['operator']);

    //make sure none of the input fields is empty. Error handler
    $error = false;
    if( empty($number_one) || empty($number_two) || empty($operate) ){
        echo "<p>None of the fields must not be left blank</p>";
        $error = true;
    }
    //make sure the numbers are of type numeric
    if(!is_numeric($number_one) || !is_numeric($number_two)){
        echo "<p>The numbers must be of type numeric</p>";
        $error = true;
    }
    //Do the operations
    //in case the error flag is not false, then proceed to the calculus
    if( !$error ){
        $value = 0;
        switch( $operate ){
            case 'add':
                $value = $number_one + $number_two;
                break;
            case 'multiply':
                $value = $number_one * $number_two;
                break;
            case 'subtract':
                $value = $number_one - $number_two;
                break;
            case 'division':
                $value = $number_one / $number_two;
                break;
            default:
                echo "<p>Murthy's law just got satisfied...</p>";
        }
        echo "<p>The final result is: $value</p>";
    }
  }
    ?>
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <input type="number" name="num01" placeholder="Number one" value="<?php echo $number_one; ?>">
        <input type="number" name="num02" placeholder="Number two" value="<?php echo $number_two; ?>">
        <select name="operator">
            <option value="add" >+</option>
            <option value="multiply">*</option>
            <option value="subtract">-</option>
            <option value="division">/</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>