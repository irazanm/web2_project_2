<?php

require 'configration.php';
unset($_SESSION['logIn']);
session_destroy();
mysqli_close($connection);
header("Location:index.html");
exit();
?>


