<?php

require 'configration.php';
unset($_SESSION['logIn']);
unset($_SESSION['name']);
unset($_SESSION['id']);

session_destroy();
mysqli_close($connection);
header("Location:index.html");
exit();
?>


