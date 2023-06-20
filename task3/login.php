<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validUsername = $validPassword = "";
    if (empty($_POST['username'])) {
        echo "The name field is required.";
    } 
    else if (!preg_match('/^[A-Za-z0-9._-]{2,}$/', $username)) {
        echo "User Name can contain alpha numeric characters, period, dash or
        underscore only";
    } 
    else {
        $validUsername = True;
    }

    if (empty($_POST['password'])) {
        echo "The password field is required.";
    } 

    else if (!preg_match('/^(?=.*[@#$%])[A-Za-z0-9@#$%]{8,}$/', $password)) {
        echo "Password must not be less than eight (8) characters, must contain at least one of the special characters (@, #, $,%)";
    }

    else {
        $validPassword = True;
    }
    if($validUsername && $validPassword) {
        echo "Login successfull<br>Your username is: ". $username . "<br>Your password is:" . $password;
    }


}
?>
