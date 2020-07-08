<?php
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // Same as $_POST but the added filter input helps to provide an extra layer of protection from injection etc into database.
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    //IF username/password field is empty the corrisponding error will fire
    if (empty($username)) {
        $usernameError = "Please enter a username";
    }elseif(strlen($username) < 6){ //ELSEIF the strlen(stringLength) is less than 6 - fire the below error. We use the same variable because it just updates the valiue of the variable depending on error.
        $usernameError = "Please enter a username with more than 6 characters";
    }

    //IF username/password field is empty the corrisponding error will fire
    if (empty($password)) {
        $passwordError = "Please enter your password";
    }elseif(strlen($password) < 8)
        $passwordError = "Password too weak, please use more then 8 characters";
    include('index.php');

    //IF there is no error fired from either $usernameError or $passwordError then move to success.php
    //success.php is included because everything else on the web page is the same.
    if (empty($usernameError) && empty($passwordError)) {
        include('success.php');
    } else {
        // include('index.php');
    }

?>
