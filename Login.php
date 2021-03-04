<?php

//the importent line in php 
require 'configration.php';
//cheack if the server recive requst or not
//try {
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login-email']) && isset($_POST['login-password']) && isset($_POST['Type'])) {
        //  mysql_real_escape_string($_POST['login-email']);
        //  mysql_real_escape_string($_POST['login-email']);
        $sqlSerch = "SELECT * FROM " . $_POST['Type'] . " WHERE UPPER(email) = UPPER('" . $_POST['login-email'] . "') && UPPER(password) = UPPER('" . $_POST['login-password'] . "')";
        $result = mysqli_query($connection, $sqlSerch);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
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
//            if (strcasecmp($_POST['login-email'], $row['email']) == 0 and strcasecmp($_POST['login-password'], $row['password']) == 0) {
            if ($_POST['Type'] == "coach") {
                //echo "<script>window.location.href='Coach_home.php';</script>";
                header("Location:Coach_home.php");
            } else {
                // echo "<script>window.location.href='Trainee_home.php';</script>";
                header("Location:Trainee_home.php");
            }
            exit();
//            } else {
//                throw new Exception('
//                        <script type="text/JavaScript">  
//              alert("Invalid password/email"); 
//              </script>');
//            }
        } else {
            echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("Invalid password/email OR Invalid type "); </script>';
//            echo '<script type="text/JavaScript">window.alert("Invalid password/email"); </script>';
//            header("Location:index.html");
//            exit();
//                throw new Exception('
//                        <script type="text/JavaScript">  
//              alert("Invalid access"); 
//              </script>');
        }
    } else {
        //acually no need becouse the attrbiute required at the input but just to make sure.
        echo '<script type="text/JavaScript">window.location.href="index.html"; window.alert("Enter All the requirment please !"); </script>';
//        header("Location:index.html");
//        exit();
    }
}
//} catch (Exception $ex) {
//    echo getMessage($ex);
//    //echo "<script>window.location.href='index.html';</script>";
//    header("Location:index.html");
//    exit();
//}
?>

