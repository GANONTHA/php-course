<?php

// one of the inputs is empty
function is_input_empty($username, $pwd, $email) {
    if(empty($username) || empty($pwd) || empty($email)) {
        return false;  
    }else{
        return true;
    }
}

//validate the email address

function  validate_email($email)  {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

//does the username already exists?

function is_username_taken( $pdo, $username){
    if(query_username($pdo, $username)){
        return true;
    }else{
        return false;
    }

}
//does the email already exists?

function is_email_taken( $pdo, $email){
    if(query_username($pdo, $email)){
        return true;
    }else{
        return false;
    }

}