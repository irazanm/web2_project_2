<?php

//the importent line in php
require 'configration.php';
//cheack if the server recive requst or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fullName']) && isset($_POST['Username']) && isset($_POST['signup-email']) && isset($_POST['signup-password'])) {

//        $_POST['fullName'] = mysql_real_escape_string($_POST['fullName']);
//        $_POST['Username'] = mysql_real_escape_string($_POST['Username']);
//        $_POST['signup-email'] = mysql_real_escape_string($_POST['signup-email']);
//        $_POST['signup-password'] = mysql_real_escape_string($_POST['signup-password']);
        $sqlNumOfRow = mysqli_query($connection, "SELECT * FROM trainee;");
        if ($sqlNumOfRow) {
            $numberOfRows = intval (mysqli_num_rows($sqlNumOfRow))+1; //for the Id
        } else {
            echo '<script type="text/JavaScript">window.alert("Something want Wrong try again \n' . mysqli_error($connection) . '"); </script>';
        }
        $_POST['signup-password'] = password_hash($_POST['signup-password'], PASSWORD_BCRYPT); //hashing the password
        $sqlInsert = "INSERT INTO `trainee` (`id`, `username`, `password`, `name`, `email`) VALUES ('" . $numberOfRows . "', '" . $_POST['Username'] . "','" . $_POST['signup-password'] . "', '" . $_POST['fullName'] . "', '" . $_POST['signup-email'] . "');";

        $result = mysqli_query($connection, $sqlInsert);
        //$isInserted = mysqli_fetch_assoc($result);

        if ($result) {
            session_start();
            if (!isset($_SESSION['id'])) {
                //create session valribale 
                $_SESSION['type'] = "trainee";
                $_SESSION['id'] = $numberOfRows ;
                $_SESSION['username'] = $_POST['Username'];
                $_SESSION['name'] = $_POST['fullName'];
                $_SESSION['email'] = $_POST['signup-email'];
            }
            header("Location:Trainee_home.php");
            exit();
        } else {
            echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("exist username  \n try again!!"); </script>';
            //
        }


//
//        if (mysqli_num_rows($result) == 1) {
//            $row = mysqli_fetch_assoc($result);
//            session_start();
//            if (!isset($_SESSION['type'])) {
//                //create session valribale 
//                $_SESSION['type'] = $_POST['Type'];
//                $_SESSION['id'] = $row['id'];
//                $_SESSION['username'] = $row['username'];
//                $_SESSION['name'] = $row['name'];
//                $_SESSION['email'] = $row['email'];
//            }
//            if ($_POST['Type'] == "coach") {
//                header("Location:Coach_home.php");
//            } else {
//                header("Location:Trainee_home.php");
//            }
//            exit();
//        } else {
//            echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("Invalid password/email OR Invalid type "); </script>';
//        }
//    } else {
//        //acually no need becouse the attrbiute required at the input but just to make sure.
//        echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("Enter All the requirment please !"); </script>';
//    }
    }
}
?>