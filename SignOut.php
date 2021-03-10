<?php

require 'configration.php';
mysqli_close($connection);
session_destroy();
header("Location:index.html");
exit();
?>

