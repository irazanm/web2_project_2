<?php

//the importent line in php 
require 'configration.php';
//cheack if the server recive requst or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login-username']) && isset($_POST['login-password']) && isset($_POST['Type'])) {
//        $_POST['login-email'] = mysql_real_escape_string($_POST['login-email']);
//        $_POST['login-password'] = mysql_real_escape_string($_POST['login-password']);
        //  $_POST['login-password'] = password_hash($_POST['login-password'], PASSWORD_BCRYPT); //hashing the password
        $sqlSerch = "SELECT * FROM " . $_POST['Type'] . " WHERE username = '" . $_POST['login-username'] . "'";
        $result = mysqli_query($connection, $sqlSerch);
        $row = mysqli_fetch_assoc($result);
        $_POST['login-password'] = $_POST['login-password'] . '';
        $row['password'] = $row['password'] . '';
        //mysqli_num_rows($result) == 1 && 
        if (mysqli_num_rows($result) == 1 && password_verify($_POST['login-password'], $row['password'])) {

            session_start();
            if (!isset($_SESSION['type'])) {
                //create session valribale 
                $_SESSION['type'] = $_POST['Type'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];

                if ($_POST['Type'] == "coach") {
                    $_SESSION['speciality'] = $row['speciality'];
                }
            }
            if ($_POST['Type'] == "coach") {
                header("Location:Coach_home.php");
            } else {
                header("Location:Trainee_home.php");
            }
            exit();
        } else {
            echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("Invalid password/username OR Invalid type "); </script>';
        }
    } else {
        //acually no need becouse the attrbiute required at the input but just to make sure.
        echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("Enter All the requirment please !"); </script>';
    }
}
?>

