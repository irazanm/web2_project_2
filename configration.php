<?php

global $connection;
define('HOST_NAME', "localhost");
define('USER', "root");
define('PASS', "root");
define('DATABASE', "fitness");
$connection = mysqli_connect(HOST_NAME, USER, PASS, DATABASE);

//handle the error
if (mysqli_connect_error() != null) {
    die(mysqli_connect_error());
}
//do not display the errors
ini_set('display_errors', '0');

?>

