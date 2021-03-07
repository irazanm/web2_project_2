<?php

//the importent line in php
require 'configration.php';
//cheack if the server recive requst or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //check if the values exist or not 
    if (isset($_POST['fullName']) && isset($_POST['Username']) && isset($_POST['signup-email']) && isset($_POST['signup-password'])) {
        //create new id number 
        $sqlNumOfRow = mysqli_query($connection, "SELECT * FROM trainee;");
        if ($sqlNumOfRow) {
            $numberOfRows = intval(mysqli_num_rows($sqlNumOfRow)) + 1; //for the Id
        } else {
            echo '<script type="text/JavaScript">window.alert("Something want Wrong try again \n' . mysqli_error($connection) . '"); </script>';
        }
        //hashing the password
        $_POST['signup-password'] = password_hash($_POST['signup-password'], PASSWORD_BCRYPT);
        //insert qury
        $sqlInsert = "INSERT INTO `trainee` (`id`, `username`, `password`, `name`, `email`) VALUES ('" . $numberOfRows . "', '" . $_POST['Username'] . "','" . $_POST['signup-password'] . "', '" . $_POST['fullName'] . "', '" . $_POST['signup-email'] . "');";
        //execute the qury
        $result = mysqli_query($connection, $sqlInsert);
        //if the result return erorr that mean the username alrady exist
        if ($result) {
            //after the insertion start new session for new trainee 
            session_start();
            if (!isset($_SESSION['id'])) {
                //create session valribale 
                $_SESSION['type'] = "trainee";
                $_SESSION['id'] = $numberOfRows;
                $_SESSION['username'] = $_POST['Username'];
                $_SESSION['name'] = $_POST['fullName'];
                $_SESSION['email'] = $_POST['signup-email'];
            }
            //after creation redirect the user to the home page
            header("Location:Trainee_home.php");
            exit();
        } else {
            echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("exist email or username  \n try again!!"); </script>';
        }
    }
}
?>