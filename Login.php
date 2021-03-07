<?php

//the importent line in php 
require 'configration.php';
//cheack if the server recive requst or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //check if the values exist or not 
    if (isset($_POST['login-username']) && isset($_POST['login-password']) && isset($_POST['Type'])) {
        //send search qury for the username (the username is uniqe in the database 
        $sqlSerch = "SELECT * FROM " . $_POST['Type'] . " WHERE username = '" . $_POST['login-username'] . "'";
        //execute the qury
        $result = mysqli_query($connection, $sqlSerch);
        //get the row wich is only one no way to get more than 1
        $row = mysqli_fetch_assoc($result);
        //just for making them string for the password_verfiy()
        $_POST['login-password'] = $_POST['login-password'] . '';
        $row['password'] = $row['password'] . '';
        //first check the result if wronge or not after that just to make sure that's only one user and than check the password if eqaul or not
        if ($result && mysqli_num_rows($result) == 1 && password_verify($_POST['login-password'], $row['password'])) {
            //after athoruzation start sesstion 
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
            //redirect the user 
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

