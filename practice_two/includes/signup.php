<?php

if($_SERVER['REQUEST_MODE']=='POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    try{
        require_once 'dbh.inc.php';
        require_once 'signup_model.php';
        require_once 'signup_contr.php';

        //ERROR HANDLERS
        $error = [];
        if(is_input_empty($username, $password, $email)){
            $error['empty_input'] = ' fill in all fields';
        }
        if(validate_email($email)){
            $error['invalid_email'] = ' email invalid';

        }
        if(is_username_taken( $pdo, $username)){
            $error['username_invalid'] = ' username already in use';

            
        }
        if(is_email_taken( $pdo, $email)){
            $error['empty_input'] = ' fill in all fields';


        }

    }catch(PDOException $err){
        die('Could not Query: ' . $err->getMessage());
    }
}