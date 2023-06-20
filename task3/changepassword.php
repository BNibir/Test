<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $currentPassword = "password123#"; 


    $currentPasswordInput = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $retypePassword = $_POST['retype_password'];


    if ($currentPasswordInput === $currentPassword) {
        if ($newPassword !== $currentPassword) {
            if ($newPassword === $retypePassword) {
                
                echo "Password changed successfully!";
            } else {
                echo "New Password and Retyped Password do not match!";
            }
        } else {
            echo "New Password should be different from the Current Password!";
        }
    } else {
        echo "Incorrect Current Password!";
    }
}
?>
